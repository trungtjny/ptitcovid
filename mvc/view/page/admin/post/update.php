<div class="col-9">
<?php 

    $list = json_decode($data["list"]);
    $title = $list->title;
    $text_top = $list->text_top;
    $text_bot = $list->text_bot;
    $subthumbnail = $list->subthumbnail;
    $thumbnail= $list->thumbnail;
?>
            <div class="mt-5 ml-5">
                
                <h3>Sửa thông tin bài đăng: </h3>
                <form action="/phpp3/admin/updatePost/<?php echo $list->id?>" method="POST" id="FcreatePost" enctype="multipart/form-data">
                    <div class="row">
                        <div class="form-group col-12" >
                            <label for="name"> Tiêu đề</label>
                            <input type="text" class="form-control"  id="name" name="title"  placeholder="" value="<?php echo $title?>">
                        </div>
                        <br>
                        <div class="form-group col-12">
                            <label for="txt_top">Phần mở đầu</label>
                            <textarea rows="10" cols="170" name="txt_top" form="FcreatePost" value=""><?php echo $text_top?></textarea>
                        </div>
                        <p class="m-3">ảnh cũ:  /phpp3/public/upload/<?php echo $thumbnail?></p>
                        <img src="/phpp3/public/upload/<?php echo $thumbnail?>" class="m-3" alt="" width="250px" >

                        <div class="form-group col-12">
                            <label for="msv">Vui lòng chọn lại file ảnh.</label>
                            
                            <input type="file" class="form-control" id="msv" name="thumb" value="<?php echo './public/upload/'. $thumbnail?>">
                        </div>
                        <div class="form-group col-6">
                            <label for="ngaysinh">Mô tả (ảnh)</label>
                            <input type="text" class="form-control" id="ngaysinh" name="subthumb" value="<?php echo $subthumbnail?>">
                        </div>
                        <div class="form-group col-12">
                            <label for="txt_bot">Phần kết</label>
                            <textarea rows="10" cols="170" name="txt_bot" form="FcreatePost" value=""><?php echo $text_bot?></textarea>
                        </div>
                        


                    </div>
                    <button type="submit" name="btnsubmit" class="btn btn-outline-primary ml-auto ">Đăng bài</button>
                </form>

                
            </div>
        </div>
    </div>

</body>

</html>

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