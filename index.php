<!doctype html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js" integrity="sha512-uto9mlQzrs59VwILcLiRYeLKPPbS/bT71da/OEBYEwcdNUk8jYIy+D176RYoop1Da+f9mvkYrmj5MCLZWEtQuA==" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <title>PHP AJAX CRUD </title>
  </head>
  <body>
   
    <div class="container">
        <br>
        <h3 align="center"> PHP Ajax Crud </h3><br><br>
        <div align="right" style="margin-bottom:5px;" >
            
        </div>
        <div id="user_data" class="table-responsive">
             
        </div>
        
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   
  </body>
</html>

<script>
    $(document).ready(function(){
        load_data();
        function load_data()
        {
            $.ajax({
                url:"fetch.php",
                method:"POST",
                success:function(data){
                    $('#user_data').html(data);
                }
            })
        }
    })
</script>