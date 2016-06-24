
    $(document).ready(function() {
        $('#form-leads').formValidation({
            framework: 'bootstrap',
            icon: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            addOns: {
                reCaptcha2: {
                    element: 'captchaContainer',
                    language: 'es',
                    theme: 'light',
                    siteKey: '6LdgKCMTAAAAAATN-F8ECdcUPbr81Mg-ahlpxSOV',
                    timeout: 120,
                    message: 'Captcha no válido'
                }
            },
            locale: 'es_ES',
            fields: {
                tipodocumento: {
                    row: '.col-sm-6',
                    validators: {
                        notEmpty: {
                            message: 'Seleccione Tipo de Documento'
                        }
                    }
                    
                },
                ndocumento: {
                    row: '.col-sm-6',
                    validators: {
                        notEmpty: {
                            message: 'Ingrese Número de Documento'
                        },
                        stringLength: {
                            min: 8,
                            max: 20,
                            message: 'El documento debe tener minimo 8 de digitos.'
                        }
                    }
                },
                nombre: {
                    validators: {
                        notEmpty: {
                            message: 'Ingrese Nombres'
                        },
                        stringLength: {
                            max: 50
                        }
                    }
                },
                paterno: {
                    validators: {
                        notEmpty: {
                            message: 'Ingrese Apellido Paterno'
                        },
                        stringLength: {
                            max: 50
                        }
                    }
                },
                materno: {
                    validators: {
                        notEmpty: {
                            message: 'Ingrese Apellido Materno'
                        },
                        stringLength: {
                            max: 50
                        }
                    }
                },
                sexo: {
                    row: '.col-sm-6',
                    validators: {
                        notEmpty: {
                            message: 'Seleccione Sexo'
                        }
                    }
                    
                },
                nacimiento: {
                    row: '.col-sm-6',
                    validators: {
                        notEmpty: {
                            message: 'Ingrese Fecha de Nacimiento DD/MM/AAAA'
                        },
                        stringLength: {
                            max: 20
                        },
                        date: {
                            format: 'DD/MM/YYYY',
                            message: 'La fecha no es válida'
                         }
                    }



                    
                    
                },
                tipotelefono: {
                    row: '.col-sm-6',
                    validators: {
                        notEmpty: {
                            message: 'Seleccione Tipo de Teléfono'
                        }
                    }
                    
                },
                telefono: {
                    row: '.col-sm-6',
                    validators: {
                        notEmpty: {
                            message: 'Ingrese Número Telefónico'
                        },
                        stringLength: {
                            max: 50
                        }
                    }
                    
                },
                email: {
                    validators: {
                        notEmpty: {
                            message: 'Ingrese Correo Electrónico'
                        },
                        stringLength: {
                            max: 150
                        }
                    }
                    
                },
                inputPassword: {
                    row: '.col-sm-6',
                    validators: {
                        notEmpty: {
                            message: 'Ingrese una Contraseña'
                        },
                        stringLength: {
                            min: 8,
                            max: 100,
                            message: 'La longitud mínima debe ser de 8 caractéres.'
                        },
                        regexp: {
                            regexp: /^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9]).[^\W_]+$/,
                            message: 'La contraseña debe contener al menos 01 mayúscula, 01 minúscula y 01 número. No se aceptan espacios ni caracteres especiales'
                        }
                    }
                    
                },
                inputPasswordconfirma: {
                    row: '.col-sm-6',
                    validators: {
                        notEmpty: {
                            message: 'Confirme su Contraseña'
                        },
                        stringLength: {
                            max: 100
                        },
                        identical: {
                            field: 'inputPassword',
                            message: 'Las contraseñas deben ser iguales'
                        }
                    }
                },
                
                terminos: {
                    icon: false,
                    validators: {
                        notEmpty: {
                            message: 'Debe aceptar los Términos y Condiciones'
                        }
                     }
                }
            }


        })

        .on('err.validator.fv', function(e, data) {
            // $(e.target)    --> The field element
            // data.fv        --> The FormValidation instance
            // data.field     --> The field name
            // data.element   --> The field element
            // data.validator --> The current validator name

            data.element
                .data('fv.messages')
                // Hide all the messages
                .find('.help-block[data-fv-for="' + data.field + '"]').hide()
                // Show only message associated with current validator
                .filter('[data-fv-validator="' + data.validator + '"]').show();
        })

        .on('success.form.fv', function(e) {
        // Prevent default form submission
        e.preventDefault();

        var $form = $(e.target);

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

        // Send all form data to back-end
        $.ajax({
            // PHP url: "mail/contact_me.php",
            url: "http://181.65.214.109:81/ServInterno.svc/wsSetRegistrarUsuario"
            contentType: "application/json; charset=utf-8",
            type: 'POST',
            dataType: "json",
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
                    COD_DEPARTAMENTO: COD_DEPARTAMENTO,
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
            headers: {
                CosapiId: '123'
            },
            cache: false,
            success: function(response) {
                // Clear the form
                $('#form-leads').formValidation('resetForm', true);
                FormValidation.AddOn.reCaptcha2.reset('captchaContainer');

                // Regenerate the captcha
                // generateCaptcha();

                 // Show the message
                response.result === 'error'
                    ? $('#exito')
                        .removeClass('alert-success')
                        .addClass('alert-warning')
                        .html('No se pudo enviar el mensaje, vuelva a intentar.')
                        .show()
                    : $('#exito')
                        .removeClass('alert-warning')
                        .addClass('alert-success')
                        .html('Su registro se envió exitosamente.')
                        .show();
            }
        });
    });




    
    
    
    

    });
