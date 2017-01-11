<?php
  require_once 'querydb.php';
  $class_id = $_REQUEST["class"];
  $class = querydb("SELECT * FROM classes WHERE class_id = '$class_id'");
  $class_name = $class[0]["name"];
?>
<section class="content">
      <div class="row">
        <div class="col-xs-12">
         <div class="box">
            <div class="box-header">
              <h3 class="box-title">Students in <?php echo $class_name?></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Photo</th>
                  <th>Name</th>
                  <th>Address</th>
                  <th>Options</th>
                </tr>
                </thead>
                <tbody class="students">


                  <?php

                      $students_list = querydb("SELECT * FROM students WHERE class_id = $class_id");
                      foreach ($students_list as $index => $student) {
                         $student_name = $student["firstname"]." ".$student["middle_name"]." ".$student["lastname"];
                         $student_address = $student["address"];
                         $student_id =  $student["student_id"];

                    ?>
                    <tr>
                    <td><img class="img-rounded img-responsive profile-photo" src="../dist/img/avatar.png"></td>
                    <td><?php echo $student_name;?>
                    </td>
                    <td><?php echo $student_address;?></td>
                    <td>
                    <div class="">
                      <div class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                          <span class="btn btn-default btn-sm">Action</span>
                        </a>
                        <div class="dropdown-menu">
                          <div class="user-header action-menu">
                            <?php if ($user_type == "teacher"): ?>
                                <a href="../teacher/mark-result.php?student=<?php echo $student_id;?>">Mark Result</a>
                            <?php endif; ?>
                            <a href="../general/result.php?student=<?php echo $student_id;?>">Result Sheet</a>
                            <a href="../general/result.php?student=<?php echo $student_id;?>">Transfer Certificate</a>
                            <a href="../teacher/edit-profile.php?student=<?php echo $student_id;?>">Edit Profile</a>
                          </div>
                        </div>
                          </div>
                    </div>
                    </td>
                  </tr>
                <?php
                }?>


                </tbody>
                <tfoot>
                <tr>
                  <th>Photo</th>
                  <th>Name</th>
                  <th>Address</th>
                  <th>Options</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
          </div>
             <!-- /.col -->
          </div>

      <!-- /.row -->
    </section>

<script type="text/javascript">


</script>