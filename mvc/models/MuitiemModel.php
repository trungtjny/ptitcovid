<?php

class MuiTiemModel extends DB{

    public function dangky1($ten,$masinhvien,$ngaysinh,$gioitinh,$cccd,$sodienthoai,$diachi,$ngaydangky,$idAccount){
        $res= false;
       $sql = "INSERT INTO `muitiem1`  VALUES (NULL, '$ten', '$masinhvien', '$ngaysinh', '$gioitinh','$cccd', '$sodienthoai', '$diachi', '$ngaydangky', '', '$idAccount', '','');";
       if(mysqli_query($this->con,$sql)){
           $res = true;
       }
       return json_encode($res);
    }
    public function getM1($id){
        $sql = "SELECT * FROM muitiem1 WHERE id = $id ORDER BY id DESC LIMIT 1;";
        $rows = mysqli_query($this->con,$sql);
        $mangs= mysqli_fetch_array($rows, 1); 
        return json_encode($mangs);
    }
    public function getM2($id){
        $sql = "SELECT * FROM muitiem2 WHERE id = '$id'ORDER BY id DESC LIMIT 1;";
        $rows = mysqli_query($this->con,$sql);
        $mangs= mysqli_fetch_array($rows, 1); 
        return json_encode($mangs);
    }
    public function update1($id,$trangthai,$tenVacxin,$ngaytiem){
       $sql = "UPDATE `muitiem1` SET `trangthai` = '$trangthai', `tenvacxin` = '$tenVacxin', `ngaytiem` = '$ngaytiem' WHERE muitiem1.id = '$id'";
       $res= false;
       if(mysqli_query($this->con,$sql)){
            $res = true;
        }
        return json_encode($res);
    }
    public function update2($id,$trangthai,$tenVacxin,$ngaytiem){
        $sql = "UPDATE `muitiem2` SET `trangthai` = '$trangthai', `tenvacxin` = '$tenVacxin', `ngaytiem` = '$ngaytiem' WHERE muitiem2.id = '$id'";
        $res= false;
        if(mysqli_query($this->con,$sql)){
             $res = true;
         }
         return json_encode($res);
     }
    public function delete1($id){
        $sql = "DELETE FROM `muitiem1` WHERE `muitiem1`.`id` = '$id'";
        $res= false;
        if(mysqli_query($this->con,$sql)){
            $res = true;
        }
        return json_encode($res);
    }
    public function delete2($id){
        $sql = "DELETE FROM `muitiem2` WHERE `muitiem2`.`id` = '$id'";
        $res= false;
        if(mysqli_query($this->con,$sql)){
            $res = true;
        }
        return json_encode($res);
    }


    
    public function dangky2($ten,$masinhvien,$ngaysinh,$gioitinh,$cccd,$sodienthoai,$diachi,$ngaydangky,$idAccount,$loaivacxin,$ngaytiem1){
        $res= false;
       /* $sql = "INSERT INTO `muitiem2`  VALUES (NULL, '$ten', '$masinhvien', '$ngaysinh', '$gioitinh','$cccd', '$sodienthoai', '$diachi', '$ngaydangky', '', '$idAccount', '','','$loaivacxin','$ngaytiem1');"; */
       
       $sql = "INSERT INTO `muitiem2` (`id`, `ten`, `masv`, `ngaysinh`, `gioitinh`, `cccd`, `dienthoai`, `diachi`, `ngaydangky`, `trangthai`, `id_account`, `tenvacxin`, `ngaytiem`, `tenvacxinmui1`, `ngaytiemmui1`) VALUES ('', '$ten', '$masinhvien', '$ngaysinh', '$gioitinh', '$cccd', '$sodienthoai', '$diachi', '$ngaydangky', '0', '$idAccount', NULL, NULL, '$loaivacxin', '$ngaytiem1')";
       if(mysqli_query($this->con,$sql)){
           $res = true;
       }
       return json_encode($res);
    }

    public function getAll1(){
        $sql = "SELECT * FROM muitiem1  ORDER BY id DESC";
        $mangs= array();    
        $rows = mysqli_query($this->con,$sql);
        while($r = mysqli_fetch_array($rows)){
            $mangs[] = $r ;
        };
        return json_encode($mangs); 
    }
    public function getAll2(){
        $sql = "SELECT * FROM muitiem2 ORDER BY id DESC";
        $mangs= array();    
        $rows = mysqli_query($this->con,$sql);
        while($r = mysqli_fetch_array($rows)){
            $mangs[] = $r ;
        };
        return json_encode($mangs); 
    }
    public function getMuitiem($id){
        $sql = "SELECT * FROM `muitiem1` WHERE `id_account` ='$id';";
        $rows = mysqli_query($this->con,$sql);
        $mangs= mysqli_fetch_array($rows, 1); 
        return json_encode($mangs);
    }
    public function getMuitiem2($id){
        $sql = "SELECT * FROM `muitiem2` WHERE `id_account` ='$id';";
        $rows = mysqli_query($this->con,$sql);
        $mangs= mysqli_fetch_array($rows, 1); 
        return json_encode($mangs);
    }
}

?>