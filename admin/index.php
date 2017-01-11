
<!DOCTYPE html>
<html>
<head>
    <?php require_once "../inc/head.inc"; ?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <?php $pagename = "Dashboard";  $subpagename = ""; $pageicon = "fa fa-dashboard"; $subpageicon = "";?>
  <?php require_once "../inc/header.inc"; ?>
  <?php $_SESSION["user_type"] = "admin"; $user_type = $_SESSION["user_type"]?>
  <?php include_once "side-bar.php" ?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
      <?php require_once "../inc/page-header.inc"; ?>

      <?php require_once "../inc/admin-content.php"; ?>


  </div>
  <!-- /.content-wrapper -->

    <?php require_once "../inc/footer.inc"; ?>


</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="../plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="../bootstrap/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="../plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/app.min.js"></script>
<!-- Sparkline -->
<script src="../plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="../plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="../plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- SlimScroll 1.3.0 -->
<script src="../plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- ChartJS 1.0.1 -->
<script src="../plugins/chartjs/Chart.min.js"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="../plugins/morris/morris.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../dist/js/pages/dashboard2.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<script type="text/javascript">

</script>
</body>
</html>
