<div class="col-9  ">
            <h3 class=" m-5 ">Thêm tài khoản</h3>
            <div class="row m-5 ">
                <form action="/phpp3/admin/createAc" method="POST">
                    <div class="row">
                        <div class="form-group col-6">
                            <label for="name"> Họ tên</label>
                            <input type="text" class="form-control" id="name" name="fullname" aria-describedby="emailHelp" placeholder="Họ tên">
                        </div>
                        <br>
                        <div class="form-group col-6">
                            <label for="username">Tên đăng nhập</label>
                            <input type="text" class="form-control" id="msv" name="username" placeholder="Username">
                        </div>
                        <div class="form-group col-6">
                            <label for="msv">Mã sinh viên</label>
                            <input type="text" class="form-control" id="msv" name="msv" placeholder="Mã sinh viên">
                        </div>
                        <div class="form-group col-6">
                            <label for="ngaysinh">Mật khẩu</label>
                            <input type="password" class="form-control" id="ngaysinh" name="password" placeholder="Mật khẩu">
                        </div>
                        <div class="form-group col-6">
                            <label for="ngaysinh">Ngày sinh</label>
                            <input type="date" class="form-control" id="ngaysinh" name="dateofbirth" placeholder="Ngày sinh">
                        </div>
                        <div class="form-group col-md-6 col-12">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" id="email" name="email" placeholder="Email">
                        </div>

                        <div class="form-group col-12">
                            <label for="role"> Quyền : </label>
                            <select name="role" id="role">
                                    <option value="user">User</option>
                                    <option value="admin">Admin</option>
                                    
                                </select>
                        </div>


                    </div>
                    <button type="submit" name="btnsubmit" class="btn btn-primary ml-auto mt-5">Đăng ký</button>
                </form>
            </div>
        </div>
    </div>


</body>

</html>