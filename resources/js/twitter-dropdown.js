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
        if (!isButtonActive(e.target)) {
            clearTwitterContent();
        }
        activateTwitterFeed(edexcelLink, edexcelButtonArrow, edexcelButton)
    });

    ocrButton.addEventListener('click', function(e) {
        if (!isButtonActive(e.target)) {
            clearTwitterContent();
        }
        activateTwitterFeed(ocrLink, ocrButtonArrow, ocrButton);
    });

    aqaButton.addEventListener('click', function(e) {
        console.log(e.target)
        if (!isButtonActive(e.target)) {
            clearTwitterContent();
        }
        activateTwitterFeed(aqaLink, aqaButtonArrow, aqaButton);
    })
};

function activateTwitterFeed(link, arrow, button) {
    link.classList.toggle('dropdown-content--active');
    arrow.classList.toggle('arrow-icon--active');
    button.classList.add('twitter-feed--active')
}

function isButtonActive(element) {
    return element.classList.contains('twitter-feed--active');
}

function clearTwitterContent() {
    let openTwitterContent = document.querySelectorAll('.dropdown-content--active');
    let openArrowIcons = document.querySelectorAll('.arrow-icon--active');
    let activeButtons = document.querySelectorAll('.twitter-feed--active')
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
    if (activeButtons) {
        activeButtons.forEach(function(e) {
            e.classList.remove('twitter-feed--active')
        })
    }
}