<?php
  require_once 'querydb.php';
  $teacher_id = $_REQUEST["id"];
  $teacher = querydb("SELECT * FROM teachers WHERE id = '$teacher_id'");
  $teacher_name = $teacher[0]["firstname"]." ".$teacher[0]["middle_name"]." ".$teacher[0]["lastname"];
?>
<section class="content">
      <div class="row">
        <div class="col-xs-12">
         <div class="box">
            <div class="box-header">
              <h3 class="box-title"><?php echo $teacher_name; ?></h3>
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