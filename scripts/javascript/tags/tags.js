const tags = () => {
    const show_menu_tag = document.querySelector('#show_menu');
    const show_menu_mobile_tag = document.querySelector('.show_menu_mobile');
    const nav_menu_list_tag = document.querySelectorAll('nav .menu-header-menu-container .menu_class li');
    const nav_tag = document.querySelector('nav');
    const videoFrontPage = document.querySelector('header.home .background video');
    const canvaVideoFrontPage = document.querySelector('header.home .background canvas');
    return {
        show_menu_tag,
        show_menu_mobile_tag,
        nav_menu_list_tag,
        nav_tag,
        videoFrontPage,
        canvaVideoFrontPage
    };
};
export default tags;
