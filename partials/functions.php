<?php
    function getNewPassword($characters, $passwordLength) {
        $newPassword = '';

        for ($i=0; $i < $passwordLength; $i++) { 
            $randomNum = rand(1, strlen($characters));

            $newPassword .= $characters[$randomNum];
        }
    return $newPassword;
    }
?>