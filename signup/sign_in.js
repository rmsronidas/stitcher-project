const popupWrap = document.getElementById("popupWrap");
const openBtn = document.getElementById("openPopup");
const closeBtn = document.getElementById("closePopup");

const form = document.getElementById("loginForm");
const email = document.getElementById("email");
const password = document.getElementById("password");
const msg = document.getElementById("msg");

function openPopup() {
  popupWrap.classList.add("active");
  popupWrap.setAttribute("aria-hidden", "false");
  msg.textContent = "";
  setTimeout(() => email.focus(), 50);
}

function closePopup() {
  popupWrap.classList.remove("active");
  popupWrap.setAttribute("aria-hidden", "true");
}

openBtn.addEventListener("click", openPopup);
closeBtn.addEventListener("click", closePopup);

// ESC close
document.addEventListener("keydown", (e) => {
  if (e.key === "Escape" && popupWrap.classList.contains("active")) {
    closePopup();
  }
});

// Demo sign in
form.addEventListener("submit", (e) => {
  e.preventDefault();

  const emailVal = email.value.trim();
  const passVal = password.value.trim();

  if (!emailVal || !passVal) {
    msg.textContent = "Please enter email and password.";
    return;
  }

  msg.textContent = "Signing in...";
  setTimeout(() => {
    msg.textContent = "✅ Signed in (demo).";
  }, 700);
});

// optional: open by default
openPopup();