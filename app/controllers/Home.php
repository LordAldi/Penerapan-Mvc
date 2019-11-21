<?php

class Home extends Controller{
	public function index() {
		$data['judul']='Beranda';
		$this->model('User_model')->cekSession();
		$data['dUser']=$this->model('User_model')->getDataMahasiswa();
		
		
		$this->view('templates/header',$data);
		$this->view('templates/menu',$data);
		$this->view('home/index',$data);
		$this->view('templates/footer');
	}
	public function print(){
		$data['judul']='Print';
		$this->model('User_model')->cekSession();
		$data['dUser']=$this->model('User_model')->getDataMahasiswa();
		$data['dNilai']=$this->model('User_model')->getDataNilai($data['dUser']['nim']);
		
		$this->view('templates/header',$data);
		$this->view('templates/menu',$data);
		$this->view('home/print',$data);
		$this->view('templates/footer');
	}
	public function logout(){
		$this->model('User_model')->logOut();
	}
	public function input(){
		$data['judul']='Print';
		$this->model('User_model')->cekSession();
		$data['dUser']=$this->model('User_model')->getDataMahasiswa();
		$data['dNilai']=$this->model('User_model')->getDataNilai($data['dUser']['nim']);
		
		$this->view('templates/header',$data);
		$this->view('templates/menu',$data);
		$this->view('home/input',$data);
		$this->view('templates/footer');
	}
	public function hitungNilai(){
		$this->model('User_model')->cekSession();
		$data['dUser']=$this->model('User_model')->getDataMahasiswa();
		$this->model('User_model')->masukanNilai($_POST,$data['dUser']['nim']);
		$this->model('User_model')->hitungIpk($data['dUser']['nim']);
	}
	public function edit($idx){
		$data['judul']='editS';
		$data['idx']=$idx;
		$this->model('User_model')->cekSession();
		$data['dUser']=$this->model('User_model')->getDataMahasiswa();
		$data['dNilaiE']=$this->model('User_model')->getDataEdit($idx);
		$this->view('templates/header',$data);
		$this->view('home/edit',$data);
		$this->view('templates/footer');
	}
	public function editData($idx,$nim){
		$this->model('User_model')->doEditData($_POST,$idx);
		$this->model('User_model')->hitungIpk($nim);
	}
	public function delete($idx,$nim){
		$this->model('User_model')->doDeleteData($idx);
		$this->model('User_model')->hitungIpk($nim);
	}
}