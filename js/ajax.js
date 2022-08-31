$(document).ready(function(){
    
    $("#tablaUsuarios").DataTable({
        "ajax":{
            "url":"conexionBDD/consulta.php",
        },
        "columns":
        [
            {"data":"user_id"},
            {"data":"user_name"},
            {"data":"user_firstname"},
            {"data":"user_lastname"},
            {"data":"user_gerder"},
            {"data":"user_password"},
            {"data":"user_status"},
        ]

    })

})