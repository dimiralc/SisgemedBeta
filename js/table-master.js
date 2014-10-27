/******************************************************************************/
/*
 * @Libreria que permite controlar las #TABLAS MASTER# utilizadas en la
 * historia medica del paciente.
 * @pagina: (view) historiaMedica.php
 * @Fecha Creacion: 20-10-2014
/******************************************************************************/


/******************************************************************************/
/** Funcion que controla la tabla master #antecedentes familiares#
/******************************************************************************/
$(function() {
    var id = 0,
        getRows = function() {
            var rows = [];

            for (var i = 0; i < 5; i++) {
                rows.push({
                    id: id,
                    name: 'test' + id,
                    price: '$' + id
                });
                id++;
            }
            return rows;
        },
    // id de la tabla utilizada
    $table = $('#table-ant_fam').bootstrapTable();
    
    // funcion que permite refrescar la tabla
    $('#load-data, #append-data, #check-all, #uncheck-all, ' +
            '#show-loading, #hide-loading, #refreshAntFam').click(function() {
        $table.bootstrapTable($(this).data('method'), getRows());
    });
});
/******************************************************************************/
/** FIN #antecedentes familiares#
/******************************************************************************/


/******************************************************************************/
/** Funcion que controla la tabla master #antecedentes personales y sociales#
/******************************************************************************/
$(function() {
    var id = 0,
    getRows = function() {
            var rows = [];

            for (var i = 0; i < 5; i++) {
                rows.push({
                    id: id,
                    name: 'test' + id,
                    price: '$' + id
                });
                id++;
            }
            return rows;
    },
    // id de la tabla utilizada
    $table = $('#table-ant-per').bootstrapTable();
    
    /** funcion que permite refrescar la tabla ***/
    $('#load-data, #append-data, #check-all, #uncheck-all, ' +
            '#show-loading, #hide-loading, #refreshAntPersonales').click(function() {
        $table.bootstrapTable($(this).data('method'), getRows());
    });
});
/******************************************************************************/
/** Fin #antecedentes personales y sociales#
/******************************************************************************/


/******************************************************************************/
/** Funcion que controla la tabla master #personas de contacto#
/******************************************************************************/
$(function() {
    var id = 0,
        getRows = function() {
            var rows = [];

            for (var i = 0; i < 5; i++) {
                rows.push({
                    id: id,
                    name: 'test' + id,
                    price: '$' + id
                });
                id++;
            }
            return rows;
        },
    // id de la tabla utilizada
    $table = $('#table-personas-contacto').bootstrapTable();
    
    /** funcion que permite refrescar la tabla ***/
    $('#load-data, #append-data, #check-all, #uncheck-all, ' +
            '#show-loading, #hide-loading, #refreshPersonasContacto').click(function() {
        $table.bootstrapTable($(this).data('method'), getRows());
    });
});
/******************************************************************************/
/** FIN #personas de contacto#
/******************************************************************************/


/******************************************************************************/
/** Funcion que controla la tabla master antecedentes morbidos 
/******************************************************************************/
$(function() {
    var id = 0,
    getRows = function() {
            var rows = [];

            for (var i = 0; i < 5; i++) {
                rows.push({
                    id: id,
                    name: 'test' + id,
                    price: '$' + id
                });
                id++;
            }
            return rows;
    },
    // id de la tabla utilizada
    $table = $('#table-ant-morbidos').bootstrapTable();
    
    /** funcion que permite refrescar la tabla ***/
    $('#load-data, #append-data, #check-all, #uncheck-all, ' +
            '#show-loading, #hide-loading, #refreshAntMorbido').click(function() {
        $table.bootstrapTable($(this).data('method'), getRows());
    });
});


/******************************************************************************/
/** Funcion que controla la tabla master #antecedentes ginecoobstetricos#
/******************************************************************************/
$(function() {
    var id = 0,
        getRows = function() {
            var rows = [];

            for (var i = 0; i < 5; i++) {
                rows.push({
                    id: id,
                    name: 'test' + id,
                    price: '$' + id
                });
                id++;
            }
            return rows;
        },
    // id de la tabla utilizada
    $table = $('#table-ant-gineco').bootstrapTable();
    
    /** funcion que permite refrescar la tabla ***/
    $('#load-data, #append-data, #check-all, #uncheck-all, ' +
            '#show-loading, #hide-loading, #refreshAntGineco').click(function() {
        $table.bootstrapTable($(this).data('method'), getRows());
    });
});
/******************************************************************************/
/** FIN #antecedentes ginecoobstetricos#
/******************************************************************************/


/******************************************************************************/
/** Funcion que controla la tabla master #antecedentes habitos#
/******************************************************************************/
$(function() {
    var id = 0,
        getRows = function() {
            var rows = [];

            for (var i = 0; i < 5; i++) {
                rows.push({
                    id: id,
                    name: 'test' + id,
                    price: '$' + id
                });
                id++;
            }
            return rows;
        },
    // id de la tabla utilizada
    $table = $('#table-ant-habitos').bootstrapTable();
    
    /** funcion que permite refrescar la tabla ***/
    $('#load-data, #append-data, #check-all, #uncheck-all, ' +
            '#show-loading, #hide-loading, #refreshAntHabitos').click(function() {
        $table.bootstrapTable($(this).data('method'), getRows());
    });
});
/******************************************************************************/
/** FIN #antecedentes ginecoobstetricos#
/******************************************************************************/


