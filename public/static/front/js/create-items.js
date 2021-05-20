const addEducation = document.querySelector(".add-education");
const dynamicFieldsEducation = document.querySelector(
  ".dynamic-fields-education"
);
const dynamicEducation = document.querySelector(".dynamic-education");
if (addEducation) {
  addEducation.addEventListener("click", () => {
    var cln = dynamicEducation.cloneNode(true);
    dynamicFieldsEducation.appendChild(cln);
  });
}
//
const dynamicFieldsWork = document.querySelector(".dynamic-fields-work");
const dynamicWork = document.querySelector(".dynamic-work");
const addWork = document.querySelector(".add-work");
if (addWork) {
  addWork.addEventListener("click", () => {
    var cln = dynamicWork.cloneNode(true);
    dynamicFieldsWork.appendChild(cln);
  });
}

//
const dynamicFields = document.querySelector(".dynamic-fields-language");
const dynamicLanguage = document.querySelector(".dynamic-language");
const addLanguage = document.querySelector(".add-language");
if (addLanguage) {
  addLanguage.addEventListener("click", () => {
    var cln = dynamicLanguage.cloneNode(true);
    dynamicFields.appendChild(cln);
  });
}

//
const addComputer = document.querySelector(".add-computer");
const dynamicFieldsComputer = document.querySelector(
  ".dynamic-fields-computer"
);
const dynamicComputer = document.querySelector(".dynamic-computer");
if (addComputer) {
  addComputer.addEventListener("click", () => {
    var cln = dynamicComputer.cloneNode(true);
    dynamicFieldsComputer.appendChild(cln);
  });
}
//
const addCertificate = document.querySelector(".add-certificate");
const dynamicFieldsCertificate = document.querySelector(
  ".dynamic-fields-certificate"
);
const dynamicCertificate = document.querySelector(".dynamic-certificate");
if (addCertificate) {
  addCertificate.addEventListener("click", () => {
    var cln = dynamicCertificate.cloneNode(true);
    dynamicFieldsCertificate.appendChild(cln);
  });
}

// Create inputs
const otherInput = document.querySelector("#other");
function createOtherInput(that) {
  if (that.value == "other") {
    otherInput.style.display = "block";
  } else {
    otherInput.style.display = "none";
  }
}

// document.querySelector(".importance").addEventListener("change", function () {
//   var select = document.querySelector(this).data("select");
//   document.querySelector(this).value == "choose"
//     ? document.querySelector(`[data-s=${select}]`).prop("disabled", true)
//     : document.querySelector(`[data-s=${select}]`).prop("disabled", false);
//   document.querySelector(this).value == "not-important"
//     ? document.querySelector(`[data-s=${select}]`).prop("disabled", true)
//     : document.querySelector(`[data-s=${select}]`).prop("disabled", false);
// });

// const otherInput = document.querySelectorAll("[data-s]");
// function createOtherInput(that) {
//   otherInput.forEach((inputs) => {
//     if (that.value == "other") {
//       inputs.style.display = "block";
//     } else {
//       inputs.style.display = "none";
//     }
//   });
// }
