<!DOCTYPE html>
<html>
<head>
    <?php require_once "../inc/head.inc"; ?>
    <!-- Data table  Styles -->
    <link href="../plugins/datatables/dataTables.bootstrap.css" rel="stylesheet">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
 <?php $pagename = "Teacher"; $subpagename = "Teacher Infromation"; $pageicon = "fa fa-magic"; $subpageicon = "fa fa-circle-o";?>

  <?php require_once "../inc/header.inc"; ?>
  <?php require_once "../inc/side-bar.php"; ?>
  <?php $page = "Teacher"; $subpage = "teacherinformation"; $subsubpage = $_SERVER["REQUEST_URI"]; $user_type = $_SESSION["user_type"];?>
 <?php include "../inc/side-bar.php" ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
      <?php require_once "../inc/page-header.inc"; ?>

      <?php require_once "../inc/teacherinformation-content.php"; ?>


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
<!-- DataTables -->
<script src="../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll 1.3.0 -->
<script src="../plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- ChartJS 1.0.1 -->
<script src="../plugins/chartjs/Chart.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>

<!-- Page Script -->
<script type="text/javascript">
   $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>
</body>
</html>
