<header>
  <div class="logo">Logo</div>
  <div class="auth">
    <?php
    $res = (!empty($_SESSION['sid'])) ? DB::fetch('SELECT * FROM auth WHERE idx = ?', [$_SESSION['sid']]) : null;
    if (empty($res)) {
    ?>
      <a href="./login">로그인</a>
      <a href="./signup">회원가입</a>
    <?php
    } else {
    ?>
      <a href="/logout">로그아웃</a>
    <?php
    }
    ?>
  </div>
</header>