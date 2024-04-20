const AccoderonConfig = (accordeonTags) => {
    accordeonTags.forEach((e) => {
        let heightContent = 0;
        let active = true;
        const button = e.querySelector('.header button');
        const content = e.querySelector('.content');
        if (button && content) {
            heightContent = content.offsetHeight;
            styleHeight(content, heightContent);
            button.onclick = () => {
                if (active) {
                    active = false;
                    e.classList.remove('active');
                    styleHeight(content, 0);
                }
                else {
                    active = true;
                    console.log(heightContent);
                    e.classList.add('active');
                    styleHeight(content, heightContent);
                }
            };
        }
    });
};
const styleHeight = (content, height) => {
    content.style.height = `${height}px`;
};
export default AccoderonConfig;
