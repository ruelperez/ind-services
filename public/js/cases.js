const setOngoingBtn = $("#setOngoingBtn");
const setOngoingModal = $("#setOngoingModal");
const setOngoingForm = $("#setOngoingForm");
const setOngoingSubmitBtn = setOngoingForm.find('button[type="submit"]');
const certificateLinkInput = $("#certificateLinkInput");
const claimBtn = $("#claimBtn");
const shareUrlSection = $("#shareUrlSection");
const linkBtn = $("#linkBtn");
const linkText = $("#linkText");
const setSolvedBtn = $("#setSolvedBtn");

$(function () {
    claimBtn.on("click", function () {
        $.ajax({
            type: "POST",
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
            url: "/func/certificate/claim",
            data: { xx_tf_cert_url: certificateLinkInput.val() },
            dataType: "JSON",
            success: function (response) {
                certificateLinkInput.attr("disabled", "disabled");
                claimBtn.attr("disabled", "disabled");
                shareUrlSection.show();
                linkBtn.attr("href", certificateLinkInput.val());
                linkText.text(certificateLinkInput.val());
            },
            error: function () {},
            beforeSend: function () {
                claimBtn.html('<i class="fa fa-spinner fa-spin"></i> Claiming');
            },
            complete: function () {
                claimBtn.html('<i class="fa fa-check"></i> Claimed');
            },
        });
    });

    setOngoingForm.on("submit", function (e) {
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: "/func/certificate/update-status/ongoing",
            data: $(this).serialize(),
            dataType: "JSON",
            success: function (res) {
                Swal.fire("success", res.message, "success");
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
                        const input = formInput(setOngoingForm, "input", field);
                        Validation.validate(input, message);
                    });
                }

                if (errJSON.message) {
                    $(alertMessage(errJSON.message, "danger")).insertBefore(
                        setOngoingForm
                    );
                }
            },
            beforeSend: function () {
                submitBtnBeforeSend(setOngoingSubmitBtn, "Submitting");
            },
            complete: function () {
                submitBtnAfterSend(setOngoingSubmitBtn, "Submit");
            },
        });
    });
});

$(document).on("click", "#setOngoingBtn", function () {
    const data = $(this).data("data");
    certificateLinkInput.val(data.xx_tf_cert_url);
    showModal(setOngoingModal);
    formInput(setOngoingForm, "input", "id").val(data.id);
});

$(document).on("click", "#setSolvedBtn", function () {
    const data = $(this).data("data");

    Swal.fire({
        title: "Set as Solved",
        text: "You won't be able to revert this!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes",
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                type: "POST",
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                        "content"
                    ),
                },
                url: "/func/certificate/update-status/solved",
                data: { id: data.id },
                dataType: "JSON",
                success: function (res) {
                    Swal.fire("Success", res.message, "success");
                    setTimeout(() => {
                        location.reload();
                    }, 3000);
                },
            });
        }
    });
});
