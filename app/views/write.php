<div class="con">
  <a href="/" class="gohome"><svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512">
      <path d="M177.5 414c-8.8 3.8-19 2-26-4.6l-144-136C2.7 268.9 0 262.6 0 256s2.7-12.9 7.5-17.4l144-136c7-6.6 17.2-8.4 26-4.6s14.5 12.5 14.5 22l0 72 288 0c17.7 0 32 14.3 32 32l0 64c0 17.7-14.3 32-32 32l-288 0 0 72c0 9.6-5.7 18.2-14.5 22z" />
    </svg></a>
  <form id="write" name="write" action="/write" method="post">
    <input name="title" type="text" class="title" placeholder="제목을 입력해주세요.">
    <textarea name="contents" type="text" class="contents" placeholder="내용을 입력해주세요"></textarea>
    <button>게시하기</button>
  </form>
</div>
<script src="./script/write.js"></script>