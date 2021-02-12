<?php

require 'database.php';
$db = Database::connect();

if (isset($_POST["action"]))
{
    if ($_POST["action"] == "insert")
    {
        $db = Database::connect();
        $req=$db->prepare('INSERT INTO tb_texte SET first_name= ? , last_name= ?');

        $req->execute([$_POST["first_name"],$_POST["last_name"]]);
        echo'<p>Donnée Inserer</p>'
    }
}

?>
    
