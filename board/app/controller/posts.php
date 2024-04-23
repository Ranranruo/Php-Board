<?php
Router::Add('GET', '/posts?{}', function () {
  header('Content-type: application/json; charset=UTF-8');
  // $input = isset($_GET['input']) ? $_GET['input'] : '';
  // $search = isset($_GET['search']) ? $_GET['search'] : 'title';
  // $sortkey = isset($_GET['sortkey']) ? $_GET['sortkey'] : 'create_at';
  // $sort = isset($_GET['sort']) ? $_GET['sort'] : 'desc';
  // $limit = isset($_GET['limit']) ? $_GET['limit'] : '18446744073709551615';
  // $offset = isset($_GET['offset']) ? $_GET['offset'] : '0';

  $input = $_GET['input'] ?? '';
  $search = $_GET['search'] ?? 'title';
  $sortkey = $_GET['sortkey'] ?? 'create_at';
  $sort = $_GET['sort'] ?? 'desc';
  $limit = $_GET['limit'] ?? '18446744073709551615';
  $offset = $_GET['offset'] ?? '0';

  $res = DB::fetchAll("SELECT * FROM posts WHERE $search LIKE '%$input%' ORDER BY $sortkey $sort LIMIT $limit OFFSET $offset");
  echo json_encode($res, JSON_UNESCAPED_UNICODE);
});
Router::Add('GET', '/posts/{idx}', function ($idx) {
  header('Content-type: application/json; charset=UTF-8');
  $res = DB::fetch("SELECT * FROM posts WHERE idx = ?", [$idx]);
  echo json_encode($res, JSON_UNESCAPED_UNICODE);
});
Router::Add('POST', '/posts', function () {
  header('Content-type: application/json; charset=UTF-8');
  $input = json_decode(file_get_contents('php://input'), true);
  $uid = $_SESSION['sid'];
  $title = $input['title'];
  $contents = $input['contents'];
  $writer = DB::fetch("SELECT name FROM auth WHERE idx = ?", [$uid]);
  $result = DB::exec("INSERT INTO posts (title, contents, writer, user_idx) VALUES ('$title', '$contents', '$writer->name', '$uid')");
  echo json_encode([
    'result' => $result
  ], JSON_UNESCAPED_UNICODE);
});

Router::Add('GET', '/delete/{idx}', function ($idx) {
  DB::exec("DELETE FROM posts WHERE idx = ?", [$idx]);
  header('Location: /');
});
Router::Add('PUT', '/posts/{idx}', function ($idx) {
  header('Content-type: application/json; charset=UTF-8');
  $input = json_decode(file_get_contents('php://input'), true);
  extract($input);
  $result = DB::exec("UPDATE posts SET title = '$title', contents = '$contents' WHERE idx = ?", [$idx]);
  echo json_encode([
    'result' => $result,
  ], JSON_UNESCAPED_UNICODE);
});