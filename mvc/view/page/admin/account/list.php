

<div class="col-9">
<?php 

    $list = json_decode($data["list"]);
    var_dump($list);
    
?>
            <div class="mt-5 ml-5">
                <h3>Danh sách account: <?php echo count($list)." tài khoản" ?></h3>
                <table class="table table-bordered table-hover">
                    <thead class="table-primary">
                        <tr>
                            <th scope="col" class="text-center">STT</th>
                            <th scope="col">Họ tên</th>
                            <th scope="col">Tên đăng nhập</th>
                            <th scope="col">Mã sinh viên</th>
                            <th scope="col">Quyền</th>
                            <th scope="col " class="text-center"  >Tuỳ chọn</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        <?php 
                        $i=1;
                            foreach ($list as $item) {
                                echo ' <tr class="bg-light">
                                            <th scope="row" class="text-center">'.$i++.'</th>
                                            <td>'.$item->fullname.'</td>
                                            <td>'.$item->username.'</td>
                                            <td>'.$item->masv.'</td>
                                            <td>'.$item->role.'</td>
                                            <td class="text-center" ><a class="px-3" href="/phpp3/admin/UpdateAcc/'.$item->id.'">Chỉnh sửa</a><a class="px-3" href="/phpp3/admin/DeleteAccount/'.$item->id.'">Xoá</a></td>
                                        </tr>'
                                ;
                                }
                                
                        ?>
                    </tbody>
                </table>

                
            </div>
        </div>
    </div>

</body>

</html>