
    <!-- Activity Area Start -->
    <section class="activity-area section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h1>Instructors</h1>
                    <div class="well">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">First Name</th>
                                    <th scope="col">Middle Name</th>
                                    <th scope="col">Last Name</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $colIndex = 1;
                                foreach ($instructors as $instructor) {
                                    
                                ?>
                                    <tr>
                                        <th scope="row"><?php echo $colIndex ?></th>
                                        <th><?php echo $instructor['firstName'] ?></th>
                                        <th><?php echo $instructor['middleName'] ?></th>
                                        <th><?php echo $instructor['lastName'] ?></th>
                                    </tr>
                                <?php 
                                $colIndex++;
                                } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <p class="text-center">Add Instructor</p>
                        </div>
                        <div id="the-message">
                            
                        </div>
                        <div class="panel-body">
                            <form class="form-horizontal" method="POST" action="<?php echo base_url('admin/addInstructor') ?>" id="addNewInstructorForm" autocomplete="off">
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="instructorIdNumber">ID Number:</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="instructorIdNumber" id="instructorIdNumber">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="instructorFname">First Name:</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="instructorFname" id="instructorFname">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="instructorMname">Middle Name:</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="instructorMname" id="instructorMname">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="instructorLname">Last Name:</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="instructorLname" id="instructorLname">
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="panel-footer">
                            <button type="submit" form="addNewInstructorForm" class="btn btn-primary">Confirm</button>
                        </div>
                    </div>        
                </div>
            </div>
        </div>
    </section>
    <!-- Courses Section End -->

<script>
    $('#addNewInstructorForm').submit(function(e){
        e.preventDefault();

        var instructorDetails = $(this);

        $.ajax({
            type: 'POST',
            dataType: 'json',
            url: instructorDetails.attr('action'),
            data: instructorDetails.serialize(),
            success: function(response){
                if (response.success == true) {
                    // if success we would show message
                    // and also remove the error class
                    $('#the-message').append('<div class="alert alert-success text-center">' +
                    '<span class="glyphicon glyphicon-ok"></span>' +
                    ' New client has been saved.' +
                    '</div>');
                    $('.form-group').removeClass('has-error')
                          .removeClass('has-success');
                    $('.text-danger').remove();
                    // reset the form
                    instructorDetails[0].reset();
                    // close the message after seconds
                    $('.alert-success').delay(500).show(10, function() {
                     $(this).delay(3000).hide(10, function() {
                        $(this).remove();
                      });
                    })
                }else{
                    $.each(response.messages, function(key, value) {
                      var element = $('#' + key);
                      
                      element.closest('div.form-group')
                      .removeClass('has-error')
                      .addClass(value.length > 0 ? 'has-error' : 'has-success')
                      .find('.text-danger')
                      .remove();
                      
                      element.after(value);
                    });
                }
            }
        });
    });
</script>
