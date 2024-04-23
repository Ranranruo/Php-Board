const Form = document.querySelector('#edit');
// const Form = document.querySelector('#write');
Form.addEventListener("submit", async (e) => {
  e.preventDefault();
  if (Form['title'].value == '' || Form['contents'].value == '') return alert('제목또는 내용을 입력해주세요.');
  const idx = document.querySelector('#idx').value;
  console.log(idx);
  const data = {
    title: Form['title'].value,
    contents: Form['contents'].value,
  }
  const res = await fetch(`/posts/${idx}`, {
    method: "PUT",
    headers: {
      "Content-Type": "application/json",
    },
    body: JSON.stringify(data),
  })
  const json = await res.json();
  console.log(json);
  if (json) alert('게시글을 수정하는데 성공했습니다.');
  else alert('게시글을 수정하는데 실패했습니다.');
  location.href = "/";
})