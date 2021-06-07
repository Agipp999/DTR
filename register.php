<?php
include 'connection.php';

if($_POST){
    //data
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);

    $response = []; //data response

    //username di dalam database
    $userQuery = $connection->prepare("SELECT * FROM t_user where username - ?");
    $userQuery->execute(array($username));
   
    //cek usrnme apa ada
    if($userQuery->rowCount() != 0){
        $response['status']= false;
        $response['message']= "Akun Sudah Digunakan";
    } else{

        $insertAccount = "INSERT INTO t_user (username, password, name) values (:username, :password, :name)";
        $statement = $connection->prepare($insertAccount);

        try {
            //elsekusi
            $statement->execute([
                ":username" => $username,
                ":password" => md5($password),
                ":name" => $name
            ]);
        
            $response['status'] = true;
            $response['message'] = "Akun Berhasil Terdaftar";
            $response['data'] = [
                "username" => $username,
                "name" => $name
            ];
        } catch(Exception $e){
            die($e->getMessage());
        }
    }
    //jadaikan json
    $json = json_encode($response, JSON_PRETTY_PRINT);
    //print
    echo $json;

}
?>