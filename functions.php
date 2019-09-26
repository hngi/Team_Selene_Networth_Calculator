<?php
    function register_user($name, $email, $password){
    $array = array("email" => $email, "password" => password_hash($password, PASSWORD_DEFAULT), "name" => $name);
        //declaring the data.json where user data will be stored     
        $filetxt ="data.json";
        //declaring an empty array
        $arr_data   = [];
        //fetching existing data from data.json
        $json_data  = file_get_contents($filetxt);
        //decoding/converting the json object to php array string from data.json
        $arr_data   = json_decode($json_data, true);
        //append the array with new form data
        $arr_data[] = $array;
        //decoding/converting php array string  to json object 
        $json_data  = json_encode($arr_data);
        //storing the final data into data.json     
        if(!file_put_contents($filetxt, $json_data)){
            return false;
        }
        return true;
    }
    
    function login($email, $password){
        $json_data   =  file_get_contents("data.json");
        $decode_data =  json_decode($json_data,true);
        foreach ($decode_data as $user) {
            if($user['email'] == $email){
                if (password_verify($password, $user['password'])) {
                    return true;
                }
            }
        }
    }

    function user_exists($email){
        //get users data from data.json
        if (!json_decode(file_get_contents("data.json"))){
            return false;
        }else{
        $json_data = file_get_contents("data.json");
        //decoding the data from json to php array
        $character = json_decode($json_data,true);
        foreach ($character as $user) {
            if ($user['email'] == $email) {
                return true;
            }
        }
        } 
    }

?>