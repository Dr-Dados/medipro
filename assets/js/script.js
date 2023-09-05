"use strict";

const menu = document.querySelector(".menu");
const menuMain = menu.querySelector(".menu-main");
const goBack = menu.querySelector(".go-back");
const menuTrigger = document.querySelector(".mobile-menu-trigger");
const closeMenu = menu.querySelector(".mobile-menu-close");

let subMenu;
menuMain.addEventListener("click", (e) => {
  if (!menu.classList.contains("active")) {
    return;
  }
  if (e.target.closest(".menu-item-has-children")) {
    const hasChildren = e.target.closest(".menu-item-has-children");
    showSubMenu(hasChildren);
  }
});
goBack.addEventListener("click", () => {
  hideSubMenu();
});
menuTrigger.addEventListener("click", () => {
  toggleMenu();
});
closeMenu.addEventListener("click", () => {
  toggleMenu();
});
document.querySelector(".menu-overlay").addEventListener("click", () => {
  toggleMenu();
});
function toggleMenu() {
  menu.classList.toggle("active");
  document.querySelector(".menu-overlay").classList.toggle("active");
}
function showSubMenu(hasChildren) {
  subMenu = hasChildren.querySelector(".sub-menu");
  subMenu.classList.add("active");
  subMenu.style.animation = "slideLeft 0.5s ease forwards";
  const menuTitle =
    hasChildren.querySelector("i").parentNode.childNodes[0].textContent;
  menu.querySelector(".current-menu-title").innerHTML = menuTitle;
  menu.querySelector(".mobile-menu-head").classList.add("active");
}

function hideSubMenu() {
  subMenu.style.animation = "slideRight 0.5s ease forwards";
  setTimeout(() => {
    subMenu.classList.remove("active");
  }, 300);
  menu.querySelector(".current-menu-title").innerHTML = "";
  menu.querySelector(".mobile-menu-head").classList.remove("active");
}

window.onresize = function () {
  if (this.innerWidth > 991) {
    if (menu.classList.contains("active")) {
      toggleMenu();
    }
  }
};

$(document).on("click", "#submitContact", function () {
  event.preventDefault();
  var email = $("#emailcontact").val();
  var name = $("#namecontact").val();
  var subject = $("#subjectcontact").val();
  var message = $("#messagecontact").val();
  var action = "contact";
  console.log(
    "email",
    email,
    "name",
    name,
    "subject",
    subject,
    "message",
    message
  );
  if (email != "" && name != "" && subject != "" && message != "") {
    $(".loading").show(true);
    $.ajax({
      url: "./handler/contact.php",
      method: "POST",
      data: {
        name: name,
        email: email,
        subject: subject,
        message: message,
        action: action,
      },
      success: function (data) {
        $(".loading").hide(true);
        $(".sent-message").show(true);
        setTimeout(function () {
          $(".sent-message").hide(true);
        }, 5000);
        $("#emailcontact").val("");
        $("#namecontact").val("");
        $("#subjectcontact").val("");
        $("#Messagecontact").val("");
      },
    });
  }
});

// Collapsible products menu
var coll = document.getElementsByClassName("collapsible");
var i;
for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function () {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.maxHeight) {
      content.style.maxHeight = null;
    } else {
      content.style.maxHeight = content.scrollHeight + "px";
    }
  });
}
