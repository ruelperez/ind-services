const getHelpForm = $("#getHelpForm");
const getHelpSubmitBtn = getHelpForm.find('button[type="submit"]');
$(function () {
    getHelpForm.on("submit", function (e) {
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: "/func/lawlogic/add",
            data: $(this).serialize(),
            dataType: "JSON",
            success: function (res) {
                getHelpForm[0].reset();
                Swal.fire("Success", res.message, "success");
                setTimeout(() => {
                    location.reload();
                }, 5000);
            },
            error: function (err) {
                const errJSON = err.responseJSON;
                if (errJSON.errors) {
                    const errors = errJSON.errors;
                    const Validation = new CustomValidation();
                    $.each(errors, function (field, message) {
                        let input = formInput(getHelpForm, "input", field);
                        if (field === "type" || field === "attorney" || field === "benefit_status" || field === "between_50_and_63" || field === "work_history" || field === "medical_condition") {
                            input = formInput(getHelpForm, "select", field);
                        }
                        Validation.validate(input, message);
                    });
                }
                if (errJSON.message) {
                    $(alertMessage(errJSON.message, "danger")).insertBefore(getHelpForm);
                }
            }, beforeSend: function () {
                submitBtnBeforeSend(getHelpSubmitBtn, "Submitting");
            }, complete: function () {
                submitBtnAfterSend(getHelpSubmitBtn, "Submit");
            },
        });
    });
});
