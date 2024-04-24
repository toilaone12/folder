<div class="content-wrapper">
  <div class="row">
    <div class="col-md-7 grid-margin stretch-card m-auto d-block">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Thêm tài khoản</h4>
          <p class="card-description text-success">
            <?= isset($noti) && $noti ? $noti : '' ?>
          </p>
          <form class="forms-sample" action="?act=user&mod=insert" method="POST">
            <div class="form-group">
              <label for="exampleInputUsername1">Họ tên</label>
              <input type="text" class="form-control" name="fullname" required id="exampleInputUsername1" placeholder="Username">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Tên đăng nhập</label>
              <input type="text" class="form-control" name="username" required id="exampleInputEmail1" placeholder="Email">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Email</label>
              <input type="text" class="form-control" name="email" required id="exampleInputEmail1" placeholder="Email">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Mật khẩu</label>
              <input type="password" class="form-control" name="password" required id="exampleInputPassword1" placeholder="Password">
            </div>
            <div class="form-group">
              <label for="exampleInputConfirmPassword1">Nhập lại mật khẩu</label>
              <input type="password" class="form-control" name="repassword" required id="exampleInputConfirmPassword1" placeholder="Password">
            </div>
            <button type="submit" name="themtaikhoan" class="btn btn-primary me-2">Xác nhận</button>
            <a href="?act=user" class="btn btn-light">Hủy bỏ</a>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>