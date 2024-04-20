/**
 * En este archivo ejecutamos la animacion del lottie
 */

let count = 0;

window.addEventListener('load', () => {
    header();
})

window.addEventListener('scroll', () => {
    scrollAnimation();
});

const header = () => {

    const headerID = document.getElementById('svg_header');

    if(headerID){

        const json_data = headerID.getAttribute('json');

        setTimeout(() => {

            window.scrollTo({
                top: 0,
                left: 0,
                behavior: "smooth",
            });

            lottieCreate('svg_header', json_data);

            setTimeout(()=>{

                headerID.classList.add('light');

                setTimeout(() => {
                    headerID.style.zIndex = '1'
                }, 500);

            }, 2100)

        }, 2100);

    }


}


const scrollAnimation = () => {

    const elementnav = document.querySelector('nav');

    if(elementnav){

        const elementLogo = elementnav.querySelector('.logo');
        let jsonAttribute;
        let svg;
        let scrollY = 0;
        let navHeight = 0;

        if(elementLogo){

            scrollY = window.scrollY;
            svg = elementLogo.querySelector('svg')
    
            navHeight = elementnav.offsetHeight;
    
            if(scrollY > navHeight){
    
                elementnav.classList.add('active');
                jsonAttribute = elementLogo.getAttribute('json');
    
                if(!svg && jsonAttribute){
    
                    count += 1;
    
                    if(count == 1){
                        lottieCreate('dulbecco_svg', jsonAttribute);
                    }
    
                }
    
            }else{
                elementnav.classList.remove('active');
                if(svg){
                    svg.remove();
                    count = 0;
                }
            }
    
            
        }
    }

}


const lottieCreate = (tagElement, json) => {

    lottie.loadAnimation({
        container: document.getElementById(tagElement),
        autoplay: true,
        loop: false,
        renderer: 'svg',
        path: json,
        rendererSettings: {
            filterSize: {
                width: 'auto',
                height: 'auto',
                x: '0%',
                y: '0%',
            }
        }
        })
        .setSubframe(false);
}