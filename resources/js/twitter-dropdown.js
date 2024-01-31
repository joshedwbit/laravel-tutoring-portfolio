export function twitterDropdown() {
    var edexcelButton = document.querySelector('.js-dropdown-edexcel')
    var ocrButton = document.querySelector('.js-dropdown-ocr')
    var aqaButton = document.querySelector('.js-dropdown-aqa')

    var edexcelButtonArrow = document.querySelector('.js-icon-edexcel')
    var ocrButtonArrow = document.querySelector('.js-icon-ocr')
    var aqaButtonArrow = document.querySelector('.js-icon-aqa')

    var edexcelLink = document.querySelector('.js-wrapper-edexcel');
    var ocrLink = document.querySelector('.js-wrapper-ocr');
    var aqaLink = document.querySelector('.js-wrapper-aqa');


    edexcelButton.addEventListener('click', function(e) {
        edexcelLink.classList.toggle('dropdown-content--active')
        edexcelButtonArrow.classList.toggle('arrow-icon--active');
    });

    ocrButton.addEventListener('click', function(e) {
        ocrLink.classList.toggle('dropdown-content--active')
        ocrButtonArrow.classList.toggle('arrow-icon--active');
    });

    aqaButton.addEventListener('click', function(e) {
        aqaLink.classList.toggle('dropdown-content--active')
        aqaButtonArrow.classList.toggle('arrow-icon--active');
    })
};