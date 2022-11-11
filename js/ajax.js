<<<<<<< HEAD

function initTable(){

    $("#tablaUsuarios").DataTable({
        "ajax":{
            "url":"conexionBDD/consulta.php",
            'dataSrc': ''
        },
        'columns':[
            {data:"id"},
            {data:"name"},
            {data:"idUser"},
        ],
        "initComplete": function() {
            ocultar();
        }
    

    })

    

}




initTable();



$('th').click(function() {
    $(this).hide();

    let indiceColumna = $(this).parent().children().index(this);

    console.log(indiceColumna )
    $(`table td:nth-child(2)`).hide();
});

function ocultar(){

    $('#ocultar').hide()
    $(`table td:nth-child(2)`).hide();

}

