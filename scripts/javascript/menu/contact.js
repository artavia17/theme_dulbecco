const contact = () => {
    const navItem = document.querySelectorAll('nav #menu-header-menu li a');
    const formElement = document.querySelector('.form_contact');
    if (formElement) {
        const closeItem = formElement.querySelector('.close_modal');
        const formContent = formElement.querySelector('.content');
        formElement.onclick = () => {
            removeItem(formElement);
        };
        closeItem.onclick = () => {
            removeItem(formElement);
        };
        formContent.onclick = (e) => {
            e.stopPropagation();
        };
        navItem.forEach((e) => {
            const href = e.getAttribute('href');
            if (href == '#contact') {
                e.onclick = (e) => {
                    e.preventDefault();
                    formElement.classList.add('show');
                };
            }
        });
    }
};
const removeItem = (formElement) => {
    formElement.classList.add('remove');
    setTimeout(() => {
        formElement.classList.remove('remove');
        formElement.classList.remove('show');
    }, 400);
};
export default contact;
