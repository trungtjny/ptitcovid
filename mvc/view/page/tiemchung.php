<div class="container-fluid"  style="background-color: #d3dbf3;">
    <div class="container py-5 bg-light">
    <h3 class="text-center ">Đăng ký tiêm chủng</h3>
    <form action="./Tiemchung/dangky" method="POST">
        <div class="row">
            <div class="form-group col-6">
                <label for="name">Tên</label>
                <input type="text" class="form-control" id="name" name = "ten" aria-describedby="emailHelp" placeholder="Họ tên">
            </div>
            <div class="form-group col-6">
                <label for="msv">Mã sinh viên</label>
                <input type="text" class="form-control" id="msv" name= "masinhvien" placeholder="Mã sinh viên">
            </div>
            <div class="form-group col-6">
                <label for="ngaysinh">Ngày sinh</label>
                <input type="date" class="form-control" id="ngaysinh" name = "ngaysinh" placeholder="Ngày sinh">
            </div>


            <div class="form-group col-12">
                <label for="gioitinh"> Giới tính:</label>
                <select name="gioitinh" id="gioitinh">
                                <option value="nam">Nam</option>
                                <option value="nu">Nữ</option>
                                
                            </select>
            </div>
            <div class="form-group col-md-6 col-12">
                <label for="CMT">Chứng minh thư/ CCCD</label>
                <input type="text" class="form-control" id="CMT" name ="cccd" placeholder="Chứng minh thư/ CCCD">
            </div>
            <div class="form-group col-6 ">
                <label for="sodienthoai">Số điện thoại</label>
                <input type="text" class="form-control" id="sodienthoai" name= "sodienthoai" placeholder="Diện thoại">
            </div>
            <div class="form-group col-6 ">
                <label for="diachi">Địa chỉ liên hệ</label>
                <input type="text" class="form-control" id="diachi" name= "diachi" placeholder="Địa chỉ">
            </div>
            <div class="form-group col-12">
                <label for="muiTiem"> Đăng ký tiêm mũi: </label>
                <select name="muitiem" id="muiTiem">
                                <option value="1"> Mũi 1</option>
                                <option value="2">Mũi 2</option>
                            </select>
            </div>
            <div class="select-1" id="mui2Selected" style="display: none;">
                <h4 class="px-3">Thông tin mũi tiêm thứ 1.</h4>
                <div class="row px-3">
                <div class="form-group  col-12">
                        <label for="loaivacxin"> Loại Vacxin: </label>
                        <select name="loaivacxin" id="loaivacxin">
                                <option value="astrazeneca">Astrazeneca</option>
                                <option value="fifzer">fifzer</option>
                            </select>
                    </div>
                    <div class="form-group col-md-6 col-12">
                        <label for="ngaytiem1">Ngày tiêm</label>
                        <input type="date" class="form-control" id="ngaytiem1" name= "ngaytiem1" placeholder="">
                    </div>
                
                    <div class="form-group col-md-6 col-12">
                        <label for="cosotiem">Cơ sở tiêm</label>
                        <input type="text" class="form-control" id="cosotiem" name = "cosotiem" placeholder="Phường Mỗ Lao - Hà Đông - Hà Nội">
                    </div>
                </div>
            </div>
        </div>
        <button type="submit" name ="btnsubmit" class="btn btn-outline-primary ml-auto ">Đăng ký</button>
    </form>
    </div>
</div>
        

    <script>
        $(document).ready(function() {
            $('#muiTiem').on('change', function() {
                if (this.value == '2') {
                    $("#mui2Selected").show();
                } else {
                    $("#mui2Selected").hide();
                }
            });
        });
    </script>
<?php 
        function alert($msg) {
            echo "<script> $(document).ready(function(){
                    alert ('$msg');
                });</script>";
        } 
        $msg ="";
         if(isset($data["msg"])){
            if($data["msg"] == "True"){
                $msg = "Đăng ký thành công!";
            }
            else $msg = "Đăng ký thất bại!";
            alert($msg);
        }    
    ?>
