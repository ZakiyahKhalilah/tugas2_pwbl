<?php

class Log extends Controller
{
    public function index()
    {
        $data['title'] = 'Login';

        $this->view('login/index', $data);

    }

    public function login()
    {
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        $data['login'] = $this->model('Log_model')->getUser($username, $password);
        
        session_start();
        if($data['login'] == NULL){
            header("Location: ".BASEURL."404");
        } else{
            foreach($data['login'] as $row ):
                $_SESSION['nama'] = $row['nama'];
                header("Location:" .BASEURL);
            endforeach;
        }
    }
}
