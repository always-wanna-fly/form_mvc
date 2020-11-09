<?php


class IndexController extends  Controller
{
    private $pageTpl = '/views/main.tpl.php';

    public function __construct()
    {
        $this->model = new IndexModel();
        $this->view = new View();
    }
    public function index(){
        $this->pageData['title'] = "Вхід в особистий кабінет";
        if (!empty($_POST)){
            if(!$this->login()){
                $this->pageData['error'] = "Невірний логін або пароль";
            }
        }
        $this->view->render($this->pageTpl, $this->pageData);

    }

    public function login(){
        if (!$this->model->checkUser()){
            return false;
        }
    }

}