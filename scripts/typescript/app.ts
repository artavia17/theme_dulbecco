import { loadPage } from "./load/page_load.js";
import MenuAnimation from "./menu/animation.js";
import scrollAnimation from "./menu/scrollAnimation.js";
import tags from "./tags/tags.js";
import headerVideo from "./front-page/header.js";

const html = tags();

window.addEventListener('DOMContentLoaded', () => {

    MenuAnimation(html);
    loadPage();

    if(html.videoFrontPage && html.canvaVideoFrontPage){
        headerVideo(html.videoFrontPage, html.canvaVideoFrontPage);
    }

});

window.addEventListener('scroll', ( e : Event) => {

    scrollAnimation(html);

})
