

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
            var PASSWORD = $("input#inputPassword").val();
            var NOMBRES = $("input#nombre").val();
            var APE_PATERNO = $("input#paterno").val();
            var APE_MATERNO = $("input#materno").val();
            var CORREO_1 = $("input#email").val();
            var COD_PERFIL = "0";
            var FECHA_NACIMIENTO = $("input#nacimiento").val();
            var COD_ESTADO_CIVIL = " ";
            var COD_SEXO = $("select#sexo").val();

            var DIRECCION = " ";
            var COD_DEPARTAMENTO = " ";
            var COD_PROVINCIA = " ";
            var COD_DISTRITO = " ";
            
            var TIP_TELEFONO_1 = $("select#tipotelefono").val();
            var COD_POSTAL_1 = " ";
            var NUM_TELEFONO_1 = $("input#telefono").val();

            var TIP_TELEFONO_2 = " ";
            var COD_POSTAL_2 = " ";
            var NUM_TELEFONO_2 = " ";

            var ORIGEN = "LANDING-BOOM";

            var RUTA_FOTO = " ";
            var PREGUNTA_FILIACION = " ";
            var COD_PARENTESCO = " ";
            var FLAG_FILIACION = " ";
            var COD_TITULAR = " ";
            var FLAG_FOTO = "1";
            
            
            $.ajax({
                url: "mail/contact_me.php",
                type: "POST",
                data: {
                    COD_EMPRESA: COD_EMPRESA,
                    TIP_DOC_IDENTIDAD: TIP_DOC_IDENTIDAD,
                    NUM_DOC_IDENTIDAD: NUM_DOC_IDENTIDAD,
                    PASSWORD: PASSWORD,
                    NOMBRES: NOMBRES,
                    APE_PATERNO: APE_PATERNO,
                    APE_MATERNO: APE_MATERNO,
                    CORREO_1: CORREO_1,
                    COD_PERFIL: COD_PERFIL,
                    FECHA_NACIMIENTO: FECHA_NACIMIENTO,
                    COD_ESTADO_CIVIL: COD_ESTADO_CIVIL,
                    COD_SEXO: COD_SEXO,
                    DIRECCION: DIRECCION,
                    COD_DEPARTAMENTO: COD_DEPARTAMENT,
                    COD_PROVINCIA: COD_PROVINCIA,
                    COD_DISTRITO: COD_DISTRITO,
                    TIP_TELEFONO_1: TIP_TELEFONO_1,
                    COD_POSTAL_1: COD_POSTAL_1,
                    NUM_TELEFONO_1: NUM_TELEFONO_1,
                    TIP_TELEFONO_2: TIP_TELEFONO_2,
                    COD_POSTAL_2: COD_POSTAL_2,
                    NUM_TELEFONO_2: NUM_TELEFONO_2,
                    ORIGEN: ORIGEN,
                    RUTA_FOTO: RUTA_FOTO,
                    PREGUNTA_FILIACION: PREGUNTA_FILIACION,
                    COD_PARENTESCO: COD_PARENTESCO,
                    FLAG_FILIACION: FLAG_FILIACION,
                    COD_TITULAR: COD_TITULAR,
                    FLAG_FOTO: FLAG_FOTO
                    
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

$.jqBootstrapValidation('override', {
    builtInValidators: {
        validemail: {
            name: 'Validemail',
            type: 'regex',
            regex: '[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\\\.[A-Za-z]{2,6}',
            message: 'Not a valid email address'
        }
    }
});

// When clicking on Full hide fail/success boxes
$('#nombre').focus(function() {
    $('#exito').html('');
});