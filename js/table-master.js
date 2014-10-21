/***********************************************************************/
/*
 * @Libreria que controla las #TABLAS MASTER# utilizadas en la
 * historia medica del paciente.
 * @pagina: historiaMedica.php
 * @Fecha Creacion: 20-10-2014
 * @Autor: Cristian Vidal
/***********************************************************************/


/***********************************************************************/
/** funcion que controla la tabla master "antecedentes familiares"
/***********************************************************************/
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
    // init table use data
    $table = $('#table-ant_fam').bootstrapTable();
    
    /*$('#get-selections').click(function() {
        alert('Selected values: ' + JSON.stringify($table.bootstrapTable('getSelections')));
    });*/
    
    /** funcion que permite refrescar la tabla ***/
    $('#load-data, #append-data, #check-all, #uncheck-all, ' +
            '#show-loading, #hide-loading, #refreshAntFam').click(function() {
        $table.bootstrapTable($(this).data('method'), getRows());
    });
    
    /*$('#merge-cells').click(function() {
        $table.bootstrapTable('mergeCells', {
            index: 1,
            field: 'name',
            colspan: 2,
            rowspan: 3
        })
    });*/
});
/** FIN TABLA ANTECEDENTES FAMILIARES **/


/***********************************************************************/
/** funcion que controla la tabla master antecedentes morbidos 
/***********************************************************************/
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
    // init table use data
    $table = $('#table-ant-morbidos').bootstrapTable();
    
    /** funcion que permite refrescar la tabla ***/
    $('#load-data, #append-data, #check-all, #uncheck-all, ' +
            '#show-loading, #hide-loading, #refreshAntMorbido').click(function() {
        $table.bootstrapTable($(this).data('method'), getRows());
    });
});