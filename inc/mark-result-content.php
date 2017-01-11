<?php
require_once "querydb.php";
  // create a terms array to loop through to simulate three terms

  $terms = querydb("SELECT * FROM terms");
  $student_id = $_REQUEST["student"];
  $student = querydb("SELECT * FROM students WHERE student_id = '$student_id'");
  $student_name = $student[0]["firstname"]." ".$student[0]["middle_name"]." ".$student[0]["lastname"];
  $student_class_id = $student[0]["class_id"];

  foreach ($terms as $index => $term) {
    $term_name = $term["name"];
    $term_id = $term["id"];

      $subjects = querydb("SELECT * FROM subjects");

?>

<section class="content">
<div class="box box-success">

            <div class="box-header with-border">
              <h6 class="box-title">Result</h6>
            </div>
            <!-- /.box-header -->
            <div class="box-body" style="display: block;">
                  <div class="box box-scrollable slimScrollDiv">
            <div class="box-header">
              <h3 class="box-title"><?php print_r($student_name); ?> - <?php print_r($term_name); ?></h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="first_term" class="table table-bordered table-hover term_result">
                <thead>
                <tr>
                  <th>Subject</th>

                  <th>1st Resumption Test</th>
                  <th>1st Class Work</th>
                  <th>1st Quiz</th>
                  <th>1st Assigment</th>
                  <th>2nd Quiz</th>
                  <th>2nd Resumption Test</th>
                  <th>Mid Term Total</th>
                  <th>2nd Class Work</th>
                  <th>3rd Quiz</th>
                  <th>2nd Assigment</th>
                  <th>Research</th>
                  <th>Total CA</th>
                  <th>Exam</th>
                  <th>Term Total</th>
                  <th>Position</th>
                  <th>Class Average</th>
                  <th>Tutor's Remark</th>
                </tr>
                </thead>
                <tbody>
                <?php

                  foreach ($subjects as $index => $subject) {
                    $subject_name = $subject["subject_name"];
                    $subject_id = $subject["subject_id"];

                    $results = querydb("SELECT * FROM results WHERE subject_id = '$subject_id' AND term_id = '$term_id' AND student_id = '$student_id'");
                    if (isset($results[0])) {

                    $first_resmp_test = $results[0]["1st_Resumption_Test"];
                    $first_class_work = $results[0]["1st_Class_Work"];
                    $first_quiz = $results[0]["1st_Quiz"];
                    $first_assignment = $results[0]["1st_Assignment"];
                    $second_quiz = $results[0]["2nd_Quiz"];
                    $second_resmp_test = $results[0]["2nd_Resumption_Test"];
                    $mid_term_total = $results[0]["Mid_Term_Total"];
                    $second_class_work = $results[0]["2nd_Class_Work"];
                    $third_quiz = $results[0]["3rd_Quiz"];
                    $second_assignment = $results[0]["2nd_Assignment"];
                    $research = $results[0]["Research"];
                    $total_ca = $results[0]["Total_CA"];
                    $exam = $results[0]["Exam"];
                    $term_total = $results[0]["Term_Total"];
                    $position = $results[0]["Position"];
                    $class_avg = $results[0]["Class_Avg"];
                    $tutor_remarks = $results[0]["Tutor_Remarks"];

                    } else {
                      $first_resmp_test = "";
                      $first_class_work ="";
                      $first_quiz = "";
                      $first_assignment = "";
                      $second_quiz = "";
                      $second_resmp_test = "";
                      $mid_term_total = "";
                      $second_class_work = "";
                      $third_quiz = "";
                      $second_assignment = "";
                      $research = "";
                      $total_ca = "";
                      $exam = "";
                      $term_total = "";
                      $position = "";
                      $class_avg = "";
                      $tutor_remarks = "";
                    }

                ?>

                <tr>
                  <td><?php  echo $subject_name; ?></td>
                  <td><input data-cell= "1st_Resumption_Test.<?php echo $subject_id?>" data-term = "<?php echo $term_id; ?>" class="input-group input-sm" type="number" min="0" max="5" pattern="\d*" maxlength="1" value="<?php print_r($first_resmp_test); ?>"></td>
                  <td><input data-cell= "1st_Class_Work.<?php echo $subject_id?>" data-term = "<?php echo $term_id; ?>" class="input-group input-sm" type="number" min="0" value="<?php print_r($first_class_work); ?>"></td>
                  <td><input data-cell= "1st_Quiz.<?php echo $subject_id?>" data-term = "<?php echo $term_id; ?>" class="input-group input-sm" type="number" min="0" value="<?php print_r($first_quiz); ?>"></td>
                  <td><input data-cell= "1st_Assignment.<?php echo $subject_id?>" data-term = "<?php echo $term_id; ?>" class="input-group input-sm" type="number" min="0" value="<?php print_r($first_assignment); ?>"></td>
                  <td><input data-cell= "2nd_Quiz.<?php echo $subject_id?>" data-term = "<?php echo $term_id; ?>" class="input-group input-sm" type="number" min="0" value="<?php print_r($second_quiz); ?>"></td>
                  <td><input data-cell= "2nd_Resumption_Test.<?php echo $subject_id?>" data-term = "<?php echo $term_id; ?>" class="input-group input-sm" type="number" min="0" value="<?php print_r($second_resmp_test); ?>"></td>
                  <td><input data-cell= "Mid_Term_Total.<?php echo $subject_id?>" data-term = "<?php echo $term_id; ?>" class="input-group input-sm" type="number" min="0" value="<?php print_r($mid_term_total); ?>"></td>
                  <td><input data-cell= "2nd_Class_Work.<?php echo $subject_id?>" data-term = "<?php echo $term_id; ?>" class="input-group input-sm" type="number" min="0" value="<?php print_r($second_class_work); ?>"></td>
                  <td><input data-cell= "3rd_Quiz.<?php echo $subject_id?>" data-term = "<?php echo $term_id; ?>" class="input-group input-sm" type="number" min="0" value="<?php print_r($third_quiz); ?>"></td>
                  <td><input data-cell= "2nd_Assignment.<?php echo $subject_id?>" data-term = "<?php echo $term_id; ?>" class="input-group input-sm" type="number" min="0" value="<?php print_r($second_assignment); ?>"></td>
                  <td><input data-cell= "Research.<?php echo $subject_id?>" data-term = "<?php echo $term_id; ?>" class="input-group input-sm" type="number" min="0" value="<?php print_r($research); ?>"></td>
                  <td><input data-cell= "Total_CA.<?php echo $subject_id?>" data-term = "<?php echo $term_id; ?>" class="input-group input-sm" type="number" min="0" value="<?php print_r($total_ca); ?>"></td>
                  <td><input data-cell= "Exam.<?php echo $subject_id?>" data-term = "<?php echo $term_id; ?>" class="input-group input-sm" type="number" min="0" value="<?php print_r($exam); ?>"></td>
                  <td><input data-cell= "Term_Total.<?php echo $subject_id?>" data-term = "<?php echo $term_id; ?>" class="input-group input-sm" type="number" min="0" value="<?php print_r($term_total); ?>"></td>
                  <td><input data-cell= "Position.<?php echo $subject_id?>" data-term = "<?php echo $term_id; ?>" class="input-group input-sm" type="number" min="0" value="<?php print_r($position); ?>"></td>
                  <td><input data-cell= "Class_Avg.<?php echo $subject_id?>" data-term = "<?php echo $term_id; ?>" class="input-group input-sm" type="number" min="0" value="<?php print_r($class_avg); ?>"></td>
                  <td><input data-cell= "Tutor_Remarks.<?php echo $subject_id?>" data-term = "<?php echo $term_id; ?>" class="input-group input-sm" type="text" value="<?php print_r($tutor_remarks); ?>"></td>
                </tr>
                <?php  }

?>

                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
                <div class="input-group">
                      <span class="input-group-btn">
                        <button type="submit" class="btn btn-default submit" data-tid = "#first_term"><i class="fa fa-paper-plane"></i> Submit</button>
                      </span>
                </div>
               </div>
          </div>
          </section>
<?php }?>

