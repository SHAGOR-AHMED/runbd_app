<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Run BD Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="<?= base_url('assets/admin/');?>vendors/iconfonts/font-awesome/css/all.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/admin/');?>vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="<?= base_url('assets/admin/');?>vendors/css/vendor.bundle.addons.css">
    <!-- endinject -->
    <!-- inject:css -->
    <link rel="stylesheet" href="<?= base_url('assets/admin/');?>css/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="<?= base_url('assets/admin/');?>images/favicon.png" />
  </head>
  <style type="text/css">
    input[type="email"], [type="password"], select, textarea {
      border: 1px solid #1abba3 !important;
      background: linear-gradient(to right, rgba(26, 187, 163, 0.2), rgba(34, 34, 34, 0.1)) !important;
    }
  </style>

  <script type="text/javascript">
    function validate(){
        if( document.login_panel.login_type.value == "0" ){
          alert( "Please Select Login Type!" );
          return false;
        }
        return( true );
    }
  </script>

  <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-stretch auth auth-img-bg">
          <div class="row flex-grow">
            <div class="col-lg-6 login-half-bg d-flex flex-row">
              <p class="text-white font-weight-medium text-center flex-grow align-self-end">Copyright &copy; <?php echo date('Y');?>  All rights reserved | <a href="">Run Bangladesh</a></p>
            </div>
            <div class="col-lg-6 d-flex align-items-center justify-content-center" style="background: url('<?= base_url('assets/admin/');?>images/auth/06.jpg'); ">
              <div class="auth-form-transparent text-left p-3">
                <div class="brand-logo">
                  <img src="<?= base_url('assets/admin/');?>images/logo.png" alt="logo">
                </div>
                <h4>Welcome back!</h4>
                <h6 class="font-weight-light">Happy to see you again!</h6>
                <?php if(!empty($msg))echo $msg;?>
                <form action="<?= base_url('login/process');?>" method="post" name="login_panel" id="login_panel" class="pt-3" onsubmit="return(validate());">

                   <div class="form-group">
                    <label for="exampleInputEmail">Type</label>
                    <div class="input-group">
                      <div class="input-group-prepend bg-transparent">
                        <span class="input-group-text bg-transparent border-right-0">
                          <i class="fa fa-user text-primary"></i>
                        </span>
                      </div>
                      <select name="login_type" class="form-control form-control-lg border-left-0">
                        <option value="0">--Select Type--</option>
                        <option value="1">Super Admin</option>
                        <option value="2">Admin</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail">User Email</label>
                    <div class="input-group">
                      <div class="input-group-prepend bg-transparent">
                        <span class="input-group-text bg-transparent border-right-0">
                          <i class="fa fa-user text-primary"></i>
                        </span>
                      </div>
                      <input type="email" name="user_email" class="form-control form-control-lg border-left-0" id="exampleInputEmail" placeholder="User Email" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword">Password</label>
                    <div class="input-group">
                      <div class="input-group-prepend bg-transparent">
                        <span class="input-group-text bg-transparent border-right-0">
                          <i class="fa fa-lock text-primary"></i>
                        </span>
                      </div>
                      <input type="password" name="password" class="form-control form-control-lg border-left-0" id="exampleInputPassword" placeholder="Password" required>                    
                    </div>
                  </div>
                  <div class="my-2 d-flex justify-content-between align-items-center">
                    <div class="form-check">
                      <label class="form-check-label text-muted">
                        <input type="checkbox" class="form-check-input">
                        Keep me signed in
                      </label>
                    </div>
                    <a href="#" class="auth-link text-black">Forgot password?</a>
                  </div>
                  <div class="my-3">
                    <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">
                      LOGIN
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="<?= base_url('assets/admin/');?>vendors/js/vendor.bundle.base.js"></script>
    <script src="<?= base_url('assets/admin/');?>vendors/js/vendor.bundle.addons.js"></script>
    <!-- endinject -->
    <!-- inject:js -->
    <script src="<?= base_url('assets/admin/');?>js/off-canvas.js"></script>
    <script src="<?= base_url('assets/admin/');?>js/hoverable-collapse.js"></script>
    <script src="<?= base_url('assets/admin/');?>js/misc.js"></script>
    <script src="<?= base_url('assets/admin/');?>js/settings.js"></script>
    <script src="<?= base_url('assets/admin/');?>js/todolist.js"></script>
    <!-- endinject -->
  </body>
</html>
