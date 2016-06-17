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
            var COD_EMPRESA = "1";
            var TIP_DOC_IDENTIDAD = $("select#tipodocumento").val();
            var NUM_DOC_IDENTIDAD = $("input#ndocumento").val();
            var NOMBRES = $("input#nombre").val();
            var APE_PATERNO = $("input#paterno").val();
            var APE_MATERNO = $("input#materno").val();
            var FECHA_NACIMIENTO = $("input#nacimiento").val();
            var TIP_TELEFONO_1 = $("select#tipotelefono").val();
            var NUM_TELEFONO_1 = $("input#telefono").val();
            var CORREO_1 = $("input#email").val();
            
            $.ajax({
                url: "mail/contact_me.php",
                type: "POST",
                data: {
                    COD_EMPRESA: COD_EMPRESA,
                    TIP_DOC_IDENTIDAD: TIP_DOC_IDENTIDAD,
                    NUM_DOC_IDENTIDAD: NUM_DOC_IDENTIDAD,
                    NOMBRES: NOMBRES,
                    APE_PATERNO: APE_PATERNO,
                    APE_MATERNO: APE_MATERNO,
                    FECHA_NACIMIENTO: FECHA_NACIMIENTO,
                    TIP_TELEFONO_1: TIP_TELEFONO_1,
                    NUM_TELEFONO_1: NUM_TELEFONO_1,
                    CORREO_1: CORREO_1
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