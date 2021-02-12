<?php

require 'database.php';
$db = Database::connect();

if (isset($_POST["action"]))
{
    if ($_POST["action"] == "insert")
    {
        $db = Database::connect();
        $req=$db->prepare('INSERT INTO utilisateur SET nom= ? , mot_de_pass= ? , email= ?,prenom= ? , phone=?');
        $password=password_hash($password,PASSWORD_BCRYPT);
        $req->execute([$nom ,$password,  $email, $prenom, $contact,]);
    }
}

?>
    
