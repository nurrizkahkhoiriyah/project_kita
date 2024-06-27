<div class="login-box">
  <div class="login-logo">
    <a href="../../index2.html"><b>Login</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Silakan Login</p>
    <?php echo form_open() ?>
      <div class="form-group has-feedback">
        <input name= "username" class="form-control" placeholder="Username">
        <span class="fa fa-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <select name="level" class="form-control">
            <option value="">Login sebagai</option>
            <option value="1">Admin</option>
            <option value="2">Mahasiswa</option>
            <option value="2">Dosen</option>
        </select>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <!-- /.col -->
        <div class="col-xs-12">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Log In</button>
        </div>
        <!-- /.col -->
      </div>
    <?php echo form_close() ?>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->
