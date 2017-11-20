<?php include 'student_header.php';?>


<div class="row">
    <div class="col-md-5 col-md-offset-3">
        <h3 style="margin-bottom: 50px;">
            For Registration Open
        </h3>
    </div>
    <div class="col-md-4">
        <?php $i=1;?>
        <?php  echo anchor("admin/ad_open/1",'OPEN',['class'=>'btn btn-primary but_pri']);?>
        <?php  echo anchor("admin/ad_close/0",'CLOSE',['class'=>'btn btn-primary but_pri']);?>
    </div>
</div>


<?php include 'student_footer.php'; ?>
