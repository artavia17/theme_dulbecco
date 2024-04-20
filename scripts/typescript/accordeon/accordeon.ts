

const AccoderonConfig = ( accordeonTags : NodeListOf<HTMLElement> ) => {

    accordeonTags.forEach( ( e : HTMLElement ) : void => {

        let heightContent : number = 0;
        let active : boolean = true;

        const button : HTMLButtonElement | null = e.querySelector('.header button');
        const content : HTMLElement | null = e.querySelector('.content');

        if(button && content){

            heightContent = content.offsetHeight;
            styleHeight(content, heightContent)

            button.onclick = () => {
                
                if(active){
                    active = false;
                    e.classList.remove('active');
                    styleHeight(content, 0)
                }else{
                    active = true;
                    console.log(heightContent)
                    e.classList.add('active');
                    styleHeight(content, heightContent)
                }

            }

        }

    });

}

const styleHeight = (content : HTMLElement, height : number) : void => {

    content.style.height =  `${height}px`;

}

export default AccoderonConfig;