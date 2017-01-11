<!DOCTYPE html>
<html>
<head>
    <?php require_once "../inc/head.inc"; ?>
    <!-- Image uploader Styles -->
    <link href="../plugins/imageuploader/css/bootstrap-imageupload.css" rel="stylesheet">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
 <?php $pagename = "Students"; $subpagename = "Admit Bulk Student"; $pageicon = "fa fa-users"; $subpageicon = "fa fa-circle-o";?>

  <?php require_once "../inc/header.inc"; ?>
  <?php require_once "../inc/side-bar.php"; ?>
  <?php getSideBar("Student", "admitbulkstudent", null, null, "admin")?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
      <?php require_once "../inc/page-header.inc"; ?>

      <?php require_once "../inc/admitbulk-content.inc"; ?>


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
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>

<!-- Image Uploader plugin -->
 <script src="../plugins/imageuploader/js/bootstrap-imageupload.js"></script>

<!-- Page Script -->
<script type="text/javascript">
     //add new student row
     var blank_student_entry = '';
     $(document).ready( function() {
        blank_student_entry = $('#student_entry').html();
     });

    $('body').on("click", "#add-new-student-row", function(){
        $("#student_entry").append(blank_student_entry);
    });

    //remove new student row

     $('body').on("click", ".remove-new-student-row", function(){
          ﻿﻿﻿if ( $(".student-row").length > 1) {
              this.closest(".student-row").remove();
          }
    });

</script>
</body>
</html>