/******************************************************************************/
/** Funcion que controla la tabla master #antecedentes medicamentos#
/******************************************************************************/
$(function() {
    var id = 0,
        getRows = function() {
            var rows = [];

            for (var i = 0; i < 5; i++) {
                rows.push({
                    id: id,
                    name: 'test' + id,
                    price: '$' + id
                });
                id++;
            }
            return rows;
        },
    // id de la tabla utilizada
    $table = $('#table-ant-med').bootstrapTable();
    
    /** funcion que permite refrescar la tabla ***/
    $('#load-data, #append-data, #check-all, #uncheck-all, ' +
            '#show-loading, #hide-loading, #refreshAntMed').click(function() {
        $table.bootstrapTable($(this).data('method'), getRows());
    });
});
/******************************************************************************/
/** FIN #antecedentes medicamentos#
/******************************************************************************/



/******************************************************************************/
/** Funcion que controla la tabla master #antecedentes alergias#
/******************************************************************************/
$(function() {
    var id = 0,
        getRows = function() {
            var rows = [];

            for (var i = 0; i < 5; i++) {
                rows.push({
                    id: id,
                    name: 'test' + id,
                    price: '$' + id
                });
                id++;
            }
            return rows;
        },
    // id de la tabla utilizada
    $table = $('#table-ant-alerg').bootstrapTable();
    
    /** funcion que permite refrescar la tabla ***/
    $('#load-data, #append-data, #check-all, #uncheck-all, ' +
            '#show-loading, #hide-loading, #refreshAntAlerg').click(function() {
        $table.bootstrapTable($(this).data('method'), getRows());
    });
});
/******************************************************************************/
/** FIN #antecedentes alergias#
/******************************************************************************/


/******************************************************************************/
/** Funcion que controla la tabla master #antecedentes vacunas#
/******************************************************************************/
$(function() {
    var id = 0,
        getRows = function() {
            var rows = [];

            for (var i = 0; i < 5; i++) {
                rows.push({
                    id: id,
                    name: 'test' + id,
                    price: '$' + id
                });
                id++;
            }
            return rows;
        },
    // id de la tabla utilizada
    $table = $('#table-ant-inmuno').bootstrapTable();
    
    /** funcion que permite refrescar la tabla ***/
    $('#load-data, #append-data, #check-all, #uncheck-all, ' +
            '#show-loading, #hide-loading, #refreshAntInmuno').click(function() {
        $table.bootstrapTable($(this).data('method'), getRows());
    });
});
/******************************************************************************/
/** FIN #antecedentes inmunizaciones#
/******************************************************************************/

/******************************************************************************/
/** Funcion que controla la tabla master #consultas medicas#
/******************************************************************************/
$(function() {
    var id = 0,
        getRows = function() {
            var rows = [];

            for (var i = 0; i < 5; i++) {
                rows.push({
                    id: id,
                    name: 'test' + id,
                    price: '$' + id
                });
                id++;
            }
            return rows;
        },
    // id de la tabla utilizada
    $table = $('#table-ant-consultas-med').bootstrapTable();
    
    /** funcion que permite refrescar la tabla ***/
    $('#load-data, #append-data, #check-all, #uncheck-all, ' +
            '#show-loading, #hide-loading, #refreshAntConsultaMed').click(function() {
        $table.bootstrapTable($(this).data('method'), getRows());
    });
});
/******************************************************************************/
/** FIN #consultas medicas#
/******************************************************************************/

/******************************************************************************/
/** Funcion que controla la tabla master #historias medicas recientes#
/******************************************************************************/
/*
$(function() {
        //var $result = $('#events-result');

        $('#table-hce-recientes').bootstrapTable({
            onClickRow: function(row) {
                //alert(JSON.stringify(row.id_historia_medica));
                // cargamos la url base de nuestro sistema el cual esta en un campo oculto
                var url_site = $('#url_site').val();
                //obtnemos el ID del paciente
                var id_paciente = JSON.stringify(row.id_paciente);
                // creamos la url completa
                var url = url_site+'historiaMedica/paciente/'+id_paciente;
                //redireccionamos de pagina
                $(location).attr('href',url);
                
                //$result.text('Event: onClickRow, data: ' + JSON.stringify(row));
            },
            onSort: function(name, order) {
                //$result.text('Event: onSort, data: ' + name + ', ' + order);
            },
            onCheck: function(row) {
                //$result.text('Event: onCheck, data: ' + JSON.stringify(row));
            },
            onUncheck: function(row) {
                //$result.text('Event: onUncheck, data: ' + JSON.stringify(row));
            },
            onCheckAll: function() {
                $result.text('Event: onCheckAll');
            },
            onUncheckAll: function() {
                $result.text('Event: onUncheckAll');
            }
        });
    });
 */
/******************************************************************************/
/** FIN #historias medicas recientes#
/******************************************************************************/