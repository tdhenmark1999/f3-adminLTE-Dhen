<?php

class Controller {

    protected $f3;
    protected $db;

    function __construct() {
        $f3 = Base::instance();
        $dbh = new PDO($f3->get('DB_DSN'), $f3->get('DB_USER'), $f3->get('DB_PASS'));
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->f3 = $f3;
        $this->db = $dbh;
    }

}