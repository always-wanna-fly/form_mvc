<?php

use Classes\Form\ValidForm;

class RegisterController extends Controller{
    private $pageTpl = '/views/register_form.tpl.php';


    public function __construct()
    {
        $this->model = new RegisterModel();
        $this->view = new View();
    }

    public function index(){
        if(!$_SESSION['user']) {
            header("Location: /");
        }
        $this->pageData['success']=FALSE;




        $this->pageData['errors'] = [];
        $newUser = $_POST['form']['name'];
        $newLogin = $_POST['form']['login'];
        $newEmail = $_POST['form']['email'];
        $newPassword = md5($_POST['form']['password']);
        $passwordForEmail = $_POST['form']['password'];

        if (!ValidForm\ValidForm::checkName($newUser)) $this->pageData['errors']['error_name'] = "Ви не ввели ім'я, або заповнили поле некоректно";
        if (!ValidForm\ValidForm::checkLogin($newLogin))$this->pageData['errors']['error_login'] = "Не коректний login";
        if (!ValidForm\ValidForm::checkPassword($passwordForEmail))$this->pageData['errors']['error_password'] = "Не коректний password";
        if (!ValidForm\ValidForm::checkEmail($newEmail))$this->pageData['errors']['error_email'] = "Не коректний email";
        var_dump($this->pageData);

        if (count($this->pageData['errors']) === 0){
            if($this->model->addNewUser($newUser, $newLogin, $newEmail, $newPassword)) {
                echo "nice";

            }

            $this->pageData['success']=TRUE;
        }
        $this->view->render($this->pageTpl, $this->pageData);

//        if (!empty($_POST) && !empty($_POST['form']['name']) && !empty($_POST['form']['login']) && !empty($_POST['form']['email']) && !empty($_POST['form']['password'])) {
//            echo 'yep';
//            $newUser = $_POST['form']['name'];
//            $newLogin = $_POST['form']['login'];
//            $newEmail = $_POST['form']['email'];
//            $newPassword = md5($_POST['form']['password']);
//            $passwordForEmail = $_POST['form']['password'];
//            if($this->model->addNewUser($newUser, $newLogin, $newEmail, $newPassword)) {
//                echo "nice";
//
//            }
//        }

    }
    public function addNewUser()
    {

    }

}