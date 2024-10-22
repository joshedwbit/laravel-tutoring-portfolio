twitterDropdown();

function twitterDropdown() {
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
        clearTwitterContent();
        edexcelLink.classList.toggle('dropdown-content--active')
        edexcelButtonArrow.classList.toggle('arrow-icon--active');
    });

    ocrButton.addEventListener('click', function(e) {
        clearTwitterContent();
        ocrLink.classList.toggle('dropdown-content--active')
        ocrButtonArrow.classList.toggle('arrow-icon--active');
    });

    aqaButton.addEventListener('click', function(e) {
        clearTwitterContent();
        aqaLink.classList.toggle('dropdown-content--active')
        aqaButtonArrow.classList.toggle('arrow-icon--active');
    })
};

function clearTwitterContent() {
    let openTwitterContent = document.querySelectorAll('.dropdown-content--active');
    let openArrowIcons = document.querySelectorAll('.arrow-icon--active');
    if (openTwitterContent) {
        openTwitterContent.forEach(function(e) {
            e.classList.remove('dropdown-content--active')
        })
    }
    if (openArrowIcons) {
        openArrowIcons.forEach(function(e) {
            e.classList.remove('arrow-icon--active');
        })
    }
}