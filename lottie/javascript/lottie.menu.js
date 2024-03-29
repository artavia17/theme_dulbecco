/**
 * En este archivo ejecutamos la animacion del lottie
 */

window.addEventListener('DOMContentLoaded', () => {
    header();
})

window.addEventListener('scroll', () => {
    scrollAnimation();
});

const header = () => {

    const headerID = document.getElementById('svg_header');

    if(headerID){

        const json_data = headerID.getAttribute('json');

        lottie.loadAnimation({

            container: document.getElementById('svg_header'),
            autoplay: true,
            loop: false,
            renderer: 'svg',
            path: json_data,
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


}


const scrollAnimation = () => {

    const elementnav = document.querySelector('nav');
    const elementLogo = elementnav.querySelector('.logo');
    const jsonAttribute = elementLogo.getAttribute('json');
    const svg = elementLogo.querySelector('svg')
    let scrollY = 0;
    let navHeight = 0;

    if(elementLogo && jsonAttribute){

        scrollY = window.scrollY;

        navHeight = elementnav.offsetHeight;

        if(scrollY > navHeight){

            elementnav.classList.add('active');

            if(!svg){

                lottie.loadAnimation({
                    container: document.getElementById('dulbecco_svg'),
                    autoplay: true,
                    loop: false,
                    renderer: 'svg',
                    path: jsonAttribute,
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

        }else{
            elementnav.classList.remove('active');
            if(svg){
                svg.remove();
            }
        }

        
    }

}