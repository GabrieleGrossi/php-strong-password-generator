<?php
    $pswLength = $_GET["pswLength"];
    $charactersList = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789!";

    function generatePsw($length, $characters) {
        $password= [];
        $availableChar= strlen($characters);

        if(empty($length) || !is_numeric($length)){
            return false;
        }else{
            for($i = 0; $i < $length; $i++){
                $randomNumber = rand(0, $availableChar);
                
                array_push($password, $characters[$randomNumber]);
            }
    
            return implode($password);
        }
    }
    $generatedPassword = generatePsw($pswLength, $charactersList);
?>