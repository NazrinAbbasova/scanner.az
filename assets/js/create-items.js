// -- Create a new option

$(".add-input").on("click", function () {
  const input = $(this).data("type");
  const parent_field = document.querySelector(`[data-f-parent=${input}]`);
  const field = document.querySelector(`[data-f=${input}]`);
  const removeLanguage = document.querySelector(".remove-language");
  const removeComputer = document.querySelector(".remove-computer");
  const removeCertificate = document.querySelector(".remove-certificate");
  const removeEducation = document.querySelector(".remove-education");

  const cln = field.cloneNode(true);

  $(cln).find(`[data-s=${input}]`).attr("disabled", true);
  $(cln).find(`[data-level=${input}]`).attr("disabled", true);

  $(parent_field).append(cln);

  if (removeLanguage) removeLanguage.style.display = "block";
  if (removeComputer) removeComputer.style.display = "block";
  if (removeCertificate) removeCertificate.style.display = "block";
  if (removeEducation) removeEducation.style.display = "block";
});
$(".add-commitment").on("click", function () {
  const parent_field = document.querySelector(`[data-f-parent=work]`);
  const field = document.querySelector(`[data-commitment]`);
  const cln = field.cloneNode(true);
  $(parent_field).append(cln);
});
$(".remove-education").click(function () {
  if ($(".dynamic-education").length != 1) {
    $(".dynamic-education:last").remove();
  }
});
$(".remove-language").click(function () {
  if ($(".dynamic-language").length != 1) {
    $(".dynamic-language:last").remove();
  }
});
$(".remove-computer").click(function () {
  if ($(".dynamic-computer").length != 1) {
    $(".dynamic-computer:last").remove();
  }
});
$(".remove-certificate").click(function () {
  if ($(".dynamic-certificates").length != 1) {
    $(".dynamic-certificates:last").remove();
  }
});
const remove = document.querySelector(".remove-input");

if ($(".dynamic-language").length == 1) {
  $(".remove-language").css("display", "none!important");
  console.log("salam");
}

$(document).on("change", ".other-input", function () {
  let select = $(this).data("s");

  let label = "";
  let placeholder = "";
  let selector = "";

  if (select == "language") {
    label = "Dil";
    placeholder = "Dili daxil edin";
    selector = ".dynamic-fields-language";
  } else if (select == "computer") {
    label = "Kompüter biliyi";
    placeholder = "Komputer biliyini daxil edin";
    selector = ".dynamic-fields-computer";
  } else if (select == "certificates") {
    label = "Sertifikat";
    placeholder = "Sertifikatı daxil edin";
    selector = ".dynamic-fields-certificates";
  }

  const otherInput =
    '<div class="other" data-other="' +
    select +
    '">' +
    '<div class="row">' +
    '<div class="col-lg-4">' +
    "<label>" +
    label +
    "</label>" +
    '<input type="text" placeholder="' +
    placeholder +
    '">' +
    "</div>" +
    "</div>" +
    "</div>";

  const otherCertificate =
    '<div class="other" data-other="' +
    select +
    '">' +
    '<div class="row">' +
    '<div class="col-lg-4">' +
    '<label for="certificate">' +
    label +
    "</label>" +
    '<input type="text" placeholder="' +
    placeholder +
    '">' +
    "</div>" +
    '<div class="col-lg-4">' +
    '<label for="certificate-level">' +
    "Sertifikat səviyyəsi" +
    "</label>" +
    '<input type="text" placeholder="' +
    "Səviyyəni daxil edin" +
    '">' +
    "</div>" +
    "</div>" +
    "</div>";

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
  } else if ($(this).val() == "Digər-sertifikat") {
    $(selector).append(otherCertificate);
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

$(".copy-url").on("click", function () {
  const copyText = document.querySelector(".copied-url");
  copyText.select();
  copyText.setSelectionRange(0, 99999);
  document.execCommand("copy");
});
