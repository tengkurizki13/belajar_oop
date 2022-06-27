<?php 


function validationLoginRequest(LoginRequest $loginRequest){

    if(!isset($loginRequest->username)) {
        throw new valisasiExseption("username is null");
    }
    else if(!isset($loginRequest->password)) {
        throw new valisasiExseption("password is null");
    }
    else if(trim($loginRequest->username) == "") {
        throw new Exception("username is empty");
    }else if(trim($loginRequest->password) == "") {
        throw new Exception("password is empty");
    }


}
