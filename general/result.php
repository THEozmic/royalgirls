<!DOCTYPE html>
<html>
<head>
    <?php require_once "../inc/head.inc"; ?>
    <!-- Data table  Styles -->
    <link href="../plugins/datatables/dataTables.bootstrap.css" rel="stylesheet">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
 <?php $pagename = "Students"; $subpagename = "Student Infromation / Result"; $pageicon = "fa fa-users"; $subpageicon = "fa fa-circle-o";?>

  <?php require_once "../inc/header.inc"; ?>
  <?php $page = "Student"; $subpage = "studentinformation"; $subsubpage = $_SERVER["REQUEST_URI"]; $user_type = $_SESSION["user_type"];?>
  <?php include "../".$_SESSION['user']."/side-bar.php"; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
      <?php require_once "../inc/page-header.inc"; ?>

      <?php require_once "../inc/result-content.php"; ?>


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
    $('#second_term, #first_term, #third_term').DataTable({
      "paging": false,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": false,
      "autoWidth": false
    });
  });

   //print result function

    $("body").on("click", ".print", function(){
        var table_id = $(this).attr("data-tid");
        var data = $(table_id).parent().parent().parent().parent().parent().html() + "<script>window.print();<\/script>";
        var myWindow = window.open("data:text/html," + encodeURIComponent(data),
                       "_blank", "width=1000,height=1000");
                      myWindow.focus();
            });
</script>
</body>
</html>
