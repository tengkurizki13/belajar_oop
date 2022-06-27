<?php 

require_once "Data/validationExseption.php";
require_once "Data/loginRequest.php";
require_once "validation.php";


$validation = new LoginRequest();
// $validation->username = "";
// $validation->password = "";

// try {

//     validationLoginRequest($validation);
// }catch(valisasiExseption $tangkap){
//     echo "error coy : {$tangkap->getMessage()} "; 
// }catch(Exception $tangkap){
//     echo "error coy : {$tangkap->getMessage()} "; 
// }

try {

    validationLoginRequest($validation);
}catch(valisasiExseption | Exception $tangkap){
    echo "error coy : {$tangkap->getMessage()} "; 
    // var_dump($tangkap->getTrace());
    var_dump($tangkap->getTraceAsString());
}finally{
    echo "error tetap dipanggil";
}