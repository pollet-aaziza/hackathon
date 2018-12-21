<?php 
//Récupère les données de tous les utilisateurs
function getUsers() {
    $db = getDataBase();
    $request = $db->query('SELECT * FROM users');
    $result = $request->fetchall(PDO::FETCH_ASSOC);
    $request->closeCursor();
    return $result;
}
//Récupère les données d'un utilisateur
function getUser($id) {
    $db = getDataBase();
    $request = $db->prepare("SELECT * FROM users WHERE user_id = ?");
    $request->execute([$id]);
    $result = $request->fetch(PDO::FETCH_ASSOC);
    $request->closeCursor();
    return $result;
}
//Récupère les données d'un utilisateur en fonction de son nom
function getUserByName($userName) {
    $db = getDataBase();
    $request = $db->prepare("SELECT * FROM users WHERE name = ?");
    $request->execute([$userName]);
    $result = $request->fetch(PDO::FETCH_ASSOC);
    $request->closeCursor();
    return $result;
}
//function that adds the user
function addUser($user) {
    $db = getDataBase();
    $request = $db->prepare("INSERT INTO users (status, name, firstname, password, password_verif, mail, street, city, pc, id_pole_emploi, sex) VALUES(status, name, firstname, password, password_verif, mail, street, city, pc, id_pole_emploi, sex)");
    $request->execute([
        "status" => $user["user_status"] ,
        "name" => $user["user_name"],
        "firstname" => $user["user_firstname"],
        "password" => $user["user_password"],
        "password_verif" => $user["user_password2"],
        "mail" => $user["user_mail"],
        "street" => $user["user_street"],
        "city" => $user["user_city"],
        "pc" => $user["user_postalcode"],
        "id_pole_emploi" => $user["user_jobID"],
        "sex" => $user["user_sexe"]
    ]); 
    $result = $request->fetchall(PDO::FETCH_ASSOC);
    $request->closeCursor();   
    return $result;
}
//function that modifies the user
function updateUser($user, $id) {
    $db = getDataBase();
    $request = $db->prepare("UPDATE users SET status = :status, name = :name, firstname = :firstname, password = :password, password_verif = :password_verif, mail = :mail, street = :street, city = :city, pc = :pc, id_pole_emploi = :id_pole_emploi, sex = :sex WHERE user_id = :user_id");
    $request->execute([
        "status" => $user["user_status"] ,
        "name" => $user["user_name"],
        "firstname" => $user["user_firstname"],
        "password" => $user["user_password"],
        "password_verif" => $user["user_password2"],
        "mail" => $user["user_mail"],
        "street" => $user["user_street"],
        "city" => $user["user_city"],
        "pc" => $user["user_postalcode"],
        "id_pole_emploi" => $user["user_jobID"],
        "sex" => $user["user_sexe"],
        "user_id" => $id
    ]);
    $result = $request->fetchall(PDO::FETCH_ASSOC);
    $request->closeCursor();
    return $result;
}
//function that removes the user
function deleteUser($id) {
    $db = getDataBase();
    $request = $db->prepare("DELETE FROM users WHERE user_id = ?");
    $request->execute([$id]);
    $result = $request->fetch(PDO::FETCH_ASSOC);
    $request->closeCursor();
    return $result;
}