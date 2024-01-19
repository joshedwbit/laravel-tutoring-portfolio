var edexcelButton = document.querySelector('.recent-news__dropdown-edexcel')
var ocrButton = document.querySelector('.recent-news__dropdown-ocr')
var aqaButton = document.querySelector('.recent-news__dropdown-aqa')

var edexcelButtonArrow = document.querySelector('.arrow-icon--edexcel')
var ocrButtonArrow = document.querySelector('.arrow-icon--ocr')
var aqaButtonArrow = document.querySelector('.arrow-icon--aqa')

var edexcelLink = document.querySelector('.recent-news__wrapper-edexcel');
var ocrLink = document.querySelector('.recent-news__wrapper-ocr');
var aqaLink = document.querySelector('.recent-news__wrapper-aqa');


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
});
