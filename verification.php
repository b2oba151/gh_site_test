<?php
// Récupérer les données envoyées depuis le formulaire
$data = json_decode(file_get_contents("php://input"));

// Vérifier les informations d'authentification
if ($data->username === "test" && $data->password === "password" && $data->role === "admin") {
    // Si l'authentification réussit, renvoyer une réponse JSON avec un succès
    echo json_encode(array("success" => true));
} else {
    // Si l'authentification échoue, renvoyer une réponse JSON avec un échec
    echo json_encode(array("success" => false));
}
?>
