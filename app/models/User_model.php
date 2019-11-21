<?php
class User_model{
    private $table ='mahasiswa';
    private $db;

    public function __construct(){
        $this->db = new Database;
    }
    private $nama ='aldi';

    public function getUser(){
        return $this->nama;
    }
    public function getAllMahasiswa(){
        $this->db->query('select * from mahasiswa');
        return $this->db->resultSet();
    }
    public function cekSession(){
        if(!(isset($_SESSION['username']) and ($_SESSION['password']))){
            header('Location: '. BASEURL .'/signup/login');exit;
        }
        else{
            $username_lg = $_SESSION['username'];
            $password_lg = $_SESSION['password'];
            $query= "select * from mahasiswa where username = '$username_lg' and password = '$password_lg'";
            $this->db->query($query);
        }
    }
    public function getDataMahasiswa(){
        $username_lg = $_SESSION['username'];
        $password_lg = $_SESSION['password'];
        $query = "select * from mahasiswa where username = '$username_lg' and password = '$password_lg'";
        $this->db->query($query);
        return  $this->db->single();
    }
    public function logOut(){
            session_unset();
            session_destroy();
            Flasher::setFlash('Berhasil','LogOut','success');
            header('Location: '. BASEURL .'/signup/login');
            exit;
    }
    public function getDataNilai($nim){
        $username_lg = $_SESSION['username'];
        $password_lg = $_SESSION['password'];
        $query = "SELECT mk,nilai,idx FROM khs where nim = '$nim' ";
        $this->db->query($query);
        return  $this->db->resultSet();
    }
    public function masukanNilai($POST,$nim){
        $mk=array();   
            if($POST['mk1']!=""){
                $mk[]=$POST['mk1'];
                $nilai[]=$POST['nilai1'];
            }
            if($POST['mk2']!=""){
                $mk[]=$POST['mk2'];
                $nilai[]=$POST['nilai2'];

            }
            if($POST['mk3']!=""){
                $mk[]=$POST['mk3'];
                $nilai[]=$POST['nilai3'];
            } 
            if($POST['mk4']!=""){
                $mk[]=$POST['mk4'];
                $nilai[]=$POST['nilai4'];
            } 
            if($POST['mk5']!=""){
                $mk[]=$POST['mk5'];
                $nilai[]=$POST['nilai5'];
            } 
            if($POST['mk6']!=""){
                $mk[]=$POST['mk6'];
                $nilai[]=$POST['nilai6'];
            } 
            if($POST['mk7']!=""){
                $mk[]=$POST['mk7'];
                $nilai[]=$POST['nilai7'];
            } 
            if($POST['mk8']!=""){
                $mk[]=$POST['mk8'];
                $nilai[]=$POST['nilai8'];
            } 
            if($POST['mk9']!=""){
                $mk[]=$POST['mk9'];
                $nilai[]=$POST['nilai9'];
            } 
            if($POST['mk10']!=""){
                $mk[]=$POST['mk10'];
                $nilai[]=$POST['nilai10'];
            }     
            $total=0;
            for ($i=0; $i < count($mk) ; $i++){
                if($nilai[$i]>85){
                    $nilai[$i]='A';
                    
                }
                else if($nilai[$i]>70){
                    $nilai[$i]='B';
                    
                }
                else if($nilai[$i]>55){
                    $nilai[$i]='C';
                    
                }
                else if($nilai[$i]>40){
                    $nilai[$i]='D';
                
                }
                else {
                    $nilai[$i]='E';
                    
                }
            }
            for ($i=0; $i < count($mk) ; $i++){
                $query= "INSERT INTO khs (nim,mk,nilai) VALUES ('$nim','$mk[$i]','$nilai[$i]')";
                $this->db->query($query);
                $this->db->execute();
                }    
    }
    public function hitungIpk($nim){
        $query = "SELECT mk,nilai,idx FROM khs where nim = '$nim' ";
        $this->db->query($query);
        $dNilai=$this->db->resultSet();
            foreach($dNilai as $dNilai){
                switch ($dNilai['nilai']){
                    case 'A':
                    $jumlah[]=4;
                    
                    break;
                    case 'B':
                    $jumlah[]=3;
                    break;
                    case 'C':
                    $jumlah[]=2;
                    break;
                    case 'D':
                    $jumlah[]=1;
                    break;
                    case 'E':
                    $jumlah[]=0;
                    break;
                }
            }
            $total=0;

            for ($i=0; $i < count($jumlah) ; $i++){
                $total=$total+$jumlah[$i];
            }
            if(count($jumlah)>0){

            $IP=$total/count($jumlah);
            $query= "UPDATE mahasiswa SET ipk=$IP WHERE nim=$nim";
            $this->db->query($query);
            $this->db->execute();
            }
            header('Location: '. BASEURL .'/home/print');exit;
    }
    public function getDataEdit($idx){
        $query = "SELECT mk,nilai FROM khs where idx = '$idx' ";
        $this->db->query($query);
        return  $this->db->single();
    }
    public function doEditData($edit,$idx){
        $edit_mk=$edit['edit_mk'];
        $edit_n=$edit['edit_nilai'];
        $query="UPDATE khs SET mk='$edit_mk', nilai='$edit_n' WHERE idx= '$idx'";
        $this->db->query($query);
        $this->db->execute();
    }
    public function doDeleteData($idx){
        $query="DELETE FROM khs  WHERE idx= '$idx'";
        $this->db->query($query);
        $this->db->execute();
    }
}