<?php
Router::Add('POST', '/signup', function () {
  header('Content-type: application/json; charset=UTF-8');
  $input = json_decode(file_get_contents('php://input'), true);
  $name = $input['name'];
  $id = $input['id'];
  $password = $input['password'];
  $result = DB::fetch("SELECT id FROM auth WHERE id=?", [$id]);
  if (!empty($result->id)) {
    echo json_encode([
      'success' => false,
      'massage' => '중복된 아이디 입니다.'
    ], JSON_UNESCAPED_UNICODE);
  } else {
    DB::exec("INSERT INTO auth (name, id, password) VALUES ('$name', '$id', '$password')");
    $result = DB::fetch("SELECT idx FROM auth WHERE id=?", [$id]);
    $_SESSION['sid'] = $result->idx;
    echo json_encode([
      'success' => true,
      'massage' => "회원가입 성공!",
    ], JSON_UNESCAPED_UNICODE);
  }
});
Router::Add('POST', '/login', function () {
  header('Content-type: application/json; charset=UTF-8');
  $input = json_decode(file_get_contents('php://input'), true);
  $id = $input['id'];
  $password = $input['password'];
  $result = DB::fetch("SELECT idx FROM auth WHERE id='$id' AND password='$password'");
  if (!empty($result)) {
    $_SESSION['sid'] = $result->idx;
    echo json_encode([
      'success' => true,
      'massage' => "로그인 성공!",
    ], JSON_UNESCAPED_UNICODE);
  } else {
    echo json_encode([
      'success' => false,
      'massage' => "아이디 또는 비밀번호가 틀렸습니다.",
    ], JSON_UNESCAPED_UNICODE);
  }
});
Router::Add('GET', '/logout', function () {
  unset($_SESSION['sid']);
  $prevPage = $_SERVER['HTTP_REFERER'];
  header('location:' . $prevPage);
});
