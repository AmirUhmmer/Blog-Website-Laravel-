

    function goBack(){
        window.history.back();
    }

const togglePassword = document.getElementById("togglePassword");
const passwordInput = document.getElementById("password");

togglePassword.addEventListener("click", function () {
  const type = passwordInput.getAttribute("type") === "password" ? "text" : "password";
  passwordInput.setAttribute("type", type);
  togglePassword.textContent = type === "password" ? "Show" : "Hide";
});

const togglePassword1 = document.getElementById("togglePassword1");
const passwordInput1 = document.getElementById("password1");

togglePassword1.addEventListener("click", function () {
  const type = passwordInput1.getAttribute("type") === "password" ? "text" : "password";
  passwordInput1.setAttribute("type", type);
  togglePassword1.textContent = type === "password" ? "Show" : "Hide";
});
