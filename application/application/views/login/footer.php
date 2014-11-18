
<script type="text/javascript">
            $(document).ready(function() {
                
                $('#defaultForm')
                    .bootstrapValidator({
                        message: 'This value is not valid',
                        feedbackIcons: {
                            valid: 'glyphicon glyphicon-ok',
                            invalid: 'glyphicon glyphicon-remove',
                            validating: 'glyphicon glyphicon-refresh'
                        },
                        fields: {
                            username: {
                                message: 'El nombre de usuario no es válido.',
                                validators: {
                                    notEmpty: {
                                        message: 'Se requiere el nombre de usuario y no puede estar vacío.'
                                    },
                                    stringLength: {
                                        min: 6,
                                        max: 30,
                                        message: 'El nombre de usuario debe ser mayor de 6 y menos de 30 caracteres de longitud.'
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
                            email: {
                                validators: {
                                    notEmpty: {
                                        message: 'The email address is required and can\'t be empty'
                                    },
                                    emailAddress: {
                                        message: 'The input is not a valid email address'
                                    }
                                }
                            },
                            password: {
                                validators: {
                                    notEmpty: {
                                        message: 'The password is required and can\'t be empty'
                                    }
                                }
                            }
                        }
                    });
                   /* .on('success.form.bv', function(e) {

                        alert("1");
                        // Prevent form submission, Evitar el envío de formularios
                        e.preventDefault();
alert("2");
                        // Get the form instance, Obtener el tipo de formulario
                        var $form = $(e.target);
alert("3");
                        // Get the BootstrapValidator instance, Obtenga la instancia BootstrapValidator
                        var bv = $form.data('bootstrapValidator');
alert("4");
                        // Use Ajax to submit form data, Utilizar Ajax para enviar datos de formulario 
                        $.post($form.attr('action'), $form.serialize(), function(result) {
                            console.log(result);

                            
                            
                        }, 'json');
                    });*/
            });
        </script>
    </body>
</html>