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
    applicantTab.style.background = "linear-gradient(0deg, #4567f4, #3cd3ad)";
    applicantTab.style.color = "white";
    companyTab.style.border = "1px solid #ededef";
    companyTab.style.background = "white";
    companyTab.style.color = "#4567f4";
  });
  companyTab.addEventListener("click", () => {
    applicantForm.style.display = "none";
    companyForm.style.display = "block";
    companyTab.style.background = "linear-gradient(0deg, #4567f4, #3cd3ad)";
    companyTab.style.color = "white";
    applicantTab.style.border = "1px solid #ededef";
    applicantTab.style.background = "white";
    applicantTab.style.color = "#4567f4";
  });
}
changeTab();
