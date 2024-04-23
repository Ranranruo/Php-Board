<a href="/" class="gohome"><svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
        <path d="M177.5 414c-8.8 3.8-19 2-26-4.6l-144-136C2.7 268.9 0 262.6 0 256s2.7-12.9 7.5-17.4l144-136c7-6.6 17.2-8.4 26-4.6s14.5 12.5 14.5 22l0 72 288 0c17.7 0 32 14.3 32 32l0 64c0 17.7-14.3 32-32 32l-288 0 0 72c0 9.6-5.7 18.2-14.5 22z" />
    </svg></a>
<div class="con">
    <div class="back">
        <div class="text-box">
            <div class="logo">Logo</div>
            <div class="description">Logo 에서 제공하는 게시판 서비스를<br>이용하여 모르는 사람과 소통해보세요!</div>
        </div>
    </div>
    <form name="signup" action="/signup" id="signup-form" class="content" method="post">
        <div class="signup">회원가입</div>
        <div class="utill">
            <div class="input-box">
                <input name="name" id="name" type="text" placeholder="닉네임">
                <input name="id" id="id" type="text" placeholder="아이디">
                <input name="password" autocomplete="true" id="password" type="password" placeholder="비밀번호">
            </div>
            <a href="/login" class="help">계정이 이미 있으신가요?</a>
            <div class="error-box">
            </div>
        </div>
        <div class="btn">
            <button>회원가입</button>
            <a href="/login">로그인</a>
        </div>
    </form>
</div>
<script src="./script/signup.js"></script>
</body>