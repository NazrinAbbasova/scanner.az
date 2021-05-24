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

$(".other-input").on("change", function () {
    let select = $(this).data("s");
    let otherInput = $(`[data-other=${select}]`);

    $(this).val() == "Digər" ? $(otherInput).fadeIn() : $(otherInput).fadeOut();
});
