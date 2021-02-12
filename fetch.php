<?php>

include('database.php');
$query = "SELECT * FROM tb_texte";
$db = Database::connect();
$statement=$db->prepare($query);
$statement->execute();
$result = $statement->fetchAll();
$total_row = $statement->rowCount();

$output = '


';


    
?>