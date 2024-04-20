import { loadPage } from "./load/page_load.js";
import MenuAnimation from "./menu/animation.js";
import scrollAnimation from "./menu/scrollAnimation.js";
import tags from "./tags/tags.js";
import headerVideo from "./front-page/header.js";
import SwiperConfig from "./front-page/swiper.js";
import TextShort from "./text/text.js";
import AccoderonConfig from "./accordeon/accordeon.js";
const html = tags();
const pathName = window.location.pathname;
if (pathName == '/dulbecco/' || pathName == '/') {
    loadPage();
}
window.addEventListener('DOMContentLoaded', () => {
    MenuAnimation(html);
    SwiperConfig();
    TextShort(html.textJournalHome, html.buttonJournalHome);
    AccoderonConfig(html.accodeonTags);
    if (html.videoFrontPage && html.canvaVideoFrontPage) {
        headerVideo(html.videoFrontPage, html.canvaVideoFrontPage);
    }
});
window.addEventListener('scroll', (e) => {
    scrollAnimation(html);
});
