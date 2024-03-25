const MenuAnimation = () => {
    const checkItem = document.querySelector('#show_menu');
    const buttonCheckItem = document.querySelector('.show_menu_mobile');
    if (checkItem && buttonCheckItem) {
        checkItem.onchange = () => {
            buttonCheckItem.classList.add('active');
            setTimeout(() => {
                buttonCheckItem.classList.remove('active');
            }, 700);
            if (checkItem.checked) {
                setTimeout(() => recorrerItems(), 500);
            }
            else {
                recorrerItems();
            }
        };
    }
};
const recorrerItems = () => {
    const header = document.querySelectorAll('header .menu-header-menu-container .menu_class li');
    let timeOut = 0;
    if (header.length) {
        header.forEach((e) => {
            setTimeout(() => {
                e.classList.toggle('active');
            }, timeOut);
            timeOut += 100;
        });
    }
};
export default MenuAnimation;
