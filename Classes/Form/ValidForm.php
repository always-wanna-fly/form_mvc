<?php
namespace Classes\Form\ValidForm;

//use PHPMailer\PHPMailer\PHPMailer;
//use PHPMailer\PHPMailer\SMTP;
//use PHPMailer\PHPMailer\Exception;

//require_once "vendor/autoload.php";

class ValidForm{


    public function checkName($name)
    {
        if (strlen(is_string($name)) >= 2) return true;
        else return false;
    }
    public function checkLogin($login)
    {
        if (strlen(is_string($login)) >= 2) return true;
        else return false;
    }
    public function checkPassword($password)
    {
        if (strlen(is_string($password)) >= 2) return true;
        else return false;
    }
    public function checkEmail($email)
    {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) return true;
        else return false;
    }
//    public function checkAge($age)
//    {
//        if (filter_var($age, FILTER_VALIDATE_INT)) return true;
//        else return false;
//    }
//    public function checkGender($gender)
//    {
//        if (!empty($gender)) return true;
//        else return false;
//    }
//    public function checkMessage($message)
//    {
//        if (strlen($message) >= 20) return true;
//        else return false;
//    }
//    public function checkFile($file)
//    {
//        if (!empty($file)) return true;
//        else return false;
//    }



}