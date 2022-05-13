<?php
class SinhVienModel extends DB {
    public function GetSV(){
        return "Nguyen Quoc Trung B18DCPT240";
    }

    public function allSinhVien(){
        $qr = " SELECT * from sinhvien";
        $rows = mysqli_query($this->con,$qr);
        $mangs= array();    
        while($r = mysqli_fetch_array($rows)){
            $mangs[] = $r ;
        };
        return json_encode($mangs); 
        //return $mangs;
    }
}