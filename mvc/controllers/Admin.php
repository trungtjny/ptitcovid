<?php
class Admin extends Controller{
    public $post;
    public $muitiem;
    public $account;
    function __construct()
    {
        if($_SESSION["role"] == "user")   
        header('Location: http://localhost/phpp3/login');
        $this ->post = $this->model("PostModel");
        $this ->muitiem = $this->model("MuitiemModel");
        $this ->account = $this->model("loginModel");
    }
    function index(){
        $this->view("layout_Admin",[
            "page" => "admin/homeA",
            ]);
    }


    function listAcc(){
        $this->view("layout_Admin",[
            "page" => "admin/account/list",
            "list" => $this->account->getAll()
            ]);
    }
    function createAcc(){
        $this->view("layout_Admin",[
            "page" => "admin/account/create",
            ]); 
                  
    }
    function createAc(){
        if(isset($_POST["btnsubmit"])){
            $fullname = $_POST["fullname"];
            $username = $_POST["username"];
            $dateofbrith = $_POST["dateofbirth"];
            $msv = $_POST["msv"];
            $email = $_POST["email"];
            $role =$_POST["role"];
            $password = $_POST["password"];
            $password = password_hash($password, PASSWORD_DEFAULT);
            $this->account->create($username,$fullname,$msv,$password,$dateofbrith,$email,$role);
            $this->view("layout_Admin",[
                "page" => "admin/account/list",
                "list" => $this->account->getAll()
                ]);
        }
    }


    function DeleteAccount($id){
        $res = $this->account->delete($id);
        $this->view("layout_Admin",[
            "page" => "admin/account/list",
            "list" => $this->account->getAll(),
            "delete" => $res
            ]);   
    }
    function UpdateAcc($id){
        $this->view("layout_Admin",[
            "page" => "admin/account/update",
            "list" => $this->account->getAccount($id)
            ]);    
    }
    function updateA($id){
        if(isset($_POST["btnsubmit"])){
            $fullname = $_POST["fullname"];
            $username = $_POST["username"];
            $dateofbrith = $_POST["dateofbirth"];
            
            $email = $_POST["email"];
            $this->account->update($id,$username,$fullname,$dateofbrith,$email);
            
            $this->view("layout_Admin",[
                "page" => "admin/account/list",
                "list" => $this->account->getAll()
                ]);
        }
    }


    function UpdateM1($id){
        $this->view("layout_Admin",[
            "page" => "admin/tiemVacxin/update",
            "list" => $this->muitiem->getM1($id)
            ]);
    }
    function upm1($id){
        if(isset($_POST["btnsubmit"])){
            $trangthai = $_POST["trangthai"];
            $ngaytiem = $_POST["ngaytiem"];
            $tenvacxin = $_POST["vacxin"];
            $res = $this->muitiem->update1($id,$trangthai,$tenvacxin,$ngaytiem);
            header('Location: http://localhost/phpp3/admin/ListM1');
        }
    }
    function UpdateM2($id){
        $this->view("layout_Admin",[
            "page" => "admin/tiemVacxin/update2",
            "list" => $this->muitiem->getM2($id)
            ]);
    }
    function upm2($id){
        if(isset($_POST["btnsubmit"])){
            $trangthai = $_POST["trangthai"];
            $ngaytiem = $_POST["ngaytiem"];
            $tenvacxin = $_POST["vacxin"];
           
            $res = $this->muitiem->update2($id,$trangthai,$tenvacxin,$ngaytiem);
            header('Location: http://localhost/phpp3/admin/ListM2');
            
           
        }
    }
    function ListM1(){
        $this->view("layout_Admin",[
            "page" => "admin/tiemVacxin/list",
            "list1" => $this->muitiem->getAll1()
            ]);
    }
    function ListM2(){
        $this->view("layout_Admin",[
            "page" => "admin/tiemVacxin/list2",
            "list2" => $this->muitiem->getAll2()
            ]);
    }
    function DeleteM1($id){
        $res = $this->muitiem->delete1($id);
        header('Location: http://localhost/phpp3/admin/ListM1');
        /* $this->view("layout_Admin",[
            "page" => "admin/tiemVacxin/list",
            "list" =>  $this->muitiem->getAll1(),
            "delete" => $res
            ]); */
    }
    function DeleteM2($id){
        $res = $this->muitiem->delete2($id);
        header('Location: http://localhost/phpp3/admin/ListM2');
        /* $this->view("layout_Admin",[
            "page" => "admin/tiemVacxin/list2",
            "list" => $this->muitiem->getAll2()
            ]); */
    }

    function ListPost(){
        $this->view("layout_Admin",[
            "page" => "admin/post/list",
            "list" => $this->post->getAll()
            ]);
        /* $this->view("layout_Admin",[
            "page" => "admin/post/list",
            ]); */
    }
    function EditPost($id){
        $this->view("layout_Admin",[
            "page" => "admin/post/update",
            "list" => $this->post->getItemByID($id)
            ]);
    }
    function updatePost($id){
        if(isset($_POST["btnsubmit"])){
            $title = $_POST["title"];
            $txt_top = $_POST["txt_top"];
            $txt_bot = $_POST["txt_bot"];
            $subthumb = $_POST["subthumb"];
            
            if(isset($_FILES["thumb"])){
                $file = $_FILES["thumb"];
                $file_name = $file["name"];
                move_uploaded_file($file["tmp_name"],'./public/upload/'.$file_name);
                echo $file_name;
                $res = $this->post->update($id,$title, $file_name,$subthumb,$txt_top,$txt_bot);
                $this->view("layout_Admin",[
                    "page" => "admin/post/list",
                    "list" => $this->post->getAll(),
                    "msg" => $res
                    ]); 
            }
                
            
        }
    }
    function CreatePost(){
        $this->view("layout_Admin",[
            "page" => "admin/post/create",
            ]);
    }
    function crpost(){
        if(isset($_POST["btnsubmit"])){
            $title = $_POST["title"];
            $txt_top = $_POST["txt_top"];
            $txt_bot = $_POST["txt_bot"];
            $subthumb = $_POST["subthumb"];
            if(isset($_FILES["thumb"])){
                $file = $_FILES["thumb"];
                $file_name = $file["name"];
                move_uploaded_file($file["tmp_name"],'./public/upload/'.$file_name);
                $res = $this->post->Create($title, $file_name,$subthumb,$txt_top,$txt_bot);
                $this->view("layout_Admin",[
                    "page" => "admin/post/list",
                    "list" => $this->post->getAll(),
                    "msg" => $res
                    ]);
            }
                
            
        }
    }
    function DeletePost($id){
        $res = $this->post->delete($id);
        $this->view("layout_Admin",[
            "page" => "admin/post/list",
            "list" => $this->post->getAll(),
            "delete" => $res
            ]);
    }
}