
const contact = () => {

    const navItem : NodeListOf<HTMLLinkElement> = document.querySelectorAll('nav #menu-header-menu li a');
    const formElement : HTMLElement | null = document.querySelector('.form_contact');

    if(formElement){
        
        const closeItem : HTMLElement = formElement.querySelector('.close_modal') as HTMLElement;
        const formContent : HTMLElement = formElement.querySelector('.content') as HTMLElement;

        formElement.onclick = () => {
            removeItem(formElement)
        }

        closeItem.onclick = () => {
            removeItem(formElement)
        }

        formContent.onclick = (e: Event) => {
            e.stopPropagation();
        }


        navItem.forEach((e : HTMLLinkElement) => {
            const href = e.getAttribute('href');
            if(href == '#contact'){
                e.onclick = (e : Event) => {
                    e.preventDefault();
                    formElement.classList.add('show')
                }
            }
        });
    }


}

const removeItem = (formElement: HTMLElement) => {
    formElement.classList.add('remove');
    setTimeout(()=>{
        formElement.classList.remove('remove');
        formElement.classList.remove('show');
    }, 400)
}

export default contact;