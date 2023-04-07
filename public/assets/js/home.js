var swiper = new Swiper(".banner-main", {
    slidesPerView: 1,
    spaceBetween: 30,
    loop: true,
    effect: 'fade',
    centeredSlides: true,
    autoplay: {
        delay: 3500,
        disableOnInteraction: false,
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});

const button = document.getElementById('kt_docs_toast_toggle_button');
const toastElement = document.getElementById('kt_docs_toast_toggle');
const toast = bootstrap.Toast.getOrCreateInstance(toastElement);
button.addEventListener('click', e => {
    e.preventDefault();
    toast.show();
});