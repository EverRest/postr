<?php
class Login extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->view->js = array('login/js/custom.js');
    }

    public function index()
    {
        $this->view->render('login/index');
    }

    public function run()
    {
        $this->model->run();
    }
}
?>