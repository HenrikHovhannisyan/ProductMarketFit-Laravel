document.addEventListener("DOMContentLoaded", function () {
    const form = document.querySelector("form");
    const submitButton = form.querySelector(".modal_btn");

    function validateForm() {
        const radioGroup = form.querySelectorAll("input[name='question_one']");
        let radioChecked = false;
        radioGroup.forEach((radio) => {
            if (radio.checked) {
                radioChecked = true;
            }
        });

        const textareas = form.querySelectorAll("textarea");
        let allFilled = true;
        textareas.forEach((textarea) => {
            if (textarea.value.trim() === "") {
                allFilled = false;
            }
        });

        submitButton.disabled = !(radioChecked && allFilled);
    }

    form.addEventListener("change", validateForm);
    form.addEventListener("input", validateForm);

    // Initial validation check
    validateForm();
});
