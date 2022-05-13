<?php
class SinhVien extends Controller{
    function index(){
        $std = $this->model("SinhVienModel");
        $name = $std->getSV();
        
        $this->view("ViewSinhVien",["name" => $name]);
        
    }
    function show(){
        $std = $this->model("AccountModel");
        $allSv = $std->getAll();
        //echo $allSv;
         $data = [
            "page" => "account",
            "sinhvien" => $allSv];
        
          $this->view("layout",$data);  
    }
}