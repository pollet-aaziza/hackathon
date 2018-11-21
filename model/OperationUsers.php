<?php 
//function that adds the user
function addUser($user, $db) {
    $query = $db->prepare("INSERT INTO Users (Status, Nom, Prenom, Adresse_mail, Rue, Ville, Code_postal, Identifiant_emploi, Sexe) VALUES(:Status, :Nom, :Prenom, :Adresse_mail, :Rue, :Ville, :Code_postal, :Identifiant_emploi, :Sexe)");
    $query->execute([
        "Status" => $user["user_status"] ,
        "Nom" => $user["user_name"],
        "Prenom" => $user["user_firstname"],
        "Adresse_mail" => $user["user_mail"],
        "Rue" => $user["user_street"],
        "Ville" => $user["user_city"],
        "Code_postal" => $user["user_postalcode"],
        "Identifiant_emploi" => $user["user_jobID"],
        "Sexe" => $user["user_sexe"]
    ]);
}
//function that modifies the user
function updateUser($user, $db) {
    $query = $db->prepare("UPDATE Users SET Status = :Status, Nom = :Nom, Prenom = :Prenom, Adresse_mail = :Adresse_mail, Rue = :Rue, Ville = :Ville, Code_postal = :Code_postal, Identifiant_emploi = :Identifiant_emploi, Sexe = :Sexe");
    $query->execute([
        "Status" => $user["user_status"] ,
        "Nom" => $user["user_name"],
        "Prenom" => $user["user_firstname"],
        "Adresse_mail" => $user["user_mail"],
        "Rue" => $user["user_street"],
        "Ville" => $user["user_city"],
        "Code_postal" => $user["user_postalcode"],
        "Identifiant_emploi" => $user["user_jobID"],
        "Sexe" => $user["user_sexe"]
    ]);
}
//function that removes the user
function deleteUser($user, $db) {
    $query = $db->prepare("DELETE FROM Users WHERE Users_ID = ?");
    $query->execute(["Users_ID" => $user[""]]);
}
?>