<?php
session_start();
if (isset($_POST["login"])){ 
 $username =  $_POST["username"];
 $password = $_POST["password"];
  
    if ($username && $password){

    
    //  assign var file e.g. file(task/$username.txt);
    $file = file("task/$username.txt");
    // var_dump ($file); exit;
    if ($file== false){
        echo "invalid input";
    } else {
        //use foreach loop to ascertain var username and var password
        
        foreach ($file as $value){
            
            if(strpos($value, $username) !== false){
                
            }
                if (strpos($value, $password) !== false);{
                    
            }
        }  if(strpos($value, $username) !== false
                && strpos($value, $password) !== false){
                print_r ("user has sucessfully logged in");
                $_session["username"] = "$username";
                 $_session["password"] = "$password";
            } else {
                print_r ("username or password is incorrect");
            }
                 
    }
    // if username and password exist in the username file, welcome user
     // otherwise decline login details

    } elseif (empty($username) || empty($password)){
     echo "username and password required";
    } else {
     echo "error occured";
 }
}
// save username and password into session for log in 
// delete username and password from session for log out
?>