<?php 
class Tracuu extends Controller{

    public $muitiem;
    function __construct()
    {
        $this->muitiem = $this->model("MuitiemModel");
    }
    /* function index(){
        $this->view("layout",[
            "page" => "tracuu"
            ]);
    } */

    function index(){
        $id = $_SESSION["idAccount"];
        $res=  $this->muitiem ->getMuiTiem($id);
        
        $obj = json_decode($res);
        if(empty($obj)){
            $data = array("Thông báo: Bạn chưa đăng ký tiêm.");
        }
        //else echo $res;
        $this->view("layout",[
            "page" => "tracuu",
            "muitiem1" => $this->muitiem ->getMuiTiem($id),
            "muitiem2" => $this->muitiem ->getMuiTiem2($id)
            ]);
    }
    
    function chinhsua(){
       
        $res = $this->muitiem ->update(2,0,"Astra","");
        echo($res);
    }
    
}