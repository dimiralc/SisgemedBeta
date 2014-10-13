$(document).ready(function() {
    $('#defaultForm')
        .bootstrapValidator({
            message: 'Este valor no es válido',
            feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields: {
                rut: {
                    message: 'El rut del usuario no es valido.',
                    validators: {
                        notEmpty: {
                            message: 'Campo Requerido.'
                        },
                        stringLength: {
                            min: 1,
                            max: 30,
                            message: 'Rut debe ser valido'
                        },
                        /*remote: {
                            url: 'remote.php',
                            message: 'The username is not available'
                        },*/
                        regexp: {
                            regexp: /^[a-zA-Z0-9_\.]+$/,
                            message: 'El nombre de usuario sólo puede consistir en alfabético, número, puntos o subrayados.'
                        }
                    }
                },
                /*email: {
                    validators: {
                        notEmpty: {
                            message: 'The email address is required and can\'t be empty'
                        },
                        emailAddress: {
                            message: 'The input is not a valid email address'
                        }
                    }
                },
                */
                institucion: {
                    validators: {
                        notEmpty: {
                            message: 'La institucion es necesaria y no puede estar vacío'
                        },
                        stringLength: {
                            max: 80,
                            message: 'El nombre de la institucion debe ser inferior a 80 caracteres de longitud'
                        },
                        regexp: {
                            regexp: /^[a-zA-Z0-9_\.]+$/,
                            message: 'El nombre de la institucion sólo puede consistir en alfabético, número, puntos o subrayados.'
                        }
                    }
                },
                password: {
                    validators: {
                        notEmpty: {
                            message: 'La contraseña es necesaria y no puede estar vacío'
                        }
                    }
                }
            }
        });
});



