<?php
class PostModel extends DB{

    public function getAll(){
        $sql = "SELECT * FROM post  ORDER BY id DESC";
        $mangs= array();    
        $rows = mysqli_query($this->con,$sql);
        while($r = mysqli_fetch_array($rows)){
            $mangs[] = $r ;
        };
        return json_encode($mangs); 
    }
    
    public function getItemHomepage(){
        $sql = "SELECT * FROM post  ORDER BY id DESC LIMIT 3";
        $mangs= array();    
        $rows = mysqli_query($this->con,$sql);
        while($r = mysqli_fetch_array($rows,1)){
            $mangs[] = $r ;
        };
        return json_encode($mangs); 
    }

    public function getItemByID($id){
        $sql = "SELECT * FROM post  WHERE id = '{$id}' LIMIT 1";
        $rows = mysqli_query($this->con,$sql);
        $mangs= mysqli_fetch_array($rows, 1);
        return json_encode($mangs); 
    }

    public function Create($title,$thumbnail,$subThumbnail,$text_top,$text_bot){
        $sql = "INSERT INTO `post` (`id`, `title`, `thumbnail`, `subthumbnail`, `text_top`, `text_bot`) VALUES (NULL, '$title', '$thumbnail', '$subThumbnail', '$text_top', '$text_bot')";

        $res= false;
        if(mysqli_query($this->con,$sql)){
            $res = true;
        }
        return json_encode($res);
    }

    public function update($id,$title,$thumbnail,$subThumbnail,$text_top,$text_bot){
        $sql = "UPDATE `post` SET `title` = '$title', `thumbnail` = '$thumbnail', `subThumbnail` = '$subThumbnail',`text_top` = '$text_top',`text_bot` = '$text_bot' WHERE post.id = '$id'";

        $res= false;
        if(mysqli_query($this->con,$sql)){
             $res = true;
         }
         return json_encode($res);
     }
    public function delete($id){
        $sql = "DELETE FROM `post` WHERE `post`.`id` = '$id'";
        $res= false;
        if(mysqli_query($this->con,$sql)){
            $res = true;
        }
        return json_encode($res);
    }
}    
?>