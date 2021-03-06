<?php
class Dashboard extends Controller
{
    public function __construct()
    {
        parent::__construct();
        Session::init();
        $logged = Session::get('loggedIn');
//        if($logged == false) {
//            Session::destroy();
//            header('Location: ../login');
//            exit();
//        }
        $this->view->js = array('dashboard/js/custom.js');
    }

    public function index()
    {
        $_SESSION['secure'] = Captcha::generation();
        $this->view->render('dashboard/index');
    }

    public function moderate()
    {
        $data = $this->model->xhrGetListings();
        $this->view->msg = $data;
        $this->view->render('dashboard/moderation');
    }

    public function all()
    {
        $data = $this->model->xhrGetListings();
        $this->view->msg = $data;
        $this->view->render('dashboard/list');
    }

    public function xhrInsert() {
        $this->model->xhrInsert();
        header('Location: ../dashboard/all');
    }

    public function xhrGetListings() {
        $this->model->xhrGetListings();
    }

    public function xhrGetNoteById()
    {
        $this->model->xhrGetNoteById();
    }

    public function xhrDeleteListing() {
        $this->model->xhrDeleteListing();
    }

    public function xhrEditListing()
    {
        $this->model->xhrEditListing();
        header('Location: ../dashboard/moderate');
    }

    public function logout()
    {
        Session::destroy();
        header('Location: ../login');
        exit();
    }

}