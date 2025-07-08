document.getElementById("loginForm").addEventListener("submit", function (e) {
  const email = this.email.value;
  if (!email.includes("@")) {
    alert("Please enter a valid email address.");
    e.preventDefault();
  }
});
