toggleFilters();

function toggleFilters() {
    const toggleFiltersButton = document.querySelector('.js-add-filter');
    const filtersContainer = document.querySelector('.js-filter-container');
    toggleFiltersButton.addEventListener('click', function(e) {
        filtersContainer.classList.toggle('resources__filters--hidden');

        if (filtersContainer.classList.contains('resources__filters--hidden')) {
            toggleFiltersButton.innerText="Show filters";
        } else {
            toggleFiltersButton.innerText="Hide filters";
        }
    })
}