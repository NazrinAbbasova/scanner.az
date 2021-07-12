// Add and remove commitment
let current = 1;
const row = document.querySelector(".commitment .row");

$(document).on("click", ".add-commitment", function () {
  if (current < 5) {
    current++;
    const newCommitment = row.cloneNode(true);
    const addCommitment = $(newCommitment).find(".add-commitment");
    const input = $(newCommitment).find("input");
    $(input).val("");
    $(addCommitment)
      .find("i")
      .removeClass("fa-plus-square")
      .addClass("fa-minus-square");

    $(addCommitment)
      .removeClass("add-commitment")
      .addClass("remove-commitment");
    $(".commitment").append(newCommitment);
    console.log(current, "add");

    $(document).on("click", ".remove-commitment", function () {
      $(this).parents(".commitment .row").remove();
      if (current > 0) {
        console.log(current, "remove");
        current--;
      }
    });
  }
});

// Remove added new fields (Needs to refactor)

$(".remove-work").click(function () {
  let count1 = $(".dynamic-work").length;
  let other = $(".other").length;
  console.log($(".dynamic-work").length);

  if (count1 > 1 || other > 1) {
    $(".other:last").remove();
    $(".dynamic-work:last").remove();
    count1 = $(".dynamic-work").length;
  }
  if (count1 == 1) {
    $(this).hide();
  }
});

$(".remove-education").click(function () {
  let count2 = $(".dynamic-education").length;
  let other = $(".other").length;

  if (count2 > 1 || other > 1) {
    $(".other:last").remove();
    $(".dynamic-education:last").remove();
    count2 = $(".dynamic-education").length;
  }
  if (count2 == 1) {
    $(this).hide();
  }
});
$(".remove-language").click(function () {
  let count3 = $(".dynamic-language").length;
  let other = $(".other").length;

  if (count3 > 1 || other > 1) {
    $(".other:last").remove();
    $(".dynamic-language:last").remove();

    count3 = $(".dynamic-language").length;
  }
  if (count3 == 1) {
    $(this).hide();
  }
});
$(".remove-computer").click(function () {
  let count4 = $(".dynamic-computer").length;
  let other = $(".other").length;

  if (count4 > 1 || other > 1) {
    $(".other:last").remove();
    $(".dynamic-computer:last").remove();
    count4 = $(".dynamic-computer").length;
  }
  if (count4 == 1) {
    $(this).hide();
  }
});
$(".remove-certificate").click(function () {
  let count5 = $(".dynamic-certificates").length;
  let other = $(".other").length;

  if (count5 > 1 || other > 1) {
    $(".other:last").remove();
    $(".dynamic-certificates:last").remove();
    count5 = $(".dynamic-certificates").length;
  }
  if (count5 == 1) {
    $(this).hide();
  }
});
// Add new input on other option

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

  if ($(this).val() == "choose" || $(this).val() == "not-important") {
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

// Enable driving lisence category input

$(document).on("change", ".driving-lisence", function () {
  var select = $(this).data("category");
  if ($(this).val() == "choose" || $(this).val() == "not") {
    $(this)
      .parents(".col-lg-4")
      .siblings(".col-lg-4")
      .find(`[data-l=${select}]`)
      .prop("disabled", true);
  } else {
    $(this)
      .parents(".col-lg-4")
      .siblings(".col-lg-4")
      .find(`[data-l=${select}]`)
      .prop("disabled", false);
  }
});

// Copy URL

$(".copy-url").on("click", function () {
  const copyText = document.querySelector(".copied-url");
  copyText.select();
  copyText.setSelectionRange(0, 99999);
  document.execCommand("copy");
});

// Detailed work on create vacancy

$(".detailed-button").on("click", function () {
  const detailedWork = document.querySelector(".detailed-work");
  const detailedButton = document.querySelector(".detailed-button");
  const commonButton = document.querySelector(".common-button");

  detailedWork.style.display = "block";
  commonButton.style.display = "block";
  detailedButton.style.display = "none";
});

$(".common-button").on("click", function () {
  const detailedWork = document.querySelector(".detailed-work");
  const detailedButton = document.querySelector(".detailed-button");
  const commonButton = document.querySelector(".common-button");

  detailedWork.style.display = "none";
  commonButton.style.display = "none";
  detailedButton.style.display = "block";
});
