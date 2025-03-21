let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.header .navbar');

// Toggle navbar when menu button is clicked
menu.onclick = () => {
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
};

// Close navbar when scrolling
window.onscroll = () => {
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
};

// Initialize swiper slider
var swiper = new Swiper(".home-slider", {
    loop: true,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});

// Load more functionality for packages
let loadMoreBtn = document.querySelector('.packages .load-more .btn');
let currentItem = 3;

// Initially hide packages after the first 3
let boxes = [...document.querySelectorAll('.packages .box-container .box')];
for (let i = currentItem; i < boxes.length; i++) {
    boxes[i].style.display = 'none'; // Hide extra boxes initially
}

loadMoreBtn.onclick = () => {
    // Show next 3 items
    for (let i = currentItem; i < currentItem + 3; i++) {
        if (boxes[i]) { // Check if the box exists
            boxes[i].style.display = 'inline-block';
        }
    }
    currentItem += 3;

    // Hide the button if all items are displayed
    if (currentItem >= boxes.length) {
        loadMoreBtn.style.display = 'none';
    }
};
