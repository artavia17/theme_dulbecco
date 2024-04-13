let heightElement = 0;
let textNormal = '';
let textShort = '';
let allSize = false;
let firstHeight = 0;
let secondHeight = 0;
const TextShort = (textJournalHome, buttonTextJournal) => {
    if (textJournalHome && buttonTextJournal) {
        textNormal = textJournalHome.innerHTML;
        firstHeight = textJournalHome.offsetHeight;
        textShort = `${textJournalHome.innerHTML.substring(0, 700)}...`;
        textJournalHome.innerHTML = textShort;
        secondHeight = textJournalHome.offsetHeight;
        heightElement = textJournalHome.offsetHeight;
        setStyle(textJournalHome, secondHeight);
        buttonTextJournal.addEventListener('click', () => establishHeight(textJournalHome, buttonTextJournal));
    }
};
const establishHeight = (textJournalHome, buttonTextJournal) => {
    const childElementP = buttonTextJournal.querySelector('p');
    if (!childElementP)
        return;
    if (allSize) {
        textJournalHome.innerHTML = textShort;
        allSize = false;
        childElementP.innerHTML = 'Show more';
        buttonTextJournal.classList.remove('active');
        setStyle(textJournalHome, secondHeight);
    }
    else {
        textJournalHome.innerHTML = textNormal;
        allSize = true;
        childElementP.innerHTML = 'Show less';
        buttonTextJournal.classList.add('active');
        setStyle(textJournalHome, firstHeight);
    }
};
const setStyle = (textJournalHome, size) => {
    textJournalHome.style.height = `${size - 2}px`;
};
export default TextShort;
