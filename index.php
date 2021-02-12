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
            <button type="button" name="add" id="add" class="btn btn-success btn-xs"> Add</button>
        </div>

        <div id="user_data" class="table-responsive">
             
        </div>
        
    </div>


    <div id="user_dialog" title="Add Data">
        <form method="post" id="user_form">
            <div class="form-group">
                <label for="first_name"> Enter first_name</label>
                <input type="texte" name="first_name" id="first_name" class="form-control" />
                <span id="error_first_name" class="text-danger"></span>
                
            </div>
            <div class="form-group">
                <label for="last_name"> Enter last_name</label>
                <input type="texte" name="last_name" id="last_name" class="form-control" />
                <span id="error_last_name" class="text-danger"></span>
                
            </div>
            <div class="form-group">
                
                <input type="hidden" name="action" id="action" value="Insert"  />
                <input type="hidden" name="hidden_id" id="hidden_id" />
                <input type="submit" name="form_action" id="form_action" value="Insert" />

                
            </div>
            
        </form>
            
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
		})
	}

    $('#user_dialog').dialog({
        autoOpen:false,
        width: 400
    })

    $('#add').click(function(){
        $('#user_dialog').attr('title','Add Data');
        $('#action').val('insert');
        $('#form_action').val("Insert");
        $('#user_dialog').dialog('open')

    })

    $('#user_form').on('submit',function(event){
        event.preventDefault();
        var error_first_name = '';
        var error_last_name = '';

        if ($('#first_name').val() == '')
        {
            error_first_name = "First Name is required"
            $('#error_first_name').text(error_first_name)
            $('#first_name').css('border-color' , '#cc0000')

        }
        else
        {
            error_first_name = " "
            $('#error_first_name').text(error_first_name)
            $('#first_name').css('border-color' , '')
        }
        if ($('#last_name').val() == '')
        {
            error_last_name = "Last Name is required"
            $('#error_last_name').text(error_last_name)
            $('#last_name').css('border-color' , '#cc0000')
        }
        else
        {
            error_last_name = " "
            $('#error_last_name').text(error_last_name)
            $('#last_name').css('border-color' , '')

        }

        if (error_first_name == '' || error_last_name == '' )
        {
             return false;
        }
        else
        {

            $('#form_action').attr('disabled','disabled');
            var form_data = $(this).serialize();
            $.ajax({
                url:"action.php",
                method:"POST",
                data:form_data,
                success:function(data)
                {
                    $('#user_dialog').dialog('close');
                }
            })

        }


    });

    })
</script>