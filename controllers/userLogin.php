<?php
include_once 'C:\xampp\htdocs\HorseCare\conexao.php';

$response = [];

try {    
    if(empty($_POST['nome'])){
        throw new Exception("Informe o email");
    }

    if(empty($_POST['senha'])){
        throw new Exception("Informe a senha");
    }

    $query = "select * from registro";    
    $stmt = $db->prepare($query);
    $stmt->bind_param('s', $_POST['email']);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if($result->num_rows == 0){
        throw new Exception("Email não existe");
    }

    $user = $result->fetch_object();

    if(strcmp($_POST['senha'], $user->senha) !== 0){
        throw new Exception("Senha incorreta", $user->senha);
    }

    $_SESSION['userLogged'] = true;
    $_SESSION['userId'] = $user->id;
    $_SESSION['userName'] = $user->name;

    $response = [
        'status' => true,        
    ];
} catch (Exception $ex) {
    $response = [
        'status' => false,
        'message' => $ex->getMessage(),
    ];
}

echo json_encode($response);
