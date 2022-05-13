<?php
class Account extends Controller {
    public $loginmodel;
    
    public function __construct()
    {
        $this ->loginmodel = $this->model("LoginModel");
    }
    public function index(){
        $id = $_SESSION["idAccount"];
         $this -> view("layout",[
            "page" =>"account",
            "account" =>$this->loginmodel->getAccount($id)
            
        ]); 
    }
    public function changePass(){
        $id = $_SESSION["idAccount"];
        $ress = false;
        if(isset($_POST["btnChangePass"])){
            $account = json_decode($this->loginmodel->getAccount($id));
//Post data
            $oldPass = $_POST["oldPass"];
            $newPass = $_POST["password"];

            $newPass = password_hash($newPass, PASSWORD_DEFAULT);
            
            if(password_verify("$oldPass", $account->password)){
               $res = $this->loginmodel->updatePassword($id,$newPass);
               $ress = true;
            }   
            else $ress = false;
            
            $this -> view("layout",[
                "page" =>"account",
                "changerPass" => $ress,
                "account" =>$this->loginmodel->getAccount($id),
                
            ]);
        }
    }
}
?>