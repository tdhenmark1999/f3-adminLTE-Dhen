<?php

class HomeController extends Controller {

    public function index() {
        $this->f3->set('site', 'Demo Test Site');
        $this->f3->set('BASE', '');
        $this->f3->set('errors', null);
        $this->f3->set('email', '');
        
        echo Template::instance()->render('index.html');
    }

}