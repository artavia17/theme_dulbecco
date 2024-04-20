const MenuAnimation = (html : any) => {

    const checkItem : HTMLInputElement | null = html.show_menu_tag;
    const buttonCheckItem : HTMLInputElement | null = html.show_menu_mobile_tag;
    const body : HTMLElement = document.body;

    if(checkItem && buttonCheckItem){
        checkItem.onchange = () => {

            buttonCheckItem.classList.add('active');

            setTimeout(() => {
                buttonCheckItem.classList.remove('active');
            }, 700)

            if(checkItem.checked){
                setTimeout(()=> recorrerItems(html, checkItem, body),500);
                body.style.overflow = 'hidden';
            }else {
                recorrerItems(html, checkItem, body)
                body.style.overflow = 'initial';
            }

        }
    }

}


const recorrerItems = (html : any, input : HTMLInputElement, body : HTMLElement) => {

    const nav : NodeListOf<HTMLElement> = html.nav_menu_list_tag;
    let timeOut : number = 0;

    if(nav.length){

        nav.forEach(( e : HTMLElement ) => {

            e.onclick = () => {

                input.checked = false;
                body.style.overflow = 'initial';

                nav.forEach(( e : HTMLElement ) => {

                    setTimeout(() => {
                        e.classList.toggle('active');
                    }, timeOut);

                })

            }

            setTimeout(() => {
                e.classList.toggle('active');
            }, timeOut);


            timeOut += 100;

        })
        
    }

}

export default MenuAnimation;