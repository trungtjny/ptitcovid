<?php 
class Login extends Controller{
    
    public $loginModel;
    function __construct()
    {
        
        $this->loginModel = $this->model("loginModel");
    }
    function index(){
        $this->view("no-header-layout",[
            "page" => "login"
            ]);
    }
    function dangnhap(){
        if(isset($_POST["btnLogin"])){
            $user= $_POST["username"];
            $pass = $_POST['password'];
            if(empty($_POST["username"]) || empty($_POST['password'])){
                 $this->view("no-header-layout",[
                    "page" => "login"
                    ]); 
                  
                    
            }
            $res = $this ->loginModel->login($user);
            if(mysqli_num_rows($res)){
                while($row = mysqli_fetch_array($res)){
                    $id =$row["id"];
                    $username = $row["username"];
                    $password = $row["password"];
                    $role = $row["role"];
                    if(password_verify($pass, $password)){
                        $_SESSION["idAccount"] = $id;
                        $_SESSION["username"] = $username;
                        $_SESSION["role"] = $role;
                        header('Location: http://localhost/phpp3/home');
                    }
                    else {
                        $this->view("no-header-layout",[
                            "page" => "login",
                            "msg" => "Sai thông tin đăng nhập"
                            ]); 
                    }
                }
            }
        }
    }
    function logout(){
        unset($_SESSION["idAccount"]);
        unset($_SESSION["username"]);
        session_destroy();
        $this->view("no-header-layout",[
            "page" => "login"
            ]);

    }
}