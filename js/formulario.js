$(function () 
	{ $("#form-leads input,#form-leads select,#form-leads textarea").not("[type=submit]").jqBootstrapValidation({

		preventSubmit: true,
        submitError: function($form, event, errors) {
            // additional error messages or events
        },

        submitSuccess: function($form, event) {
            // Prevent spam click and default submit behaviour
            $("#btnSubmit").attr("disabled", true);
            event.preventDefault();
            
            // get values from FORM
            var ndocumento = $("input#ndocumento").val();
            var nombre = $("input#nombre").val();
            var apaterno = $("input#apaterno").val();
            var amaterno = $("input#amaterno").val();
            var nacimiento = $("input#nacimiento").val();
            var telefono = $("input#telefono").val();
            var email = $("input#email").val();
            
            $.ajax({
                url: "../js/mail/contact_me.php",
                type: "POST",
                data: {
                    ndocumento: ndocumento,
                    nombre: nombre,
                    apaterno: apaterno,
                    amaterno: amaterno,
                    nacimiento: nacimiento,
                    telefono: telefono,
                    email: email
                },
                cache: false,
                success: function() {
                    // Enable button & show success message
                    $("#btnSubmit").attr("disabled", false);
                    $('#exito').html("<div class='alert alert-success'>");
                    $('#exito > .alert-success').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                        .append("</button>");
                    $('#exito > .alert-success')
                        .append("<strong>Su mensaje fue enviado. </strong>");
                    $('#exito > .alert-success')
                        .append('</div>');

                    //clear all fields
                    $('#form-leads').trigger("reset");
                },
                error: function() {
                    // Fail message
                    $('#exito').html("<div class='alert alert-danger'>");
                    $('#exito > .alert-danger').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                        .append("</button>");
                    $('#exito > .alert-danger').append("<strong>Sorry " + firstName + ", parece que el servidor no responde. Por favor intentalo luego!");
                    $('#exito > .alert-danger').append('</div>');
                    //clear all fields
                    $('#contactForm').trigger("reset");
                },
            })
        },

        filter: function() {
            return $(this).is(":visible");
        },
	}); 

	$("a[data-toggle=\"tab\"]").click(function(e) {
        e.preventDefault();
        $(this).tab("show");
    });

} );

// When clicking on Full hide fail/success boxes
$('#nombre').focus(function() {
    $('#exito').html('');
});