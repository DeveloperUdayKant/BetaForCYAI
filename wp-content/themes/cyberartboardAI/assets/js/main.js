const modal = document.querySelector(".modal");
const overlay = document.querySelector(".overlay");
const openModalBtn = document.querySelector(".btn-open");
const closeModalBtn = document.querySelector(".btn-close");
const closeModalBtnowndesign = document.querySelector(".btn-closeowndesign");




const modalowndesign = document.querySelector(".modalowndesign");
const overlayowndesign = document.querySelector(".overlayowndesign");
const openModalBtnowndesign = document.querySelector(".btn-openowndesign");



// close modal function
const closeModal = function () {
  modal.classList.add("hidden");
  modalowndesign.classList.add("hidden");
  overlay.classList.add("hidden");
  overlayowndesign.classList.add("hidden");
};

// close the modal when the close button and overlay is clicked
closeModalBtn.addEventListener("click", closeModal);
closeModalBtnowndesign.addEventListener("click", closeModal);
overlay.addEventListener("click", closeModal);
overlayowndesign.addEventListener("click", closeModal);

// close modal when the Esc key is pressed
document.addEventListener("keydown", function (e) {
  if (e.key === "Escape" && !modal.classList.contains("hidden")) {
    closeModal();
  }
    if (e.key === "Escape" && !modalowndesign.classList.contains("hidden")) {
      closeModal();
  

  }
});

// open modal function
const openModal = function () {
  modal.classList.remove("hidden");
  
  overlay.classList.remove("hidden");
 
};

const openModal1 = function () {
 
  console.log("welcome");
  modalowndesign.classList.remove("hidden");
 
  overlayowndesign.classList.remove("hidden");
};


// open modal event
openModalBtn.addEventListener("click", openModal);





//const closeModalBtn = document.querySelector(".btn-close");

// close modal function
//const closeModal = function () {
 // modal.classList.add("hidden");
 // overlay.classList.add("hidden");
//};

// close the modal when the close button and overlay is clicked
closeModalBtn.addEventListener("click", closeModal);
overlay.addEventListener("click", closeModal);

// close modal when the Esc key is pressed
document.addEventListener("keydown", function (e) {
  if (e.key === "Escape" && !modal.classList.contains("hidden")) {
    closeModal();
  }
});

// open modal function

// open modal event
openModalBtnowndesign.addEventListener("click", openModal1);