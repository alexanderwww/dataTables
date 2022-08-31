<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0" shrink>
    <title>Document</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!--    Datatables  -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.css"/>  
    <title></title>


</head>
<body>
    
    <div>
        <H1>Hello Work</H1>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <table id="tablaUsuarios" class="table-striped table-bordered" style="width: 100%;">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>User</th>
                            <th>FirstName</th>
                            <th>LastName</th>
                            <th>Gerder</th>
                            <th>Password</th>
                            <th>Status</th>
                        </tr>
                    </thead>

                    <tbody></tbody>
                
                </table>
            </div>
        </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
      
    <!--    Datatables-->
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.js"></script>  
    <script src="js/ajax.js"></script>
    <!-- <script>
        $(document).ready(function(){
    
        $('#tablaUsuarios').DataTable({
            'ajax':{
                'url':'conexionBDD/consulta.php',
                'dataSrc':''
            },
            'columns':
            [
                {'data':'user_id'},
                {'data':'user_name'},
                {'data':'user_firstname'},
                {'data':'user_lastname'},
                {'data':'user_gerder'},
                {'data':'user_password'},
                {'data':'user_status'},
            ]

        })

        })
    </script> -->
</body>
</html>