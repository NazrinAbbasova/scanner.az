const addLanguage = document.querySelector(".add-language");
const dynamicFields = document.querySelector(".dynamic-fields-language");
const dynamicLanguage = document.querySelector(".dynamic-language");
if (addLanguage) {
  addLanguage.addEventListener("click", () => {
    var cln = dynamicLanguage.cloneNode(true);
    dynamicFields.appendChild(cln);
  });
}

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
function createOtherInput() {
  const option = document.querySelector("option");
  if (option.value == "other") {
    console.log("salam");
  }
}
