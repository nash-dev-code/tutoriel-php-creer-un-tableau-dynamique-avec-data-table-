
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>company users</title>
    <script src="jquery.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.2/css/dataTables.bootstrap4.min.css">

    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <style>
        .container{
            width: 60%;
            margin-left: auto;
            margin-right: auto;
            margin-top: 100px;
        }
    </style>
</head>
<body>
    
<div class="container">
    <h1>DataTable PHP</h1><br>
    <table id="company_users" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>id</th>
                <th>nom</th>
                <th>prenom</th>
                <th>email</th>
                <th>téléphone</th>
                <th>action</th>
            </tr>
        </thead>
        
    </table>

</div>   
<script>

    $(document).ready(function(){
        $("#company_users").DataTable({
            "processing": true,
            "serverSide": true,
            "ajax": "server_processing.php"
        });    
    })

</script>

</body>
</html>