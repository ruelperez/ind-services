const loginForm = $("#loginForm");
const loginSubmitBtn = loginForm.find('button[type="submit"]');
const passwordGroup = $("#passwordGroup");
const emailGroup = $("#emailGroup");

$(function () {
    loginForm.on("submit", function (e) {
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: "/func/auth/login",
            data: $(this).serialize(),
            dataType: "JSON",
            success: function (res) {
                $(alertMessage(res.message, "success")).insertBefore(loginForm);
                setTimeout(function () {
                    window.location.href = "/dashboard/admin/index";
                }, 1000);
            },
            error: function (err) {
                const errJSON = err.responseJSON;
                if (errJSON.errors) {
                    const errors = errJSON.errors;
                    const Validation = new CustomValidation();
                    $.each(errors, function (field, message) {
                        const input = formInput(loginForm, "input", field);

                        if (field === "password") {
                            Validation.validateGroup(
                                message,
                                input,
                                passwordGroup
                            );
                        } else {
                            Validation.validateGroup(
                                message,
                                input,
                                emailGroup
                            );
                        }
                    });
                }

                if (errJSON.message) {
                    $(alertMessage(errJSON.message, "danger")).insertBefore(
                        loginForm
                    );
                }
            },
            beforeSend: function () {
                submitBtnBeforeSend(loginSubmitBtn, "Signing In");
            },
            complete: function () {
                submitBtnAfterSend(loginSubmitBtn, "Sign In");
            },
        });
    });
});
