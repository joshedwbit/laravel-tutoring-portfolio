const homeDialog = document.querySelector('.js-home-dialog');
const homeDialogShow = document.querySelector('.js-home-dialog-show');
const homeDialogHide = document.querySelector('.js-home-dialog-hide');
const homeDialogContent = document.querySelector('.js-home-dialog-content');

homeDialogShow.addEventListener('click', function() {
    homeDialog.showModal();
})

homeDialogHide.addEventListener('click', () => {
    homeDialog.close();
})

homeDialogContent.addEventListener('click', function(e) {
    e.stopPropagation();
})

homeDialog.addEventListener('click', function(e) {
    homeDialog.close();
})