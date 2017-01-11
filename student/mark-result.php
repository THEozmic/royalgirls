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
  <?php require_once "../inc/side-bar.php"; ?>
  <?php $page = "Student"; $subpage = "studentinformation"; $subsubpage = $_SERVER["REQUEST_URI"]; $user_type = $_SESSION["user_type"];?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
      <?php require_once "../inc/page-header.inc"; ?>

      <?php require_once "../inc/mark-result-content.php"; ?>


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
      "ordering": false,
      "info": false,
      "autoWidth": false
    });
  });

   //print result function

    $("body").on("click", ".submit", function(){
        var data = queries
        if (jQuery.isEmptyObject(queries)) {
          alert("Please fill in the details before submiting")
        } else {
       $.ajax({
        type: "POST",
        url: "/royalgirls/inc/do_results.php",
        data: { "queries": data},
        success: function(result){
          location.reload();
        }
      })
       }
    });
</script>
</body>
</html>
