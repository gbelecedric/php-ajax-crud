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
        $req=$db->prepare('SELECT *  FROM tb_texte  WHERE id = ?');

        $req->execute([$_POST["id"]]);
        $result = $req->fetchAll();

		foreach($result as $row)
		{
			$output['first_name'] = $row['first_name'];
			$output['last_name'] = $row['last_name'];
		}
		echo json_encode($output);
    }
}

if ($_POST["action"] == "update")
{
    $db = Database::connect();
    $req=$db->prepare('UPDATE tb_texte SET first_name = ?, last_name=?  WHERE id = ?');

    $req->execute([$_POST["first_name"], $_POST["last_name"], $_POST["hidden_id"]]);
    

    echo'<p>Data Updating</p>';
}
}


?>
    
