<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Registration</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <?php include("sidebar.php") ?>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <?php include("topbar.php") ?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Registration</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
          </div>

          <!-- Content Row -->
          <div class="row">
            <!-- Area Chart -->
            <div class="col-xl-12 col-lg-7">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Registration</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                  <form method="POST">
                    <div class="form-group">
                      <input type="text" name="name" id="name" class="form-control form-control-user" placeholder="Nama Anda" required>
                    </div>
                    <div class="form-group">
                      <input type="text" name="username" id="username" class="form-control form-control-user" placeholder="Username Anda" required>
                    </div>
                    <div class="form-group">
                      <input type="email" name="email" id="email" class="form-control form-control-user" placeholder="Email Anda" required>
                    </div>
                    <div class="form-group">
                      <input type="password" name="password" id="password" class="form-control form-control-user" placeholder="Password Anda" required>
                    </div>
                    <div class="form-group">
                      <input type="radio" name="jenis-kelamin" id="lk" value="Laki - Laki">
                      <label for="lk">Laki - Laki</label>
                      <input type="radio" name="jenis-kelamin" id="pr" value="Perempuan">
                      <label for="pr">Perempuan</label>
                    </div>
                    <div class="form-group">
                      <select class="form-control" name="agama" id="agama">
                        <option value="Islam">Islam</option>
                        <option value="Kristen">Kristen</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Budha">Budha</option>
                        <option value="Konghucu">Konghucu</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <textarea class="form-control" name="biografi" id="biografi" cols="30" rows="5"></textarea>
                    </div>
                    <button type="submit" class="btn btn-success" name="submit">Tambah</button>
                    <?php

                    $name     = @$_POST['name'];
                    $username  = @$_POST['username'];
                    $email    = @$_POST['email'];
                    $jk    = @$_POST['jenis-kelamin'];
                    $agama    = @$_POST['agama'];
                    $biografi    = @$_POST['biografi'];
                    if ($name) {
                      echo "<br><br><strong>Nama : </strong> {$name} <br>";
                    }
                    if ($username) {
                      echo "<strong>Username : </strong> {$username} <br>";
                    }
                    if ($email) {
                      echo "<strong>Email : </strong> {$email} <br>";
                    }
                    if ($jk) {
                      echo "<strong>Jenis Kelamin : </strong> {$jk} <br>";
                    }
                    if ($agama) {
                      echo "<strong>Agama : </strong> {$agama} <br>";
                    }
                    if ($biografi) {
                      echo "<strong>Biografi : </strong> {$biografi} <br>";
                    }
                    ?>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <footer class="sticky-footer bg-white">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright &copy; Your Website 2020</span>
            </div>
          </div>
        </footer>
        <!-- End of Footer -->

      </div>
      <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>