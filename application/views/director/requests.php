<?php include 'student_header.php'; ?>
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
            <td><?php echo $data->roll_number?></td>
            <td><?php echo $data->courses_id?></td>
            <td><?php echo $data->description?></td>

            <td style="display: flex">

                <form class="accept teacher-form" style="margin: 1%" action="<?php echo base_url('dean/resp_req/6');?>" method="POST" >
                    <fieldset>
                        <input type="hidden" name="id" value="<?php echo $data->id ?>"  >
                        <input type="hidden" name="des_data" value="<?php echo $data->description;?>"  >
                        <button type="submit" class="btn btn-primary">Accept</button>
                    </fieldset>
                </form>


                <form class="reject teacher-form" style="margin: 1%" action="<?php echo base_url('dean/resp_req/5');?>" method="POST" >
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