const AllImageGalery = () => {
    const allImageContainers = document.querySelectorAll('.individual-galery .image, .individual-galery .content');
    allImageContainers.forEach((e) => {
        e.onclick = () => {
            const element = document.createElement('div');
            const image = e.querySelector('img.ilustracion, .description img');
            const imageHref = image.src;
            const newImage = `
                    <img class="ilustracion new" src="${imageHref}" alt="Ilustracion dulbecco">
                    <button>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                        </svg>
                    </button>
                `;
            element.classList.add('image-absolute');
            document.body.insertAdjacentElement('afterbegin', element);
            element.insertAdjacentHTML('afterbegin', newImage);
            element.onclick = () => element.remove();
            const newImageTag = document.querySelector('.ilustracion.new');
            if (newImageTag) {
                newImageTag.onclick = e => e.stopPropagation();
            }
        };
    });
};
export default AllImageGalery;
