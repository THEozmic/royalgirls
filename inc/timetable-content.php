<?php
  require_once 'querydb.php';

  $class_id = $_REQUEST["class_id"];

  $subjects = querydb("SELECT * FROM subjects WHERE class_id = '$class_id'");
  $class_name = querydb("SELECT name FROM classes WHERE class_id = '$class_id'")[0]["name"];
  ?>
<section class="content">
      <div class="box">
            <div class="box-header">
              <h3 class="box-title">TimeTable for <?php echo $class_name;?></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Time</th>
                  <th>Monday</th>
                  <th>Tuesday</th>
                  <th>Wednesday</th>
                  <th>Thursday</th>
                  <th>Friday</th>
                </tr>
                </thead>
                <tbody>


  <?php

  foreach ($subjects as $key => $subject) {
   // $teacher_name = querydb("SELECT name FROM teachers WHERE class_id = '$class_id'")[0][];

  }


?>

                <tr>
                  <td>9:00 am - 9:40 am</td>
                  <td>English
                  </td>
                  <td>English</td>
                  <td>Mathematics</td>
                  <td>Mathematics</td>
                  <td>Chemistry</td>
                </tr>
                 <tr>
                  <td>9:40 am - 10:20 am</td>
                  <td>Mathematics</td>
                  <td>Mathematics</td>
                  <td>English</td>
                  <td>Mathematics</td>
                  <td>Chemistry</td>
                </tr>
                 <tr>
                  <td>11:00 am - 11:40 am</td>
                  <td>Chemistry</td>
                  <td>Mathematics</td>
                  <td>Mathematics</td>
                  <td>Mathematics</td>
                  <td>Chemistry</td>
                </tr>
                <tr>
                  <td>12:40 pm - 1:20pm</td>
                  <td>Physics</td>
                  <td>Mathematics</td>
                  <td>Mathematics</td>
                  <td>Mathematics</td>
                  <td>Chemistry</td>
                </tr>
                <tr>
                  <td>2:00 pm - 2:40 pm</td>
                  <td>Biology</td>
                  <td>Mathematics</td>
                  <td>Mathematics</td>
                  <td>Mathematics</td>
                  <td>Chemistry</td>
                </tr>
                <tr>
                  <td>3:20 pm - 4:00 pm</td>
                  <td>Agric</td>
                  <td>Mathematics</td>
                  <td>Mathematics</td>
                  <td>Mathematics</td>
                  <td>Chemistry</td>
                </tr>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
    </section>

<script type="text/javascript">


</script>