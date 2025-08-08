<?php

class AccountController extends Controller {

    public function signout() {
        $this->f3->clear('SESSION');
        $this->f3->reroute('/');
    }

    public function signin() {
        $email = $this->f3->get('POST.email');
        $password = $this->f3->get('POST.password');

        if (empty($email) || empty($password)) {
            $this->f3->set('email', $email);
            $this->f3->set('errors', array(array('Email and password are required')));
            $this->f3->set('site', 'Demo Test Site');
            $this->f3->set('BASE', '');
            echo Template::instance()->render('index.html');
            return;
        }

        $pwd = md5($password);
        
        try {
            $query = "SELECT * FROM accounts WHERE email = :email AND password = :password";
            $stmt = $this->db->prepare($query);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':password', $pwd);
            $stmt->execute();
            $acc = $stmt->fetch(PDO::FETCH_ASSOC);
            
            if ($acc) {
                $this->f3->set('SESSION.acc', $acc);
                
                $updateQuery = "UPDATE accounts SET lastlogin = NOW() WHERE id = :id";
                $updateStmt = $this->db->prepare($updateQuery);
                $updateStmt->bindParam(':id', $acc['id']);
                $updateStmt->execute();
                
                $this->f3->reroute('/dashboard');
            } else {
                $this->f3->set('email', $email);
                $this->f3->set('errors', array(array('Login failed, wrong username or password')));
                $this->f3->set('site', 'Demo Test Site');
                $this->f3->set('BASE', '');
                echo Template::instance()->render('index.html');
            }
        } catch (Exception $e) {
            $this->f3->set('email', $email);
            $this->f3->set('errors', array(array('Database error: ' . $e->getMessage())));
            $this->f3->set('site', 'Demo Test Site');
            $this->f3->set('BASE', '');
            echo Template::instance()->render('index.html');
        }
    }

}