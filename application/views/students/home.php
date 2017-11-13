<?php include 'student_header.php';?>
<script>
	$(document).ready(function(){
    $(".course_id").click(function(){
		var x = confirm("Are you sure you want to choose this Subject?")
		if (x) {
                                   return true;
                                    } else {
                                            return false;
                                    }
    });
});
</script>
	<?php if($status == '1'){ ?>
	<div class="row">
		<div class="col-md-8 col-md-offset-1">
			<h3 style="margin-bottom: 50px;">
                           <strong> Choose Your Subjects</strong>
            </h3>
		</div>
	</div>	
	<div class='row'>
		<div class="col-lg-3 col-lg-offset-1">
			<div class="form-group">
			<select class="form-control" name="country" id="count" >
						<option value="">Select Department</option>
						<?php foreach( $result as $result ): ?>
						<?php echo $id = $result->dep_id ?>
						<?php  echo $name = $result->dp_name ?>
						<option value="<?= $id;?>"  ><?= $name;?></option>
					<?php endforeach;?>
			</select>
				</div>
			</div>
    </div><?php }else{ 
		echo "<h3>Admition close....</h3>";
	}?>
	<div class='row'>   
		<div class="col-lg-10 col-lg-offset-1">
           	    <table class="table" >
				</table>  
		</div>
    </div>
    <div class="row">
            
    </div>        
    <div id="result" class="col-md-12">
                    
    </div>
        
        
    </div>

<?php include 'student_footer.php'; ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript 
    <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>-->
   
    <script type="text/javascript">
        $(document).ready(function(){
           $('#count').on('change', function(){
                var country_id = $(this).val();
                if(country_id == '')
                {
                    $('#result').prop('disabled', true);
                }
                else
                {	
                    $('#result').prop('disabled', false);
                    $.ajax({
                        url:"<?php echo base_url('student/get_province');?>",
                        type: "POST",
						
                        data: {'country_id' : country_id},
                        dataType: 'json',
                        success: function(data){
                          $("#result").html(data);
                        }, 
                        error: function(){
                            alert('Error occur...!!');
                        }
                    });
                }
           }); 
        });
    </script>
	