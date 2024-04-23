const Form = document.login;
Form.addEventListener("submit", async (e) => {
  e.preventDefault();
  const data = {
    id: Form['id'].value,
    password: Form['password'].value,
  }
  const res = await fetch('/login', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json',
    },
    body: JSON.stringify(data),
  })
  const json = await res.json();
  console.log(json['massage']);
  if (!json['success']) {
    alert(json['massage']);
  } else {
    alert(json['massage']);
    location.href = "/";
  }
})