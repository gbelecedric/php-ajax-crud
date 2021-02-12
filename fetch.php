<?php>

include('database.php');
$query = "SELECT * FROM tb_texte";
$db = Database::connect();
$statement=$db->prepare($query);
$statement->execute();
$result = $statement->fetchAll();
$total_row = $statement->rowCount();

$output = '
    <table class="table table-striped table-bordered">

    
        <tr>
            <th> First Name</th>
            <th > Last Name</th>
            <th > Edit</th>
            <th > Delete</th>

        </tr>

   

';

if($total_row > 0)
{
   foreach ($result as $row) {
       # code...
$output .= '

    <tr>
    <td> '.row["fist_name"].'</td>
    <td> '.row["last_name"].'</td>
    <td>
        <button type="button" name="edit" class="btn btn-primary 
        btn-xs edit" id ="'.$row["id"].'">Edit
        </button>
    </td>
    <td > 
    <button type="button" name="delete" class="btn btn-danger 
    btn-xs delete" id ="'.$row["id"].'">Delete
    </button>
    
    </td>

    </tr>
';
   }
}
 else
 {
    $output .= '
    <tr>
        <td colspan="4" align="center">Data not found </td>
    </tr>
    ';


 }   

$output .= ' </table>';

echo $output;

?>