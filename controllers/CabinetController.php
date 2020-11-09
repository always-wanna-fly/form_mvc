<?php

class CabinetController extends Controller{

    private $pageTpl = '/views/cabinet.tpl.php';

    public function __construct()
    {
        $this->model = new CabinetModel();
        $this->view = new View();
    }
    public function index(){
        if (!$_SESSION['user']){
            header("Location: /");
        }


        $this->pageData['title'] = "Кабінет";

        $productsCount = $this->model->getProductsCount();
        $this->pageData['productsCount'] = $productsCount;

        $products = $this->model->getProducts();
        $this->pageData['products'] = $products;

        $this->view->render($this->pageTpl, $this->pageData);
    }
    public function logout(){
        session_destroy();
        header("location: /");
    }

}