(function($) {
    $('#frm_login').submit(function(ev) {
        $.ajax({
            url: 'login/validate',
            type: 'POST',
            data: $(this).serialize(),
            success: function(data) {


            },
            statusCode: {
                400: function(xhr) {
                    $("#username > input").removeClass('is-invalid');
                    $("#password > input").removeClass('is-invalid');
                    var json = JSON.parse(xhr.responseText);

                    if (json.username.length != 0) {
                        $("#username > div").html(json.username);
                        $("#username > input").addClass('is-invalid');
                    }
                    if (json.password.length != 0) {
                        $("#password > div").html(json.password);
                        $("#password > input").addClass('is-invalid');
                    }

                },
                401: function(xhr) {
                    var json = JSON.parse(xhr.responseText);
                    console.log(json.msg);
                    Swal.fire({
                        title: json.msg,
                        type: 'info',
                        showCloseButton: true,
                        focusConfirm: true,
                        confirmButtonText: 'Aceptar',
                    });
                }
            },
        });
        ev.preventDefault();
    });
})(jQuery)