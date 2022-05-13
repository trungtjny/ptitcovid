<?php 
class News extends Controller{
    public $post;
    function __construct()
    {
        $this ->post = $this->model("postModel");
    }
    function index(){
        $this->view("layout",[
            "page" => "news",
            "list" => $this->post->getAll()
            ]);
    }
    function show(){
        echo " news show";
    }
}