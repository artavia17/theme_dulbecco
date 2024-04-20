

const tags = () => {

    const show_menu_tag : HTMLInputElement | null = query<HTMLInputElement>('#show_menu');
    const show_menu_mobile_tag : HTMLInputElement | null = query<HTMLInputElement>('.show_menu_mobile');
    const nav_menu_list_tag : NodeListOf<HTMLElement> = queryAll<HTMLElement>('nav .menu-header-menu-container .menu_class li');
    const nav_tag : HTMLElement | null = query<HTMLElement>('nav');
    const videoFrontPage : HTMLVideoElement | null = query<HTMLVideoElement>('header.home .background video');
    const canvaVideoFrontPage : HTMLCanvasElement | null = query<HTMLCanvasElement>('header.home .background canvas');
    const textJournalHome : HTMLElement | null = query<HTMLElement>('.box-juournal-home .content .father');
    const textJournalHomeChild : HTMLElement | null = query<HTMLElement>('.box-juournal-home .content .child');
    const buttonJournalHome : HTMLButtonElement | null = query<HTMLButtonElement>('.box-juournal-home .content .show_more');
    const accodeonTags : NodeListOf<HTMLElement> = queryAll<HTMLButtonElement>('.accordeon');

    return {
        show_menu_tag,
        show_menu_mobile_tag,
        nav_menu_list_tag,
        nav_tag,
        videoFrontPage,
        canvaVideoFrontPage,
        textJournalHome,
        buttonJournalHome,
        textJournalHomeChild,
        accodeonTags
    }

}

function query<T extends HTMLElement>(tag : string, all : boolean = false) : T | null {
    return document.querySelector<T>(tag);
}

function queryAll<T extends HTMLElement>(tag : string, all : boolean = false) : NodeListOf<T> {
    return document.querySelectorAll(tag);
}

export default tags