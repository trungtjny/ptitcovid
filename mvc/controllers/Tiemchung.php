<?php 
class Tiemchung extends Controller{
    public $muitiem;
    function __construct()
    {
        $this->muitiem = $this->model("MuitiemModel");
    }
    function index(){
        $this->view("layout",[
            "page" => "tiemchung"
            ]);
    }
    function dangky(){
         if(isset ($_POST["btnsubmit"]))  {
            $ten = $_POST["ten"];
            $masinhvien = $_POST["masinhvien"];
            $ngaysinh = $_POST["ngaysinh"];
            $gioitinh = $_POST["gioitinh"];
            $cccd =$_POST["cccd"];
            $sodienthoai = $_POST["sodienthoai"];
            $diachi = $_POST["diachi"];
            $muitiem = $_POST["muitiem"];
            $ngaydangky = date("Y-m-d");

            $loaivacxin = $_POST["loaivacxin"];
            $ngaytiem1 = $_POST["ngaytiem1"];
            
            $idAccount = $_SESSION["idAccount"];
            if($muitiem == '1'){
                $res = $this->muitiem->dangky1($ten,$masinhvien,$ngaysinh,$gioitinh,$cccd,$sodienthoai,$diachi,$ngaydangky,$idAccount);
                if($res == "true") {
                }
                 $this->view("layout",[
                    "page" => "tiemchung",
                    "msg"  => "True"
                    ]);
            }
            else if($muitiem == '2'){
                $res = $this->muitiem->dangky2($ten,$masinhvien,$ngaysinh,$gioitinh,$cccd,$sodienthoai,$diachi,$ngaydangky,$idAccount,$loaivacxin,$ngaytiem1);
                if($res == "true") {
                }
                 $this->view("layout",[
                    "page" => "tiemchung",
                    "msg"  => "True"
                    ]);     
            }
         } 
    }
    
}