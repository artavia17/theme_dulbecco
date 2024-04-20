const MenuAnimation = (html) => {
    const checkItem = html.show_menu_tag;
    const buttonCheckItem = html.show_menu_mobile_tag;
    const body = document.body;
    if (checkItem && buttonCheckItem) {
        checkItem.onchange = () => {
            buttonCheckItem.classList.add('active');
            setTimeout(() => {
                buttonCheckItem.classList.remove('active');
            }, 700);
            if (checkItem.checked) {
                setTimeout(() => recorrerItems(html, checkItem, body), 500);
                body.style.overflow = 'hidden';
            }
            else {
                recorrerItems(html, checkItem, body);
                body.style.overflow = 'initial';
            }
        };
    }
};
const recorrerItems = (html, input, body) => {
    const nav = html.nav_menu_list_tag;
    let timeOut = 0;
    if (nav.length) {
        nav.forEach((e) => {
            e.onclick = () => {
                input.checked = false;
                body.style.overflow = 'initial';
                nav.forEach((e) => {
                    setTimeout(() => {
                        e.classList.toggle('active');
                    }, timeOut);
                });
            };
            setTimeout(() => {
                e.classList.toggle('active');
            }, timeOut);
            timeOut += 100;
        });
    }
};
export default MenuAnimation;
