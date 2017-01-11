

 <!-- Main content -->
    <section class="content">
      <!-- Info boxes -->
      <div class="row">
          <!-- left column -->
        <div class="col-md-8 col-md-offset-2">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Add new Parent</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" class="register-parent-form" action="/royalgirls/inc/do_new_parent.php" method="POST" enctype="multipart/form-data">
              <div class="box-body">
                <div class="col-xs-4">
                <div class="form-group">
                    <label for="name">First Name</label>
                      <input type="text" class="form-control" id="name" placeholder="Enter Parent First Name" name="firstname">
                  </div>
                </div>

                <div class="col-xs-4">
                <div class="form-group">
                    <label for="name">Middle Name</label>
                      <input type="text" class="form-control" id="name" placeholder="Enter Parent Middle Name" name="middle_name">
                  </div>
                </div>

                <div class="col-xs-4">
                <div class="form-group">
                    <label for="name">Last Name</label>
                      <input type="text" class="form-control" id="name" placeholder="Enter Parent Last Name" name="last_name">
                  </div>
                </div>

               <!-- <div class="col-xs-12">
                  <div class="form-group">
                    <label for class>Class</label>
                    <select class="form-control" name="class_id" id="class">
                      <option value="0">Select</option>
                      <?php $classes = querydb("SELECT name , class_id FROM classes");
                        foreach ($classes as $key => $class) {
                         ?>
                          <option value="<?php echo $class["class_id"]; ?>"><?php echo $class["name"]; ?></option>
                         <?php
                        }
                       ?>
                    </select>
                  </div>
                </div>-->

                <div class="col-xs-12">
                <div class="form-group">
                    <label for="name">Email</label>
                      <input type="email" class="form-control" id="name" placeholder="Enter Parent Email" name="email">
                  </div>
                </div>

                <div class="col-xs-12">
                <div class="form-group">
                    <label for="name">Password</label>
                      <input type="text" class="form-control" id="name" placeholder="Enter Parent Password" name="pass_word">
                  </div>
                </div>

                <div class="col-xs-12">
                  <div class="form-group">
                      <label for="name">Address</label>
                      <input type="text" class="form-control" id="name" placeholder="Enter Parent Address" name="address">
                  </div>
                </div>

                <div class="col-xs-12">
                  <div class="form-group">
                      <label for="name">phone</label>
                      <input type="text" class="form-control" id="name" placeholder="Enter Parent Phone Number" name="phone">
                  </div>
                </div>

                <div class="col-xs-12">
                  <div class="form-group">
                      <label for="name">prof</label>
                      <input type="text" class="form-control" id="name" placeholder="Enter Parent Prof" name="prof">
                  </div>
                </div>

                <div class="col-xs-12">
                  <div class="form-group">
                    <label for class>Gender</label>
                    <select class="form-control" name="gender">
                      <option value="0">Select</option>
                      <option value="M">Male</option>
                      <option value="F">Female</option>
                    </select>
                  </div>
                </div>

               <div class="col-xs-12">
                <div class="form-group">
                <label for="name">Photo</label>
                     <div class="imageupload panel panel-default">
                        <div class="panel-heading clearfix">
                      <h3 class="panel-title pull-left">Upload Image</h3>
                      <div class="btn-group pull-right">
                          <button type="button" class="btn btn-default active">File</button>
                          <button type="button" class="btn btn-default">URL</button>
                      </div>
                  </div>
                  <div class="file-tab panel-body">
                      <label class="btn btn-default btn-file">
                          <span>Browse</span>
                          <!-- The file is stored here. -->
                          <input type="file" name="photo">
                      </label>
                      <button type="button" class="btn btn-default">Remove</button>
                  </div>
                  <div class="url-tab panel-body">
                      <div class="input-group">
                          <input type="text" class="form-control" placeholder="Image URL">
                          <div class="input-group-btn">
                              <button type="button" class="btn btn-default">Submit</button>
                          </div>
                      </div>
                      <button type="button" class="btn btn-default">Remove</button>
                      <!-- The URL is stored here. -->
                      <input type="hidden" name="photo">
                  </div>
              </div>
                  </div>
                </div>

              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                  <div class="col-xs-12">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
              </div>
            </form>
          </div>
          <!-- /.box -->
        </div>
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
<script type="text/javascript">
    $("body").on("submit", ".register-parent-form", function () {
      var url = $(this).attr("action")
      var formData = new FormData($(this)[0])
      var class_id = $("#class").val();

      $.ajax({
                      url: url, "do_new_parent.php",
                      type: 'POST',
                      data: formData,
                      async: true,
                      error: function () {

              },
                      success: function (data) {
                        alert("Parent Registered");
                        //window.location.href = "/royalgirls/admin/index.php?class="+class_id
                      },
                      cache: false,
                      contentType: false,
                      processData: false
                  })
      return false
    })
  </script>