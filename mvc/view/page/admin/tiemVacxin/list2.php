

<div class="col-9">
<?php 

    if(isset($data["list2"])) $list = json_decode($data["list2"]);
    else {
        echo '<h3 class="m-5" >Chưa có đăng ký nào</h3>';
        die();
    } 
    
?>
            <div class="mt-5 ml-5">
                <h3>Danh sách mũi tiêm 2: <?php if(is_array($list)) echo count($list)." tài khoản" ?></h3>
                <table class="table table-bordered table-hover">
                    <thead class="table-primary">
                        <tr>
                            <th scope="col" class="text-center">STT</th>
                            <th scope="col">Họ tên</th>
                            <th scope="col">Mã sinh viên</th>
                            <th scope="col">Căn cước</th>
                            <th scope="col">Ngày đăng ký</th>
                            <th scope="col" class="text-center">Trạng thái</th>
                            <th scope="col" class="text-center">Tên vacxin</th>
                            <th scope="col" class="text-center">Ngày tiêm</th>
                            <th scope="col " class="text-center"  >Tuỳ chọn</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        <?php 
                        $i=1;
                            foreach ($list as $item) {
                                if($item->trangthai == 0 ) 
                                {$tt = "Chưa tiêm";$tenvacxin ="........"; $ngaytiem ="...........";} 
                                else {$tt = "Đã tiêm";$tenvacxin=$item->tenvacxin; $ngaytiem =$item->ngaytiem;}
                                echo ' <tr class="bg-light">
                                            <th scope="row" class="text-center">'.$i++.'</th>
                                            <td>'.$item->ten.'</td>
                                            <td>'.$item->masv.'</td>
                                            <td>'.$item->cccd.'</td>
                                            <td>'.$item->ngaydangky.'</td>
                                            <td class="table-warning text-center">'.$tt.'</td>
                                            <td class="table-warning text-center">'.$tenvacxin.'</td>
                                            <td class="table-warning text-center">'.$ngaytiem.'</td>
                                            <td class="text-center" ><a class="px-3" href="/phpp3/admin/UpdateM2/'.$item->id.'">Chinh sua</a><a class="px-3" href="/phpp3/admin/DeleteM2/'.$item->id.'">Xoa</a></td>
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