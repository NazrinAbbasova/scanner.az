// const addEducation = document.querySelector(".add-education");
// const dynamicFieldsEducation = document.querySelector(
//   ".dynamic-fields-education"
// );
// const dynamicEducation = document.querySelector(".dynamic-education");
// if (addEducation) {
//   addEducation.addEventListener("click", () => {
//     var cln = dynamicEducation.cloneNode(true);
//     dynamicFieldsEducation.appendChild(cln);
//   });
// }

// const dynamicFieldsWork = document.querySelector(".dynamic-fields-work");
// const dynamicWork = document.querySelector(".dynamic-work");
// const addWork = document.querySelector(".add-work");
// if (addWork) {
//   addWork.addEventListener("click", () => {
//     var cln = dynamicWork.cloneNode(true);
//     dynamicFieldsWork.appendChild(cln);
//   });
// }

$(".remove-language").click(function () {
    console.log("clicked");
    $(this).closest(".dynamic-language").remove();
});
//
// -- Create a new option

$(".add-input").on("click", function () {
    const input = $(this).data("type");
    const parent_field = document.querySelector(`[data-f-parent=${input}]`);
    const field = document.querySelector(`[data-f=${input}]`);

    const cln = field.cloneNode(true);

    $(cln).find(`[data-s=${input}]`).attr("disabled", true);
    $(cln).find(`[data-level=${input}]`).attr("disabled", true);

    $(parent_field).append(cln);
});

// Add other options

$(document).on("change", ".other-input", function () {
    let select = $(this).data("s");

    let label = "";
    let placeholder = "";
    let selector = "";
    let name = "";

    if (select == "language") {
        label = "Dil";
        placeholder = "Dili daxil edin";
        selector = ".dynamic-fields-language";
        name = "new_languages[]";
    } else if (select == "computer") {
        label = "Kompüter biliyi";
        placeholder = "Komputer biliyini daxil edin";
        selector = ".dynamic-fields-computer";
        name = "new_computer_skills[]";
    } else if (select == "certificates") {
        label = "Sertifikat";
        placeholder = "Sertifikatı daxil edin";
        selector = ".dynamic-fields-certificates";
        name = "new_certificates[]";

        level_label = "Sertifikat səviyyəsi";
        level_placeholder = "Sertifikat səviyyəsini daxil edin";
        level_name = "new_certificate_levels[]";
    }

    console.log(select);

    if (select != "certificates") {
        var otherInput =
            '<div class="other" data-other="' +
            select +
            '">' +
            '<div class="row">' +
            '<div class="col-lg-4">' +
            '<label for="language">' +
            label +
            "</label>" +
            '<input name="' +
            name +
            '" type="text" placeholder="' +
            placeholder +
            '">' +
            "</div>" +
            "</div>" +
            "</div>";
    } else {
        var otherInput =
            '<div class="other" data-other="' +
            select +
            '">' +
            '<div class="row">' +
            '<div class="col-lg-4">' +
            '<label for="language">' +
            label +
            "</label>" +
            '<input name="' +
            name +
            '" type="text" placeholder="' +
            placeholder +
            '">' +
            "</div>" +
            '<div class="col-lg-4">' +
            '<label for="language">' +
            level_label +
            "</label>" +
            '<input name="' +
            level_name +
            '" type="text" placeholder="' +
            level_placeholder +
            '">' +
            "</div>" +
            "</div>" +
            "</div>";
    }

    if ($(this).val() == "choose") {
        $(this)
            .parents(".col-lg-4")
            .siblings(".col-lg-4")
            .find(`[data-level=${select}]`)
            .prop("disabled", true);
    } else if ($(this).val() == "Digər") {
        $(selector).append(otherInput);
        $(this)
            .parents(".col-lg-4")
            .siblings(".col-lg-4")
            .find(`[data-level=${select}]`)
            .prop("disabled", false);
    } else {
        $(this)
            .parents(".col-lg-4")
            .siblings(".col-lg-4")
            .find(`[data-level=${select}]`)
            .prop("disabled", false);
        let others = $(selector).find(".other");

        $(others).each(function () {
            $(this).remove();
        });
    }
});

// Importance

$(document).on("change", ".importance", function () {
    var select = $(this).data("select");

    if ($(this).val() == "choose" || $(this).val() == 0) {
        $(this)
            .parents(".col-lg-4")
            .siblings(".col-lg-4")
            .find(`[data-s=${select}]`)
            .prop("disabled", true);
    } else {
        $(this)
            .parents(".col-lg-4")
            .siblings(".col-lg-4")
            .find(`[data-s=${select}]`)
            .prop("disabled", false);
    }
});
