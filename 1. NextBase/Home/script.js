document.addEventListener("DOMContentLoaded", function () {
    console.log("NextBase home page loaded");

    const ctaButton = document.querySelector(".cta-button");
    if (ctaButton) {
        ctaButton.addEventListener("click", function () {
            alert("Redirecting to sign-up page");
        });
    }
});
