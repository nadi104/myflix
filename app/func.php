<?php

    function mysqlConnect(){

        $db_username = 'root';    
        $db_password = 'Ashdundee2022@';        
        $db_name = 'myflix';       
        $db_host = 'localhost:3306';
        
        
        
        $mysqli = new mysqli($db_host, $db_username, $db_password,$db_name);                        
        
        if ($mysqli->connect_error) {
        
            die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
        
        }
    echo "Connection sucessfull!";
        return $mysqli;
        
    }

    function insertSignup($user_email,$user_pwd,$user_sts){

    date_default_timezone_set('Europe/London');

    $u_date = date('Y-m-d');

    $time_stamp = date('Y-m-d h:i:s a');

    $mysqli = mysqlConnect();

    $stmt = $mysqli->prepare("INSERT INTO user(user_email,user_pwd,user_sts,u_date,time_stamp)"

        . " VALUES (?, ?, ?, ?, ?)");

    $stmt->bind_param("sssss",$user_email,$user_pwd,$user_sts,$u_date,$time_stamp);

    $stmt->execute();

    $stmt->close();

    $mysqli->close();

}



function searchAllUser($sts) {

    $mysqli = mysqlConnect();

    $sql_new = mysqli_query($mysqli, "SELECT * FROM user ");

    while ($row_new = mysqli_fetch_assoc($sql_new)) {

   

        $rslt [] = $row_new;

    }

   

    return $rslt;

    }
    function searchUser($email,$usr_pwd) {
        $mysqli = mysqlConnect();
        $sql_new = mysqli_query($mysqli, "SELECT user_email,user_pwd FROM user WHERE user_email='$email' AND user_pwd='$usr_pwd'");
        while ($row_new = mysqli_fetch_assoc($sql_new)) {
        
            $rslt []= $row_new;
        }
        
        return $rslt;
    }

    function mongoViewvideos(){
        $curl = curl_init();
        
        curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://data.mongodb-api.com/app/data-fgyjz/endpoint/data/v1/action/find',
          
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'POST',
          CURLOPT_POSTFIELDS =>'{
            "dataSource": "myflix-cluster",
              "database": "myFlix",
              "collection": "filmlist",
              "filter": { }
          }',
          CURLOPT_HTTPHEADER => array(
            'Content-Type: application/json',
            'Access-Control-Request-Headers: *',
            'api-key:l3e8Y5GWivpVkFgZkFJYpGkwTR5zC5DX3loazdxKoKx4ukEfOEr6LTr0tBS5MfNd',
            'Accept: application/json'
          ),
        ));
        
        $response = curl_exec($curl);
        
        curl_close($curl);
        $json = json_decode($response);
        $doc = $json->documents;
        
        return $doc;
        }

?>