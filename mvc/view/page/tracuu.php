<?php 
    $obj = json_decode($data["muitiem1"]);
    $obj2 = json_decode($data["muitiem2"]);
    
     
?>

<main class="container-fluid bgx py-5" style="min-height: 80vh;">
    <?php 
        
    ?>
        
            <?php
                if( !isset($obj) && !isset($obj2)){
                    echo '<div class="container py-5 bg-light mui"> 
                    <h3 class="text-center mb-5 mt-5" >Bạn chưa đăng ký tiêm </h3>
                    </div> ';
                }
                if(isset($obj)){
                    if($obj->trangthai==0) {
                        $tt="Chưa tiêm";
                        $obj->ngaytiem = "Chưa có lịch tiêm";
                        $obj->tenvacxin = "...";
                     }
                     else $tt = "Đã tiêm";
                    echo '<div class="container py-5 bg-light mui">
                    <div class="">
                    <h3 class="text-center mb-5" >Thông tin đăng ký tiêm </h3>
                    <h3>Mũi tiêm: 1</h3>
                    <hr>
                    <div class="row">
                        <div class=" col-6">
                            <h4>Họ tên: '.  $obj->ten .'</h4>
    
                        </div>
                        <div class=" col-6">
                            <h4>Mã sinh viên: '. $obj->masv.'</h4>
                        </div>
                        <div class=" col-6">
                            <h4>Ngày sinh: '. $obj->ngaysinh.'</h4>
                        </div>
                        <div class=" col-12">
                            <h4>Giới tính: '. $obj->gioitinh.'</h4>
                        </div>
                        <div class=" col-md-6 col-12">
                            <h4>Căn cước công dân: '. $obj->cccd.'</h4>
                        </div>
                        <div class=" col-6 ">
                            <h4>Số điện thoại: '. $obj->dienthoai.'</h4>
                        </div>
                        <div class=" col-6 ">
                            <h4>Địa chỉ liên hệ: '. $obj->diachi.'</h4>
                        </div>
    
                        <div class=" col-12">
                            <h4 style="color: red;"> Trạng thái: '. $tt .'</h4>
                        </div>
                        <div class="col-12">
                            <h4>Ngày đăng ký: '. $obj->ngaydangky.'</h4>
                        </div>
                        <div class="col-6">
                            <h4>Ngày tiêm: '. $obj->ngaytiem .' </h4>
                        </div>
                        <div class="col-6">
                            <h4> Loại vacxin: '. $obj->tenvacxin.'</h4>
                        </div>
                    </div>
                </div> 
                </div>    ';
                }
                 if( isset($obj2)){
                    if($obj2->trangthai==0) {
                        $tt="Chưa tiêm";
                        $obj2->ngaytiem = "Chưa có lịch tiêm";
                        $obj2->tenvacxin = "...";
                     }
                     else $tt = "Đã tiêm";
                    echo '
                        <div class="container py-5 mt-5 bg-light mui">
                        <div class="">
                            <h3 class="text-center ">Thông tin đăng ký tiêm </h3>
                            <h3>Mũi tiêm: 2</h3>
                            <hr>
                            <div class="row">
                        <div class=" col-6">
                            <h4>Họ tên: '.  $obj2->ten .'</h4>
    
                        </div>
                        <div class=" col-6">
                            <h4>Mã sinh viên: '. $obj2->masv.'</h4>
                        </div>
                        <div class=" col-6">
                            <h4>Ngày sinh: '. $obj2->ngaysinh.'</h4>
                        </div>
                        <div class=" col-12">
                            <h4>Giới tính: '. $obj2->gioitinh.'</h4>
                        </div>
                        <div class=" col-md-6 col-12">
                            <h4>Căn cước công dân: '. $obj2->cccd.'</h4>
                        </div>
                        <div class=" col-6 ">
                            <h4>Số điện thoại: '. $obj2->dienthoai.'</h4>
                        </div>
                        <div class=" col-6 ">
                            <h4>Địa chỉ liên hệ: '. $obj2->diachi.'</h4>
                        </div>
    
                        <div class=" col-12">
                            <h4 style="color: red;"> Trạng thái: '. $tt .'</h4>
                        </div>
                        <div class="col-12">
                            <h4>Ngày đăng ký: '. $obj2->ngaydangky.'</h4>
                        </div>
                        <div class="col-6">
                            <h4>Ngày tiêm: '. $obj2->ngaytiem .' </h4>
                        </div>
                        <div class="col-6">
                            <h4> Loại vacxin: '. $obj2->tenvacxin.'</h4>
                        </div>
                        <div class="col-4">
                                    <h4>Ngày tiêm mũi 1: 21/7/2021 </h4>
                                </div>
                                <div class="col-4">
                                    <h4> Loại vacxin: Astrazeneca</h4>
                                </div>
                                <div class="col-4 ">
                                    <h4> Cơ sở tiêm: Mỗ Lao - Hà Đông</h4>
                                </div>
                    </div>
                        </div>
                    ';
                }
             ?>
            
            
            
        <!-- mui2 -->
               
    </main>

     
   