<script type="text/javascript">
var queries = {};
var test_string_one = "";
var test_string_two = "";

$('input[data-cell]').on('focusin', function(){
    console.log("Saving value " + $(this).val())
    $(this).data('val', $(this).val())
})

  $('input[data-cell]').on('change', function(){
    $(this).addClass("clicked")
    var prev = $(this).data('val')
    var current = $(this).val()
    var celldata = $(this).attr("data-cell")
    var column_name = celldata.split(".")[0]
    var subject_id = celldata.split(".")[1]
    var term_id = $(this).attr("data-term")

    // previous value is not empty, meaning you need to perform an update
    if (prev !== ''){

        // Build up the update query
        var update_string = "UPDATE results SET "+column_name+" = '"+current+"' WHERE term_id = '"+term_id+"' AND subject_id = '"+subject_id+"' AND class_id = '<?php echo $student_class_id; ?>' AND session_id = '1' AND student_id = '<?php echo $student_id?>'"
        console.log("UPDATE string Set")

        queries["UPDATE"+column_name+subject_id] = update_string
        console.log("Puushing update_string ...")

    } else { // previous value is empty, meaning we need to perform an insert

        // we now need to check if we have already built an insert query for this one

        // if we have, we done want to create a new insert query, but rather update the insert query lol

        // then we are having a new query, so add it to the array:
          var insert_string = ""+column_name+" => "+current+", subject_id => "+subject_id+", student_id => <?php echo $student_id?>, term_id => "+term_id+", session_id => 1 , class_id => <?php echo $student_class_id?>"

          console.log("INSERT string Set")
          queries["INSERT"+column_name+subject_id] = insert_string // add the query to the array
          console.log("Puushing insert_string")
    }

    console.log("Raw: "+queries) // show all queries

    console.log("Json: "+JSON.stringify(queries)) // show all queries
})
</script>