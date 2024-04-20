const tags = () => {
    const show_menu_tag = query('#show_menu');
    const show_menu_mobile_tag = query('.show_menu_mobile');
    const nav_menu_list_tag = queryAll('nav .menu-header-menu-container .menu_class li');
    const nav_tag = query('nav');
    const videoFrontPage = query('header.home .background video');
    const canvaVideoFrontPage = query('header.home .background canvas');
    const textJournalHome = query('.box-juournal-home .content .father');
    const textJournalHomeChild = query('.box-juournal-home .content .child');
    const buttonJournalHome = query('.box-juournal-home .content .show_more');
    const accodeonTags = queryAll('.accordeon');
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
    };
};
function query(tag, all = false) {
    return document.querySelector(tag);
}
function queryAll(tag, all = false) {
    return document.querySelectorAll(tag);
}
export default tags;
