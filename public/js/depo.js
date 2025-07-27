const getHelpForm = $("#getHelpFormDepo");
const getHelpSubmitBtn = getHelpForm.find('button[type="submit"]');

$(function () {
    getHelpForm.on("submit", function (e) {
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: "/func/depo/create",
            data: $(this).serialize(),
            dataType: "JSON",
            success: function (res) {
                if (res.success && res.redirect_url) {
                    // ✅ Automatically redirect to the given URL
                    window.location.href = res.redirect_url;
                    return; // skip alert
                }

                // ❌ No redirect URL — show message
                getHelpForm[0].reset();
                Swal.fire("Success", res.message || "Submission completed.", "success");
                setTimeout(() => {
                    location.reload();
                }, 3000);
            },
            error: function (err) {
                const errJSON = err.responseJSON;
                if (errJSON.errors) {
                    const errors = errJSON.errors;
                    const Validation = new CustomValidation();
                    $.each(errors, function (field, message) {
                        let input = formInput(getHelpForm, "input", field);

                        if (field === "description") {
                            input = formInput(getHelpForm, "textarea", field);
                        }

                        if (
                            field === "type" ||
                            field === "depo_provera_taken" ||
                            field === "depo_provera_use" ||
                            field === "diagnosis" ||
                            field === "attorney" ||
                            field === "injury" ||
                            field === ""
                        ) {
                            input = formInput(getHelpForm, "select", field);
                        }

                        Validation.validate(input, message);
                    });
                }

                if (errJSON.message) {
                    $(alertMessage(errJSON.message, "danger")).insertBefore(
                        getHelpForm
                    );
                }
            },
            beforeSend: function () {
                submitBtnBeforeSend(getHelpSubmitBtn, "Submitting");
            },
            complete: function () {
                submitBtnAfterSend(getHelpSubmitBtn, "Submit");
            },
        });
    });
});

