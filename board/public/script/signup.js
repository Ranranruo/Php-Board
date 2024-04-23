const Form = document.signup;
Form.addEventListener("submit", async (e) => {
  e.preventDefault();
  const data = {
    name: Form['name'].value,
    id: Form['id'].value,
    password: Form['password'].value,
  }
  const res = await fetch('/signup', {
    method: 'POST',
    body: {
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