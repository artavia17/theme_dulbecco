import { loadPage } from "./load/page_load.js";
import MenuAnimation from "./menu/animation.js";
import scrollAnimation from "./menu/scrollAnimation.js";
import tags from "./tags/tags.js";
import headerVideo from "./front-page/header.js";
import SwiperConfig from "./front-page/swiper.js";
import TextShort from "./text/text.js";


const html = tags();

loadPage();

window.addEventListener('DOMContentLoaded', () => {

    MenuAnimation(html);
    SwiperConfig();
    TextShort(html.textJournalHome, html.buttonJournalHome);

    if(html.videoFrontPage && html.canvaVideoFrontPage){
        headerVideo(html.videoFrontPage, html.canvaVideoFrontPage);
    }

});

window.addEventListener('scroll', ( e : Event) => {

    scrollAnimation(html);

})
