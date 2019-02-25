(function($) {
    $('#frm_login').submit(function(ev) {
        $.ajax({
            url: 'login/validate',
            type: 'POST',
            data: $(this).serialize(),
            success: function(data) {


            },
            error: function(xhr) {
                if (xhr.status == 400) {
                    $("#username > input").removeClass('is-invalid');
                    $("#password > input").removeClass('is-invalid');
                    var json = JSON.parse(xhr.responseText);
                    console.log(json.password.length);
                    if (json.username.length != 0) {
                        $("#username > div").html(json.username);
                        $("#username > input").addClass('is-invalid');
                    }
                    if (json.password.length != 0) {
                        console.log('hola');
                        $("#password > div").html(json.password);
                        $("#password > input").addClass('is-invalid');
                    }

                }
            },
        });
        ev.preventDefault();
    });
})(jQuery)