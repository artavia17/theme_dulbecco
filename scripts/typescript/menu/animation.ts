const MenuAnimation = () => {

    const checkItem : HTMLInputElement | null = document.querySelector('#show_menu');
    const buttonCheckItem : HTMLInputElement | null = document.querySelector('.show_menu_mobile');

    if(checkItem && buttonCheckItem){
        checkItem.onchange = () => {

            buttonCheckItem.classList.add('active');

            setTimeout(() => {
                buttonCheckItem.classList.remove('active');
            }, 700)

            if(checkItem.checked){

                setTimeout(()=> recorrerItems(),500);

            }else {
                recorrerItems()
            }

        }
    }

}


const recorrerItems = () => {

    const header : NodeListOf<HTMLElement> = document.querySelectorAll('header .menu-header-menu-container .menu_class li');
    let timeOut : number = 0;

    if(header.length){

        header.forEach(( e : HTMLElement ) => {

            setTimeout(() => {
                e.classList.toggle('active');
            }, timeOut);

            timeOut += 100;

        })
        
    }

}

export default MenuAnimation;