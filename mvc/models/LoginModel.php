<?php
class LoginModel extends DB{

    public function login($username){
        $sql = "SELECT * FROM account WHERE username = '{$username}'";
        return mysqli_query($this->con, $sql);
    }

    public function getAccount($id){
        $sql = "SELECT * FROM account WHERE id= $id LIMIT 1";
        $res = mysqli_query($this->con, $sql);
        $data= mysqli_fetch_array($res, 1);
        return json_encode($data); 
    }
    public function getAll(){
        $sql = "SELECT * FROM account ORDER BY id ";
        $res = mysqli_query($this->con, $sql);
        $mangs= array();    
        $rows = mysqli_query($this->con,$sql);
        while($r = mysqli_fetch_array($rows,1)){
            $mangs[] = $r ;
        };
        return json_encode($mangs); 
    }
    public function update($id,$username, $fullname,$dateofbrith,$email){
        $sql = "UPDATE `account` SET `username` = '$username', `fullname` = '$fullname', `dateofbirth` = '$dateofbrith', `email` = '$email' WHERE `account`.`id` = '$id'";
        $res= false;
       if(mysqli_query($this->con,$sql)){
            $res = true;
        }
        return json_encode($res);
    }
    public function delete($id){
        $sql = "DELETE FROM `account` WHERE `account`.`id` = '$id'";
        $res= false;
        if(mysqli_query($this->con,$sql)){
            $res = true;
        }
        return json_encode($res);
    }

    public function create($username,$fullname,$msv,$password,$dateofbrith,$email,$role){
        /* $sql ="INSERT INTO `account` (`id`, `username`, `masv`, `fullname`, `password`, `dateofbirth`, `email`, `role`) VALUES (NULL, '', '$msv', '$fullname', '$password', '$dateofbrith', '$email', '$role')"; */
        $sql ="INSERT INTO `account` (`id`, `username`, `masv`, `fullname`, `password`, `dateofbirth`, `email`, `role`) VALUES (NULL, '$username', '$msv', '$fullname', '$password', '$dateofbrith', '$email', '$role')";
        $res= false;
        if(mysqli_query($this->con,$sql)){
             $res = true;
         }
         return json_encode($res);
    }

    public function updatePassword($id,$password){
        $sql = "UPDATE `account` SET  `password` = '$password' WHERE `account`.`id` = '$id'";
        $res= false;
       if(mysqli_query($this->con,$sql)){
            $res = true;
        }
        return json_encode($res);
    }

   
}