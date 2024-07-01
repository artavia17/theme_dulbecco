

const urlLanguaje = () => {

    const navItem : HTMLLinkElement | null = document.querySelector('nav #menu-header-menu .english a');
    if(navItem){
        const hreItem = navItem.href;
        const newURl = hreItem.replace('/es', '/')
        navItem.href = newURl;
        
    }

}

export default urlLanguaje;