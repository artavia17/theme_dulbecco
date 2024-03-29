

const tags = () => {

    const show_menu_tag : HTMLInputElement | null = document.querySelector('#show_menu');
    const show_menu_mobile_tag : HTMLInputElement | null = document.querySelector('.show_menu_mobile');
    const nav_menu_list_tag : NodeListOf<HTMLElement> = document.querySelectorAll('nav .menu-header-menu-container .menu_class li');
    const nav_tag : HTMLElement | null = document.querySelector('nav');
    const videoFrontPage : HTMLVideoElement | null = document.querySelector('header.home .background video');
    const canvaVideoFrontPage : HTMLCanvasElement | null = document.querySelector('header.home .background canvas');

    return {
        show_menu_tag,
        show_menu_mobile_tag,
        nav_menu_list_tag,
        nav_tag,
        videoFrontPage,
        canvaVideoFrontPage
    }

}

export default tags