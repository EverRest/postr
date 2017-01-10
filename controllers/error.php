<?php
class Error extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->view->msg = "Error 404 : Page not found.";
        $this->view->render('error/index');
    }
}
?>