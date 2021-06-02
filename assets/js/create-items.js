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

$(".remove-input").click(function () {
  const input = $(this).data("type");
  if ($(`[data-f=${input}]`).length != 1) {
    $(`[data-f=${input}]`).last().remove();
    // Bu hisse ishlemir 19cu setir
  }
});

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
  $(this).val() == "choose"
    ? $(this)
        .parents(".col-lg-4")
        .siblings(".col-lg-4")
        .find(`[data-s=${select}]`)
        .prop("disabled", true)
    : $(this)
        .parents(".col-lg-4")
        .siblings(".col-lg-4")
        .find(`[data-s=${select}]`)
        .prop("disabled", false);
  $(this).val() == "not-important"
    ? $(this)
        .parents(".col-lg-4")
        .siblings(".col-lg-4")
        .find(`[data-s=${select}]`)
        .prop("disabled", true)
    : $(this)
        .parents(".col-lg-4")
        .siblings(".col-lg-4")
        .find(`[data-s=${select}]`)
        .prop("disabled", false);
});
