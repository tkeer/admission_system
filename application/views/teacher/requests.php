<?php include 'student_header.php'; ?>

    <h3>Unprocessed requests</h3>

    <table class="table table-striped table-hover table-bordered">
        <thead class="thead-dark">
        <tr>
            <th>Student ID.</th>
            <th>Course ID.</th>
            <th>Section</th>
            <th>Description</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <?php foreach($data as $data):?>
            <td><?php echo $data->roll_number?></td>
            <td><?php echo $data->courses_id?></td>
            <td><?php echo $data->section?></td>
            <td><?php echo $data->description?></td>

            <td style="display: flex">

                <form class="accept teacher-form" style="margin: 1%" action="<?php echo base_url('teacher/resp_req/2');?>" method="POST" >
                    <fieldset>
                        <input type="hidden" name="id" value="<?php echo $data->id ?>"  >
                        <input type="hidden" name="des_data" value="<?php echo $data->description;?>"  >
                        <button type="submit" class="btn btn-primary">Accept</button>
                    </fieldset>
                </form>


                <form class="reject teacher-form" style="margin: 1%" action="<?php echo base_url('teacher/resp_req/1');?>" method="POST" >
                    <fieldset>
                        <input type="hidden" name="id" value="<?php echo $data->id ?>"  >
                        <input type="hidden" name="des_data" value="<?php echo $data->description;?>"  >
                        <button type="submit" class="btn btn-danger">Reject</button>
                    </fieldset>
                </form>

            </td>
        </tr>


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
            <th>Section</th>
            <th>Description</th>
            <th>Status</th>
        </tr>
        </thead>
        <tbody>

        <?php foreach($processed_requests as $processed_request): ?>

            <tr>

                <td><?php echo $processed_request->roll_number?></td>
                <td><?php echo $processed_request->courses_id?></td>
                <td><?php echo $processed_request->section?></td>
                <td><?php echo $processed_request->description?></td>
                <td><?php echo ($processed_request->admin_id == -1 ? 'Rejected by you!' : 'Accepted by you!')?></td>

            </tr>

        <?php endforeach;  ?>

        </tbody>
    </table>


<script>
    $(function () {

        $(".accept").on('submit', function () {

            return confirm('Are you sure to accept?');

        });


        $(".reject").on('submit', function () {

            return confirm('Are you sure reject?');

        });


    })
</script>


<?php include 'student_footer.php'; ?>