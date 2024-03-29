const MenuAnimation = (html : any) => {

    const checkItem : HTMLInputElement | null = html.show_menu_tag;
    const buttonCheckItem : HTMLInputElement | null = html.show_menu_mobile_tag;

    if(checkItem && buttonCheckItem){
        checkItem.onchange = () => {

            buttonCheckItem.classList.add('active');

            setTimeout(() => {
                buttonCheckItem.classList.remove('active');
            }, 700)

            if(checkItem.checked){

                setTimeout(()=> recorrerItems(html),500);

            }else {
                recorrerItems(html)
            }

        }
    }

}


const recorrerItems = (html : any) => {

    const nav : NodeListOf<HTMLElement> = html.nav_menu_list_tag;
    let timeOut : number = 0;

    if(nav.length){

        nav.forEach(( e : HTMLElement ) => {

            setTimeout(() => {
                e.classList.toggle('active');
            }, timeOut);

            timeOut += 100;

        })
        
    }

}

export default MenuAnimation;