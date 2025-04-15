export function continueReading() {
    document.addEventListener("DOMContentLoaded", function() {
        const details = document.querySelector(".js-v2homepage-details");
        const summary = details.querySelector(".js-v2homepage-summary");

        details.addEventListener("toggle", function() {
            if (details.open) {
                summary.textContent = "Show less";
            } else {
                summary.textContent = "Continue reading";
            }
        });
    });
}
