document.addEventListener("DOMContentLoaded", function () {
    const form = document.querySelector("form");
    const submitButton = form.querySelector(".modal_btn");

    function validateForm() {
        // Validate text inputs
        const textInputs = form.querySelectorAll("input[name='first_name'], input[name='last_name'], input[name='email']");
        let allTextInputsFilled = true;
        textInputs.forEach((input) => {
            if (input.value.trim() === "") {
                allTextInputsFilled = false;
            }
        });

        // Validate select inputs
        const selectInputs = form.querySelectorAll("select[name='sport_type']");
        let allSelectsFilled = true;
        selectInputs.forEach((select) => {
            if (select.value.trim() === "") {
                allSelectsFilled = false;
            }
        });

        // Validate radio buttons for user_type
        const userTypeRadioGroup = form.querySelectorAll("input[name='user_type']");
        let userTypeRadioChecked = false;
        userTypeRadioGroup.forEach((radio) => {
            if (radio.checked) {
                userTypeRadioChecked = true;
            }
        });

        // Validate radio buttons for question_one
        const questionOneRadioGroup = form.querySelectorAll("input[name='question_one']");
        let questionOneRadioChecked = false;
        questionOneRadioGroup.forEach((radio) => {
            if (radio.checked) {
                questionOneRadioChecked = true;
            }
        });

        // Validate textareas
        const textareas = form.querySelectorAll("textarea[name='question_two'], textarea[name='question_three'], textarea[name='question_four']");
        let allTextareasFilled = true;
        textareas.forEach((textarea) => {
            if (textarea.value.trim() === "") {
                allTextareasFilled = false;
            }
        });

        submitButton.disabled = !(allTextInputsFilled && allSelectsFilled && userTypeRadioChecked && questionOneRadioChecked && allTextareasFilled);
    }

    form.addEventListener("change", validateForm);
    form.addEventListener("input", validateForm);

    // Initial validation check
    validateForm();
});
