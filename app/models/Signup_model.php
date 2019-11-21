<?php 
class Signup_model{
    private $table ='mahasiswa';
    private $db;

    public function __construct(){
        $this->db = new Database;
    }
  
    public function tambahAkun($data){

        $cUser=$this->cekUsername($data);
        $cNim=$this->cekNim($data);
        if($cNim['nim']==$data['nim'] or $cUser['username']==$data['username']){
            
            return 0;
        }
        else{
            
            $query ="insert into mahasiswa 
            (nama,nim,username,password)
            values 
            (:nama,:nim,:username,:password)";
            $this->db->query($query);
            $this->db->bind('nama',$data['nama']); //$data['nama']) berasal dari name di view
            $this->db->bind('nim',$data['nim']); //$data['nama']) berasal dari name di view
            $this->db->bind('username',$data['username']); //$data['username']) berasal dari name di view
            $this->db->bind('password',$data['password']); //$data['nama']) berasal dari name di view
            
            $this->db->execute();//eksekusi query
            return $this->db->rowCount();//agar return tidak 0 pada conroller
        }
        
    }

  
    public function cekUsername($data){
        $query = "select * from mahasiswa where username=:username";
        $this->db->query($query);
        $this->db->bind('username',$data['username']);
        return $this->db->single();
    }

    public function cekNim($data){
        $query = "select * from mahasiswa where nim=:nim";
        $this->db->query($query);
        $this->db->bind('nim',$data['nim']);
        return $this->db->single();
    }
    

    public function cekAkun($data){
        
        $query = "select * from mahasiswa where username=:username and password=:password";
        $this->db->query($query);
        $this->db->bind('username',$data['username_lg']);
        $this->db->bind('password',$data['password_lg']);
    
        return $this->db->single();
        
    }
}