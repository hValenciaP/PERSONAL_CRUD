var tabla;

function init(){

}

$(document).ready(function(){
    tabla=$('#ugel_data').dataTable(
        {
            "aProcessing": true, //Activamos el procesamiento del datatables
            "aServerSide": true, // Pagimnación y filtrado realizados por el servidor
            dom: 'Bfrtip', //Definimos los elementos del control de tabla
            buttons:[
                    'copyHtml5',
                    'excelHtml5',
                    'csvHtml5',
                    'pdf'
                    ],
             "ajax":{
                url: '../../controller/producto.php?op=listar',
                type : "get",
                dataType : "json",
                error: function(e){
                    console.log(e.responseText);
                }
             },
             "bDestroy": true,
             "responsive": true,
             "bInfo" : true,
             "iDisplayLength": 20, // por cada 10 registro hace una paginación
             "order" : [[ 0, "asc"]], //ordenar (columna, orden)
             "language": {
                "sProcessing":      "Procesando...",
                "sLengthMenu":      "Mostrar _MENU_ registros",
                "sZeroRecords":     "No se encontraron resultados",
                "sEmptyTable":      "Ningúm dato disponible en esta tabla",
                "sInfo":            "Mostrando un total de _TOTAL_ registros",
                "sInfoEmpty":       "Mostrando un total de 0 registros",
                "sInfoFiltered":    "(filtrado de un total de _MAX_ registros)",
                "sInfoPostFix":     "",
                "sSearch":          "Buscar:",
                "sUrl":             "",
                "sInfoThousands":   ",",
                "sLoadingRecords":  "Cargando...",
                "oPaginate":  {
                    "sFirst":       "Primero",
                    "sLast":        "Último",
                    "sNext":        "Siguiente",
                    "sPrevious":    "Anterior"
                },
                "oAria":    {
                    "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
                    "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                }
             }
        }).Datatable();
})

init();