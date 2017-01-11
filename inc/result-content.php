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
                    $total_students = querydb("SELECT * FROM students WHERE class_id = '$student_class_id'");
                    $total_students_count = count($total_students);

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
                    $total_ca = $first_resmp_test + $first_class_work + $first_quiz + $first_assignment + $second_quiz + $second_resmp_test + $mid_term_total + $second_class_work + $third_quiz + $second_assignment + $research;
                    $exam = $results[0]["Exam"];
                    $term_total = $total_ca + $exam;
                    $position = $results[0]["Position"];
                    $class_avg = round($term_total / $total_students_count, 2);
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
                  <td><?php print_r($first_resmp_test); ?></td>
                  <td><?php print_r($first_class_work); ?></td>
                  <td><?php print_r($first_quiz); ?></td>
                  <td><?php print_r($first_assignment); ?></td>
                  <td><?php print_r($second_quiz); ?></td>
                  <td><?php print_r($second_resmp_test); ?></td>
                  <td><?php print_r($mid_term_total); ?></td>
                  <td><?php print_r($second_class_work); ?></td>
                  <td><?php print_r($third_quiz); ?></td>
                  <td><?php print_r($second_assignment); ?></td>
                  <td><?php print_r($research); ?></td>
                  <td><?php print_r($total_ca); ?></td>
                  <td><?php print_r($exam); ?></td>
                  <td><?php print_r($term_total); ?></td>
                  <td><?php print_r($position); ?></td>
                  <td><?php print_r($class_avg); ?></td>
                  <td><?php print_r($tutor_remarks); ?></td>
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
                        <button type="submit" class="btn btn-default print" data-tid = "#first_term"><i class="fa fa-print"></i> Print</button>
                      </span>
                </div>
               </div>
          </div>
          </section>
<?php }?>
