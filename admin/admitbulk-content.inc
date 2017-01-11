

 <!-- Main content -->
    <section class="content">
      <!-- Info boxes -->
      <div class="row">
          <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Add new students</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post">
              <div class="box-body">
                <div class="col-xs-12" id="student_entry">

                <div class="row student-row">
                    <div class="col-xs-2">
                      <div form-group><input type="text" class="form-control" id="name" placeholder="First Name"></div>
                    </div>


                     <div class="col-xs-2">
                      <div form-group><input type="text" class="form-control" id="name" placeholder="Middle Name"></div>
                    </div>

                    <div class="col-xs-2">
                      <div form-group><input type="text" class="form-control" id="name" placeholder="Last Name"></div>
                    </div>

                    <div class="col-xs-2">
                      <div form-group><input type="text" class="form-control" id="name" placeholder="Password"></div>
                    </div>

                    <div class="col-xs-2">
                      <div form-group><input type="text" class="form-control" id="name" placeholder="Address"></div>
                    </div>

                     <div class="col-sm-2">
                      <div form-group>
                      <select class="form-control">
                        <option>Gender</option>
                        <option>Male</option>
                        <option>Female</option>
                      </select>
                      </div>
                    </div>

                    <div class="col-xs-1">
                      <div form-group><div class="btn btn-danger btn-flat remove-new-student-row"><i class="fa fa-trash"></i></div></div>
                    </div>

                </div>
                 </div>

                <div class="col-xs-12" id="student_entry_append"></div>

              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                  <div class="col-xs-11">
                   <div class="col-xs-3">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                    <div class="col-xs-3">
                    <div type="submit" class="btn btn-default" id="add-new-student-row"><i class="fa fa-plus"></i> Add new row</div>
                    </div>
                  </div>
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
