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
                        url:"<?php echo base_url() ?>visitor/get_province",
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