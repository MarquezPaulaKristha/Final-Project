// add hovered class to selected list item
let list = document.querySelectorAll(".navigation li");

function activeLink() {
  list.forEach((item) => {
    item.classList.remove("hovered");
  });
  this.classList.add("hovered");
}

list.forEach((item) => item.addEventListener("mouseover", activeLink));

// Menu Toggle
let toggle = document.querySelector(".toggle");
let navigation = document.querySelector(".navigation");
let main = document.querySelector(".main");
let fill = document.querySelector(".fillup-container");


toggle.onclick = function () {
  navigation.classList.toggle("active");
  main.classList.toggle("active");
  fill.classList.toggle("active");
};

function openAddForm() {
  document.getElementById("PopupAddForm").style.display = "flex";
}

function closeAddForm() {
  document.getElementById("PopupAddForm").style.display = "none";
}

function openUpdateForm() {
  document.getElementById("PopupUpdateForm").style.display = "flex";
}

function closeUpdateForm() {
  document.getElementById("PopupUpdateForm").style.display = "none";
}