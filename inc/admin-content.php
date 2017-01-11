 <?php
  require_once 'querydb.php';
  $number_of_students = querydb("SELECT COUNT(*) FROM students")[0]["COUNT(*)"];
  $number_of_staffs = querydb("SELECT COUNT(*) FROM teachers")[0]["COUNT(*)"];
  $number_of_parents = querydb("SELECT COUNT(*) FROM parents")[0]["COUNT(*)"];

?>

 <!-- Main content -->
    <section class="content">
      <!-- Info boxes -->
      <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="ion ion-ios-people"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Number of Staff</span>
              <span class="info-box-number"><?php print_r($number_of_staffs); ?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-red"><i class="ion-ios-person"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Number of Students</span>
              <span class="info-box-number"><?php print_r($number_of_students); ?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="ion-person-stalker"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Number of Parents</span>
              <span class="info-box-number"><?php print_r($number_of_parents); ?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="ion-stats-bars"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Attendance Today</span>
              <span class="info-box-number">2,000</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->


    </section>
    <!-- /.content -->