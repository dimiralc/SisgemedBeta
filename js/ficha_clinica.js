$(document).ready(function() {
    
    $('.addButton').on('click', function() {
        var index = $(this).data('index');
        if (!index) {
            index = 1;
            $(this).data('index', 1);
        }
        index++;
        $(this).data('index', index);
        
        var template     = $(this).attr('data-template'),
            $templateEle = $('#' + template + 'Template'),
            $row         = $templateEle.clone().removeAttr('id').insertBefore($templateEle).removeClass('hide'),
            $el          = $row.find('input').eq(0).attr('name', template + '[]');
        $('#defaultForm').bootstrapValidator('addField', $el);

        // Set random value for checkbox and textbox
        if ('checkbox' == $el.attr('type') || 'radio' == $el.attr('type')) {
            $el.val('Choice #' + index)
               .parent().find('span.lbl').html('Choice #' + index);
        } else {
            
            //obtenemos el nombre del arreglo seleccionado.
            $nom_arreglo = $el.attr("name");
            switch ($nom_arreglo) {
                    
                case "vacunas[]":
                      $el.attr('placeholder', 'Ingrese una vacuna');
                      break;
                    
                case "alergias[]":
                      $el.attr('placeholder', 'Ingrese una alergia');
                      break;
                    
                case "medicamentos[]":
                      $el.attr('placeholder', 'Ingrese un medicamento ');
                      break;
                    
                case "enfermedades[]":
                      $el.attr('placeholder', 'Ingrese una enfermedad');
                      break;
                    
                case "accidentes[]":
                      $el.attr('placeholder', 'Ingrese un accidente');
                      break;
                      
                case "operaciones[]":
                      $el.attr('placeholder', 'Ingrese una operacion');
                      break;
                      
                default:
                     $el.attr('placeholder', 'Error');
              }
           
        }
        
        $row.on('click', '.removeButton', function(e) {
            $('#defaultForm').bootstrapValidator('removeField', $el);
            $row.remove();
        });
    });

    $('#defaultForm')
        .bootstrapValidator({
            message: 'This value is not valid',
            feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields: {
                /*'vacunas[]': {
                    validators: {
                        notEmpty: {
                            message: 'The textbox field is required'
                        }
                    }
                },
                'alergias[]': {
                    validators: {
                        notEmpty: {
                            message: 'The textbox field is required'
                        }
                    }
                },*/
                
                /*'checkbox[]': {
                    validators: {
                        notEmpty: {
                            message: 'The checkbox field is required'
                        }
                    }
                },
                'radio[]': {
                    validators: {
                        notEmpty: {
                            message: 'The radio field is required'
                        }
                    }
                }*/
            }
        })
        .on('error.field.bv', function(e, data) {
            //console.log('error.field.bv -->', data.element);
        })
        .on('success.field.bv', function(e, data) {
            //console.log('success.field.bv -->', data.element);
        })
        .on('added.field.bv', function(e, data) {
            //console.log('Added element -->', data.field, data.element);
        })
        .on('removed.field.bv', function(e, data) {
            //console.log('Removed element -->', data.field, data.element);
        });
});