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
        echo'<p>Donnée Inserer</p>';
    }

    if ($_POST["action"] == "fetch_single")
    {
        $db = Database::connect();
        $req=$db->prepare('SELECT *  FROM tb_texte SET WHERE id =?');

        $req->execute($_POST["id"]]);
        $result = $req->fetch;

        $output['first_name'] = $result['first_name'];
        $output['last_name'] = $result['last_name'];


    echo json_decode($output);
    }
}

?>
    
