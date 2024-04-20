const SwiperConfig = () => {
    const swiperEl = document.querySelector('swiper-container');
    if (swiperEl) {
        Object.assign(swiperEl, {
            slidesPerView: 1.5,
            spaceBetween: 20,
            centeredSlides: "true",
            breakpoints: {
                700: {
                    slidesPerView: 2,
                    centeredSlides: "false",
                },
                900: {
                    slidesPerView: 2.5,
                    spaceBetween: 40,
                },
                1100: {
                    slidesPerView: 2.5,
                    spaceBetween: 30,
                },
                1600: {
                    slidesPerView: 3.5,
                    spaceBetween: 30,
                },
            },
        });
        swiperEl.initialize();
    }
};
export default SwiperConfig;
