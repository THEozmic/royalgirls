<?php include_once '../inc/querydb.php'; ?>
<!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p> <?php echo $_SESSION['name']; ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="">
          <a href="http://fissioncoin9ja.com/royalgirls/<?php echo $_SESSION["user_type"]; echo '/'; ?>">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-users"></i>
            <span>Students</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li ><a href="admitstudent.php"><i class="fa fa-circle-o"></i> Admit Student</a></li>
            <li ><a href="#"><i class="fa fa-circle-o"></i> Student Infromation
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>

                 <ul class="treeview-menu">
                    <?php

                      $classes = querydb("SELECT * FROM classes");

                      foreach ($classes as $index => $class) {

                    ?>
                      <li><a href="studentinformation.php?class=<?php echo $class["class_id"]?>"><i class="fa fa-circle-o"></i> <?php echo $class["name"]?></a></li>
                      <?php
                         # code...
                        }
                      ?>

                  </ul>
            </li>
            <li ><a href="#"><i class="fa fa-circle-o"></i> Student Promotion</a></li>
              <li ><a href="#"><i class="fa fa-circle-o"></i> Comments Card</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-magic"></i>
            <span>Teachers</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li ><a href="registerteacher.php"><i class="fa fa-circle-o"></i> Register Teacher</a></li>
            <li ><a href="#"><i class="fa fa-circle-o"></i> Teacher Infromation
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>

                 <ul class="treeview-menu">
                    <?php

                      $teachers = querydb("SELECT * FROM teachers");

                      foreach ($teachers as $index => $teacher) {

                    ?>
                      <li><a href="teacherinformation.php?id=<?php echo $teacher["id"]?>"><i class="fa fa-circle-o"></i> <?php echo $teacher["firstname"]." ".$teacher["lastname"]?></a></li>
                      <?php
                         # code...
                        }
                      ?>

                  </ul>
            </li>
          </ul>
        </li>
        <li>
          <a href="#">
            <i class="fa fa-user"></i>
            <span>Parents</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="registerparent.php"><i class="fa fa-circle-o"></i>Register parents</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-book"></i>
            <span>Classes</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="manageclasses.php"><i class="fa fa-circle-o"></i> Manage Classes</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Manage Sections</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Academic Syllabus</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-newspaper-o"></i> <span>Subjects</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
          <?php

            $classes = querydb("SELECT * FROM classes");

            foreach ($classes as $index => $class) {

          ?>
            <li><a href="#"><i class="fa fa-circle-o"></i> <?php echo $class["name"]?></a></li>
            <?php
               # code...
              }
            ?>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-calendar"></i> <span>Time Table</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <?php

            $classes = querydb("SELECT * FROM classes");

            foreach ($classes as $index => $class) {

          ?>
            <li><a href="timetable.php?class_id=<?php echo $class['class_id']?>"><i class="fa fa-circle-o"></i> <?php echo $class["name"]?></a></li>
            <?php
               # code...
              }
            ?>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-signal"></i> <span>Attendance</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i> Mark Attendance</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Attendance Report</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-check-square-o"></i> <span>Exam</span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i> Mark Attendance</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Attendance Report</a></li>
          </ul>
        </li>
        <li>
          <a href="#">
            <i class="fa fa-bell"></i> <span>Noticeboard</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-yellow">10</small>
            </span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="fa fa-envelope"></i> <span>Messages</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green">4</small>
            </span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="fa fa-bed"></i> <span>Dormitory</span>
          </a>
        </li>

        <li><a href="#"><i class="fa fa-book"></i> <span>Library</span></a></li>

        <li>
          <a href="#">
            <i class="fa fa-exchange"></i> <span>Ordering</span>
          </a>
        </li>

        <li>
          <a href="#">
            <i class="fa fa-bookmark"></i> <span>Appointments</span>
          </a>
        </li>

        <li>
          <a href="#">
            <i class="fa fa-bell"></i> <span>School Bells</span>
          </a>
        </li>

        <li>
          <a href="#">
            <i class="fa fa-bed"></i> <span>Dormitory</span>
          </a>
        </li>

        <li>
          <a href="#">
            <i class="fa fa-clone"></i> <span>Inventory</span>
          </a>
        </li>

        <li>
          <a href="#">
            <i class="fa fa-bus"></i> <span>School Club</span>
          </a>
        </li>

        <li>
          <a href="#">
            <i class="fa fa-briefcase"></i> <span>One on One Schedule</span>
          </a>
        </li>

        <li>
          <a href="#">
            <i class="fa fa-clipboard"></i> <span>Reports</span>
          </a>
        </li>

        <li>
          <a href="#">
            <i class="fa fa-hourglass-2"></i> <span>Prefect Evaluation</span>
          </a>
        </li>

        <li>
          <a href="#">
            <i class="fa fa-mortar-board"></i> <span>Graduation Form</span>
          </a>
        </li>

        <li>
          <a href="#">
            <i class="fa fa-percent"></i> <span>Reviews</span>
          </a>
        </li>

        <li>
          <a href="#">
            <i class="fa fa-user-plus"></i> <span>Staff</span>
          </a>
        </li>

        <li>
          <a href="#">
            <i class="fa fa-medkit"></i> <span>Health</span>
          </a>
        </li>

        <li>
          <a href="#">
            <i class="fa fa-calendar"></i> <span>Work Schedule</span>
          </a>
        </li>

        <li>
          <a href="#">
            <i class="fa fa-user-secret"></i> <span>Staff Clocking</span>
          </a>
        </li>

        <li>
          <a href="#">
            <i class="fa fa-tag"></i> <span>Events</span>
          </a>
        </li>

        <li>
          <a href="#">
            <i class="fa fa-tasks"></i> <span>Tracking</span>
          </a>
        </li>

        <li>
          <a href="#">
            <i class="fa fa-envelope"></i> <span>Memos and Letters</span>
          </a>
        </li>

        <li>
          <a href="#">
            <i class="fa fa-arrow-circle-down"></i> <span>Notifications</span>
          </a>
        </li>

        <li>
          <a href="#">
            <i class="fa fa-edit"></i> <span>Forms</span>
          </a>
        </li>

        <li>
          <a href="#">
            <i class="fa fa-archive"></i> <span>Star Program</span>
          </a>
        </li>

        <li>
          <a href="#">
            <i class="fa fa-exclamation-triangle"></i> <span>Complaints</span>
          </a>
        </li>

        <li class="header">REMINDERS</li>
        <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span class="reminder">Announce Public Holiday Tomorrow</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>