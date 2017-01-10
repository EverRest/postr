<?php

/**
 * Created by PhpStorm.
 * User: PROGRAMERIUA
 * Date: 09.01.2017
 * Time: 13:02
 */
    class Index extends Controller
    {
        public function __construct()
        {
            parent::__construct();
        }

        public function index() {
            $this->view->render('index/index');
        }

        public function details() {
            $this->view->render('index/index');
        }
    }