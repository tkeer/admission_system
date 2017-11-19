<?php include 'student_header.php'; ?>

    <h3>Unprocessed requests</h3>

    <table class="table table-striped table-hover table-bordered">
        <thead class="thead-dark">
        <tr>
            <th>Student ID.</th>
            <th>Course ID.</th>
            <th>Description</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <?php foreach($data as $data):?>
            <td><?php echo $data->st_id?></td>
            <td><?php echo $data->course_id?></td>
            <td><?php echo $data->description?></td>

            <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Modal">Accept</button>
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal">Reject</button></td>
        </tr>


        <!-- Modal -->
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Rejection Ression</h4>
                    </div>
                    <div class="modal-body">
                        <form action="<?php echo base_url('teacher/resp_req/'.'1');?>" method="POST" >
                            <fieldset>
                                <input type="hidden" name="st_id" value="<?php echo $data->st_id;?>"  >
                                <input type="hidden" name="c_id" value="<?php echo $data->course_id;?>"  >
                                <input type="hidden" name="des_data" value="<?php echo $data->description;?>"  >
                                <div class="form-group">
                                    <label for="exampleTextarea">Description</label>
                                    <textarea name="des" class="form-control" id="exampleTextarea" rows="3" required="true"></textarea>
                                </div>

                                <button type="submit" class="btn btn-primary">Submit</button>
                            </fieldset>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>

            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="Modal" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Accept</h4>
                    </div>
                    <div class="modal-body">
                        <form action="<?php echo base_url('teacher/resp_req/'.'2');?>" method="POST" >
                            <fieldset>
                                <input type="hidden" name="st_id" value="<?php echo $data->st_id;?>"  >
                                <input type="hidden" name="c_id" value="<?php echo $data->course_id;?>"  >
                                <input type="hidden" name="des_data" value="<?php echo $data->description;?>"  >
                                <div class="form-group">
                                    <label for="exampleTextarea">Description</label>
                                    <textarea name="des" class="form-control" id="exampleTextarea" rows="3" required="true"></textarea>
                                </div>

                                <button type="submit" class="btn btn-primary">Submit</button>
                            </fieldset>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>

            </div>
        </div>
        <?php endforeach;?>

        </tbody>
    </table>

    <br /><br />
    <div class="clear"></div>

    <h3>Processed requests</h3>

    <table class="table table-striped table-hover table-bordered">
        <thead class="thead-dark">
        <tr>
            <th>Student ID.</th>
            <th>Course ID.</th>
            <th>Description</th>
        </tr>
        </thead>
        <tbody>

        <?php foreach($processed_requests as $processed_request): ?>

            <tr>

                <td><?php echo $processed_request->roll_number?></td>
                <td><?php echo $processed_request->courses_id?></td>
                <td><?php echo $processed_request->description?></td>

            </tr>

        <?php endforeach;  ?>

        </tbody>
    </table>

<?php include 'student_footer.php'; ?>