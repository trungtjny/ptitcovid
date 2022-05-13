<?php
class Home extends Controller{
    public $post;
    function __construct()
    {
        $this ->post = $this->model("postModel");
    }
    function index(){
        $this->view("layout",[
            "page" => "home",
            "list" => $this->post->getItemHomepage()
            ]);
    }
    function show($a, $b){
        echo " $a  - $b ";
       
    }
}