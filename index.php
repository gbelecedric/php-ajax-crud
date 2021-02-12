<!doctype html>
<html lang="fr">
<head>  
        <title>PHP Ajax Crud using JQuery UI Dialog Box</title>  
		<link rel="stylesheet" href="jquery-ui.css">
        <link rel="stylesheet" href="bootstrap.min.css" />
		<script src="jquery.min.js"></script>  
		<script src="jquery-ui.js"></script>
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
			success:function(data)
			{
				$('#user_data').html(data);
			}
		});
	}
    })
</script>