<?php
include 'connection.php';

if($_POST){
    //data
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    $response = []; //data response

    //username di dalam database
    $userQuery = $connection->prepare("SELECT * from t_track, t_armada where t_track.idt_armada=t_armada.idt_armada");
    $userQuery->execute(array($username));
    $query = $userQuery->fetch();

    if($userQuery->rowCount()== 0){
        $response['status']= false;
        $response['message']= "Username tidak terdaftar";
    } else{
        //ambil password di db
        $passwordDB = $query['password'];
        if(strcmp(md5($password),$passwordDB)=== 0){
            $response['status'] =true;
            $response['message']="Login berhasil";
            $response['data']=[
                'user_id' => $query['idt_track'],
                'username' => $query['username'],
            ];
        } else {
            $response['status'] = false;
            $response['message'] = "Password anda Salah";

        }
    }
    //jadaikan json
    $json = json_encode($response, JSON_PRETTY_PRINT);
    //print
    echo $json;

}
?>