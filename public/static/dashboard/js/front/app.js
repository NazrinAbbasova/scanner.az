const applicantTab = document.querySelector(".register-applicant");
const companyTab = document.querySelector(".register-company");
const applicantForm = document.querySelector(".applicant-form");
const companyForm = document.querySelector(".company-form");
const registerForm = document.querySelector(".register-form");
const loginForm = document.querySelector(".login-form");
const forgotForm = document.querySelector(".forgot-form");
const forgotButton = document.querySelector(".forgot-password");
const formContainer = document.querySelector(".form-container");
const overlayContainer = document.querySelector(".overlay-container");
const loginButton = document.querySelector(".page-login");
const registerButton = document.querySelector(".page-register");

function changeTab() {
  applicantTab.addEventListener("click", () => {
    companyForm.style.display = "none";
    applicantForm.style.display = "block";
    applicantTab.style.border = "1px solid #4567f4";
    companyTab.style.border = "1px solid #ededef";
  });
  companyTab.addEventListener("click", () => {
    applicantForm.style.display = "none";
    companyForm.style.display = "block";
    companyTab.style.border = "1px solid #4567f4";
    applicantTab.style.border = "1px solid #ededef";
  });
}
changeTab();

function changePage() {
  loginButton.addEventListener("click", () => {
    registerForm.style.display = "none";
    loginForm.style.display = "block";
    loginButton.style.display = "none";
    registerButton.style.display = "block";
    forgotForm.style.display = "none";
  });
  registerButton.addEventListener("click", () => {
    loginForm.style.display = "none";
    registerForm.style.display = "block";
    loginButton.style.display = "block";
    registerButton.style.display = "none";
  });
}
changePage();

function forgotPassword() {
  forgotButton.addEventListener("click", () => {
    loginForm.style.display = "none";
    forgotForm.style.display = "block";
    loginButton.style.display = "block";
    registerButton.style.display = "none";
  });
}
forgotPassword();
