/*
Template Name: Xpeedo - landing page Html Template.
Author: GrayGrids
*/

(function () {
  const applicantTab = document.querySelector(".register-applicant");
  const companyTab = document.querySelector(".register-company");
  const applicantForm = document.querySelector(".applicant-form");
  const companyForm = document.querySelector(".company-form");

  // Change Registration Tab

  function changeTab() {
    if (applicantTab) {
      applicantTab.addEventListener("click", () => {
        companyForm.style.display = "none";
        applicantForm.style.display = "block";
        applicantTab.style.background =
          "linear-gradient(0deg, #4567f4, #3cd3ad)";
        applicantTab.style.color = "white";
        companyTab.style.border = "1px solid #ededef";
        companyTab.style.background = "white";
        companyTab.style.color = "#4567f4";
      });
    }
    if (companyTab) {
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
  }
  changeTab();

  //Chane profile picture

  function readURL(input) {
    if (input.files && input.files[0]) {
      var reader = new FileReader();

      reader.onload = function (e) {
        document
          .querySelector(".profile-pic")
          .setAttribute("src", e.target.result);
      };

      reader.readAsDataURL(input.files[0]); // convert to base64 string
    }
  }
  const avatar = document.getElementById("upload-avatar");
  if (avatar) {
    avatar.addEventListener("change", function () {
      readURL(this);
      document.querySelector(".avatar-wrapper label").style.padding = 0;
      document.getElementById("save-avatar").style.display = "inline-block";
    });
  }

  // Calculate saved budget
  const calculate = document.querySelector(".calculate");
  const budgetText = document.querySelector(".budget-text");
  const budgetCommon = document.querySelector(
    ".calculator .single-achievement"
  );
  const budgetNumber = document.querySelector(".budget");
  const salary = document.querySelector(".salary");

  if (calculate) {
    calculate.addEventListener("click", () => {
      budgetCommon.style.display = "block";
      budgetNumber.innerHTML =
        Math.round((salary.value * 100) / 9600) * 2 + " AZN";
    });
  }

  //===== Prealoder

  window.onload = function () {
    window.setTimeout(fadeout, 500);
  };

  function fadeout() {
    document.querySelector(".preloader").style.opacity = "0";
    document.querySelector(".preloader").style.display = "none";
  }

  // Filter applicants

  const percentage = document.querySelector(".percentage");

  function changeColor() {
    if (percentage) {
      percentage.addEventListener("click", () => {
        percentage.classList.add("selected");
      });
    }
  }
  changeColor();

  // Change CV color
  const blue = document.querySelector(".colors.blue");
  const purple = document.querySelector(".colors.purple");
  const yellow = document.querySelector(".colors.yellow");
  const green = document.querySelector(".colors.green");
  const cvHead = document.querySelector(".cv-head");
  const line = document.querySelector(".line");
  const listHeadIcon = document.querySelector(".list-head i ");
  const level = document.querySelector(".full");

  // const cvHead = document.querySelector(".cv-head");
  if (blue && purple && green && yellow) {
    blue.addEventListener("click", function () {
      cvHead.classList.add("blue");
      line.classList.add("blue");
      listHeadIcon.classList.add("blue");
      level.classList.add("blue");
    });
    purple.addEventListener("click", function () {
      cvHead.classList.add("purple");
      line.classList.add("purple");
      listHeadIcon.classList.add("purple");
      level.classList.add("purple");
    });
    yellow.addEventListener("click", function () {
      cvHead.classList.add("yellow");
      line.classList.add("yellow");
      listHeadIcon.classList.add("yellow");
      level.classList.add("yellow");
    });
    green.addEventListener("click", function () {
      cvHead.classList.add("green");
      line.classList.add("green");
      listHeadIcon.classList.add("green");
      level.classList.add("green");
    });
  }

  /*=====================================
    Sticky
    ======================================= */
  var p = window.location.pathname;
  var header_navbar = document.querySelector(".navbar-area");

  if (p.length === 0 || p === "/" || p.match(/^\/?index/)) {
    window.onscroll = function () {
      var header_navbar = document.querySelector(".navbar-area");
      var sticky = header_navbar.offsetTop;

      if (window.pageYOffset > sticky) {
        header_navbar.classList.add("sticky");
      } else {
        header_navbar.classList.remove("sticky");
      }

      // show or hide the back-top-top button
      var backToTo = document.querySelector(".scroll-top");
      if (
        document.body.scrollTop > 50 ||
        document.documentElement.scrollTop > 50
      ) {
        backToTo.style.display = "flex";
      } else {
        backToTo.style.display = "none";
      }
    };
  } else {
    header_navbar.classList.add("sticky");
  }

  // section menu active
  //   function onScroll(event) {
  //     var sections = document.querySelectorAll(".page-scroll");
  //     var scrollPos =
  //       window.pageYOffset ||
  //       document.documentElement.scrollTop ||
  //       document.body.scrollTop;

  //     for (var i = 0; i < sections.length; i++) {
  //       var currLink = sections[i];
  //       var val = currLink.getAttribute("href");
  //       var refElement = document.querySelector(val);
  //       var scrollTopMinus = scrollPos + 73;
  //       if (
  //         refElement.offsetTop <= scrollTopMinus &&
  //         refElement.offsetTop + refElement.offsetHeight > scrollTopMinus
  //       ) {
  //         document.querySelector(".page-scroll").classList.remove("active");
  //         currLink.classList.add("active");
  //       } else {
  //         currLink.classList.remove("active");
  //       }
  //     }
  //   }

  //   window.document.addEventListener("scroll", onScroll);

  // for menu scroll
  //   var pageLink = document.querySelectorAll(".page-scroll");

  // pageLink.forEach(elem => {
  //     elem.addEventListener('click', e => {
  //         e.preventDefault();
  //         document.querySelector(elem.getAttribute('href')).scrollIntoView({
  //             behavior: 'smooth',
  //             offsetTop: 1 - 60,
  //         });
  //     });
  // });

  //===== close navbar-collapse when a  clicked
  let navbarToggler = document.querySelector(".navbar-toggler");
  var navbarCollapse = document.querySelector(".collapse");

  document.querySelectorAll(".page-scroll").forEach((e) =>
    e.addEventListener("click", () => {
      navbarToggler.classList.remove("active");
      navbarCollapse.classList.remove("show");
    })
  );
  navbarToggler.addEventListener("click", function () {
    navbarToggler.classList.toggle("active");
  });
  // WOW active
  new WOW().init();

  let filterButtons = document.querySelectorAll(
    ".portfolio-btn-wrapper button"
  );
  filterButtons.forEach((e) =>
    e.addEventListener("click", () => {
      let filterValue = event.target.getAttribute("data-filter");
      iso.arrange({
        filter: filterValue,
      });
    })
  );

  var elements = document.getElementsByClassName("portfolio-btn");
  for (var i = 0; i < elements.length; i++) {
    elements[i].onclick = function () {
      var el = elements[0];
      while (el) {
        if (el.tagName === "BUTTON") {
          el.classList.remove("active");
        }
        el = el.nextSibling;
      }
      this.classList.add("active");
    };
  }

  //====== counter up
  var cu = new counterUp({
    start: 0,
    duration: 2000,
    intvalues: true,
    interval: 100,
    append: " ",
  });
  cu.start();
})();
