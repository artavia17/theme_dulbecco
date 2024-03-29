const MenuAnimation = (html) => {
    const checkItem = html.show_menu_tag;
    const buttonCheckItem = html.show_menu_mobile_tag;
    if (checkItem && buttonCheckItem) {
        checkItem.onchange = () => {
            buttonCheckItem.classList.add('active');
            setTimeout(() => {
                buttonCheckItem.classList.remove('active');
            }, 700);
            if (checkItem.checked) {
                setTimeout(() => recorrerItems(html), 500);
            }
            else {
                recorrerItems(html);
            }
        };
    }
};
const recorrerItems = (html) => {
    const nav = html.nav_menu_list_tag;
    let timeOut = 0;
    if (nav.length) {
        nav.forEach((e) => {
            setTimeout(() => {
                e.classList.toggle('active');
            }, timeOut);
            timeOut += 100;
        });
    }
};
export default MenuAnimation;
