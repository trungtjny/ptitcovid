<div class="col-9">
<?php 

    $list = json_decode($data["list"]);
    $fullname = $list->fullname;
    $username = $list->username;
    $dateofbirth = $list->dateofbirth;
    $email = $list->email
    
?>
            <div class="mt-5 ml-5">
                <h3>Sửa thông tin account: </h3>
                <form action="/phpp3/admin/updateA/<?php echo $list->id ?>" method="POST">
                    <div class="form-group">
                    <label for="fname">Họ tên :</label>
                    <input type="text" class="form-control" id="fname" name= "fullname" placeholder="" value="<?php echo $fullname?>">
                    </div>
                    
                    <div class="form-group">
                    <label for="username">Username:</label>
                    <input type="text" class="form-control" id="pwd" placeholder="Enter password" name="username"  value="<?php echo $username?>">
                    </div>
                    
                    <div class="form-group">
                    <label for="pwd">Ngày sinh:</label>
                    <input type="date" class="form-control" id="pwd" placeholder="Enter password" name="dateofbirth" value="<?php echo $dateofbirth?>">
                    </div>

                    <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value="<?php echo $email?>">
                    </div>
                    
                    
                    <button type="submit" name = "btnsubmit" class="btn btn-primary ml-auto ">Lưu  thay đổi</button>
                </form>

                
            </div>
        </div>
    </div>

</body>

</html>