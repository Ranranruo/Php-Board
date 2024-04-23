<?php


Router::Add('GET', '/', function () {
  if (!empty($_SESSION['sid'])) {
    $result = DB::fetch("SELECT name FROM auth WHERE idx=?", [$_SESSION['sid']]);
    $name = $result ? $result->name : 'GUEST';
  } else {
    $name = 'GUEST';
  }
  views('home', true, ['name' => $name]);
});
Router::Add('GET', '/login', function () {
  views('login', false);
});
Router::Add('GET', '/signup', function () {
  views('signup', false);
});
Router::Add('GET', '/write', function () {
  if (!empty($_SESSION['sid'])) {
    views('write', false);
  } else {
    header('Location: /login');
  }
});
Router::Add('GET', '/view/{idx}', function ($idx) {
  DB::exec("UPDATE posts SET views = views + 1 WHERE idx = ?", [$idx]);
  $data = DB::fetch("SELECT * FROM posts WHERE idx = ?", [$idx]);
  views('view', false, $data);
});
Router::Add('GET', '/edit/{idx}', function ($idx) {
  $data = DB::fetch("SELECT idx, title, contents FROM posts WHERE idx = ?", [$idx]);
  views('edit', false, $data);
});
