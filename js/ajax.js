$(document).ready(function() {
    $('#tablaUsuarios').DataTable( {
      "ajax":{
          "url":"conexionBDD/consulta.php",
          "dataSrc":""
      },
      "columns":[
          {"data":"user_id"},
          {"data":"user_name"},
          {"data":"user_firstname"},
          {"data":"user_lastname"},
      ]  
    });
});
