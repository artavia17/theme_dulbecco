let numberFirst = 0;
let stop = false;
const loadPage = () => {
    // Obtener el cuerpo del elemento
    const bodyElement = document.body;
    // Creamos un nuevo elemento de carga
    const loadElement = document.createElement('section');
    // Creamos el elemento en donde se muestra la carga
    const boxLoadElement = document.createElement('section');
    // Creamos el primer numero
    const firstNumber = document.createElement('div');
    const secondNumber = document.createElement('div');
    const tercerNumber = document.createElement('div');
    // Agremos las clases para agregar estilos
    loadElement.classList.add('load_page');
    boxLoadElement.classList.add('box');
    firstNumber.classList.add('fist_number');
    secondNumber.classList.add('second_number');
    tercerNumber.classList.add('tercer_number');
    boxLoadElement.appendChild(firstNumber);
    boxLoadElement.appendChild(secondNumber);
    boxLoadElement.appendChild(tercerNumber);
    loadElement.appendChild(boxLoadElement);
    bodyElement.appendChild(loadElement);
    bodyElement.style.overflow = 'hidden';
    // Creamos los numeros
    createNumber(firstNumber, false, true);
    createNumber(secondNumber, false, false);
    createNumber(tercerNumber, true, false);
    // Corremos el contador
    runCount(firstNumber, secondNumber, tercerNumber);
    window.addEventListener('load', () => {
        stop = true;
        finishLoad(firstNumber, secondNumber, tercerNumber);
        setTimeout(() => {
            boxLoadElement.classList.add('remove');
            setTimeout(() => {
                loadElement.classList.add('remove');
                bodyElement.style.overflow = 'initial';
                setTimeout(() => {
                    loadElement.remove();
                }, 500);
            }, 2100);
        }, 2000);
    });
};
const createNumber = (html, end = false, create = false) => {
    let elements = '';
    if (end) {
        for (let i = 1; i >= 0; i--) {
            if (i == 1) {
                elements += `<div class="item">%</div>`;
            }
            else {
                elements += `<div class="item">${i}</div>`;
            }
        }
    }
    else {
        for (let i = 0; i <= 10; i++) {
            if (i == 10) {
                if (create == true) {
                    elements += `<div class="item">1</div>`;
                }
                else {
                    elements += `<div class="item">0</div>`;
                }
            }
            else {
                elements += `<div class="item">${i}</div>`;
            }
        }
    }
    html.insertAdjacentHTML('afterbegin', elements);
};
const finishLoad = (firstHTML, secondHTML, tercerHTML) => {
    if (numberFirst <= 3) {
        firstHTML.style.transition = '1.5s ease';
        secondHTML.style.transition = '2s ease';
        tercerHTML.style.transition = '1.5s ease';
    }
    firstHTML.style.transform = 'translateY(-1000%)';
    secondHTML.style.transform = 'translateY(-1000%)';
    tercerHTML.style.transform = 'translateY(-100%)';
};
const runCount = (firstHTML, secondHTML, tercerHTML) => {
    let count = 0;
    let lastCount = 0;
    const time = setInterval(() => {
        if (!stop) {
            const lengthCount = count.toString().length;
            lastCount = count;
            if (lengthCount == 1) {
                secondHTML.style.transform = `translateY(-${100 * count}%)`;
            }
            else if (lengthCount == 2) {
                const firstNumberString = count.toString().charAt(0);
                const firstNumber = Number(firstNumberString);
                const secondNumberString = count.toString().charAt(1);
                const secondNumber = Number(secondNumberString);
                if (secondNumber == 0) {
                    secondHTML.style.transform = `translateY(-${1000}%)`;
                    setTimeout(() => {
                        secondHTML.style.transition = '.0s ease';
                        secondHTML.style.transform = `translateY(-0%)`;
                    }, 200);
                }
                else {
                    secondHTML.style.transition = '.2s ease';
                    secondHTML.style.transform = `translateY(-${100 * secondNumber}%)`;
                }
                if (numberFirst != firstNumber) {
                    numberFirst = firstNumber;
                    firstHTML.style.transform = `translateY(-${100 * firstNumber}%)`;
                }
            }
        }
        if (count == 99 || stop == true) {
            clearInterval(time);
        }
        else {
            count += 1;
        }
    }, 300);
};
export { loadPage };
