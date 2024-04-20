let heightElement : number = 0;
let textNormal : string = '';
let textShort : string = '';
let allSize: boolean = false;
let firstHeight : number = 0;
let secondHeight : number = 0;

const TextShort = (textJournalHome : HTMLElement | null, buttonTextJournal : HTMLButtonElement | null) => {

    // if(textJournalHome && buttonTextJournal){
    //     textNormal = textJournalHome.innerHTML;
    //     firstHeight = textJournalHome.offsetHeight;

    //     textShort = `${textJournalHome.innerHTML.substring(0, 700)}...`;

    //     textJournalHome.innerHTML = textShort;
    //     secondHeight = textJournalHome.offsetHeight;


    //     heightElement = textJournalHome.offsetHeight;

    //     setStyle(textJournalHome, secondHeight);

    //     buttonTextJournal.addEventListener('click', () => establishHeight(textJournalHome, buttonTextJournal))

    // }

}

const establishHeight = (textJournalHome : HTMLElement, buttonTextJournal : HTMLButtonElement) => {

    const childElementP : HTMLParagraphElement | null = buttonTextJournal.querySelector('p');

    if(!childElementP) return;

    if(allSize){
        textJournalHome.innerHTML = textShort;

        allSize = false;

        childElementP.innerHTML = 'Show more';

        buttonTextJournal.classList.remove('active');

        setStyle(textJournalHome, secondHeight)
        
    }else{
        textJournalHome.innerHTML = textNormal;
        
        allSize = true;

        childElementP.innerHTML = 'Show less';

        buttonTextJournal.classList.add('active');

        setStyle(textJournalHome, firstHeight)
    }

}

const setStyle = (textJournalHome : HTMLElement, size : number) => {

    textJournalHome.style.height = `${size - 2}px`;

}


export default TextShort;