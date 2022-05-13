<?php
/* 


class AccountModel extends DB {
    public function GetSV(){
        return "Nguyen Quoc Trung B18DCPT240";
    }
    public function getAll(){
        $qr = " SELECT * FROM `account`";
        $mang = array();
        $data = mysqli_query($this->con,$qr);
         while($d = mysqli_fetch_array($data,1)){
            $mang[] = $d;
        }
        return json_encode($mang);
    }
    function loadHashByUsername($username){
        //$qr = " SELECT `password` FROM `account` WHERE `username` = '$username';";
        $qr = " SELECT * FROM `account` WHERE `username` = '$username';";
        $mang = array();
        $data = mysqli_query($this->con,$qr);
         while($d = mysqli_fetch_array($data,1)){
            $mang[] = $d;
        }
        return json_encode($mang);
    }
    function checkLogin($user, $pass){
        $res= " login false";
        $hash = json_decode($this->loadHashByUsername($user));
        $x = $hash[0];
        
        if (password_Verify($pass, $x->password)) {
	        $res= "login success";
            $_SESSION["idAccount"] = $x->id;
        }
        return json_encode(["msg" => $res]); 
    }
    function Register($username, $fullname, $password,$dateofbirth,$email){
        $qr="INSERT INTO account VALUES (null,'$username','$fullname','$password','$dateofbirth','$email','user')";
    }
    function checkHash(){
        $passwordHash = password_hash('123456', PASSWORD_DEFAULT);
        $passwordCandidate = '123456'; // Password is correct here


        if (password_Verify($passwordCandidate, $passwordHash)) {
	        return json_encode($passwordHash);}
         else {
	        return 'Invalid password!';
            }
    }
}
*/