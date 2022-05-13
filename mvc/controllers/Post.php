<?php 
class Post extends Controller{
    public $post;
    function __construct()
    {
        $this ->post = $this->model("postModel");
    }
    function index(){
        $this->view("layout",[
            "page" => "detail",
            "list" => $this->post->getAll()
            ]);
    }
    public function detail($id){
        $this -> view("layout",[
            "page" =>"detail",
            "postItem" => $this->post->getItemByID($id)
        ]);
        //echo $this->post->getItemByID($id);
    }
    public function newpost(){
        if(isset($_POST["btnNewPost"])){
            $title = $_POST["title"];
            $thumbnail = $_POST["thumbnail"];
            $subThumbnail = $_POST["subThumbnail"];
            $text_top = $_POST["text_top"];
            $text_bot = $_POST["text_bot"];

            $res = $this->post->Create($title,$thumbnail,$subThumbnail,$text_top,$text_bot);

            echo $res;
        }
    }
    public function edit($id){
        if(isset($_POST["btnEditPost"])){
            $title = $_POST["title"];
            $thumbnail = $_POST["thumbnail"];
            $subThumbnail = $_POST["subThumbnail"];
            $text_top = $_POST["text_top"];
            $text_bot = $_POST["text_bot"];
             
            $res = $this->post->update($id,$title,$thumbnail,$subThumbnail,$text_top,$text_bot);

            echo $res;
        }
        /* $res = $this->post->update($id,"nguyen","quoc","trung","hoc","gioi");

        echo $res; */

    }
}