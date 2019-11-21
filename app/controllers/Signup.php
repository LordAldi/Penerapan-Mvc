<?php 

class Signup extends Controller{
    public function index(){
        $data['judul']='signup';
        $this->view('templates/header',$data);
		$this->view('signup/index',$data);
		$this->view('templates/footer');
    }
    public function daftar(){
        if($this->model('Signup_model')->tambahAkun($_POST)>0){
            Flasher::setFlash('berhasil','ditambahkan','success');
            header('Location: '. BASEURL .'/signup');
            exit;
        }
        else{
            Flasher::setFlash('gagal','ditambahkan','warning');
            header('Location: '. BASEURL .'/signup');
            exit;
        }
    }

    public function login(){
        
        $data['judul']='Login';
        $this->view('templates/header',$data);
		$this->view('signup/login',$data);
		$this->view('templates/footer');
    }
    public function cekLogin(){
        if($login = $this->model('Signup_model')->cekAkun($_POST) ){
            $_SESSION['username']=$_POST['username_lg'];
            $_SESSION['password']=$_POST['password_lg'];
            Flasher::setFlash('berhasil','login','success');
            header('Location: '. BASEURL .'/home');
            exit;
        }
        else{
            Flasher::setFlash('gagal ','login','warning');
            header('Location: '. BASEURL .'/signup/login');
            exit;
        }
    }
}