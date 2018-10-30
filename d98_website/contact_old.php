<?php

$getar = $_GET;
$getkeys = array_keys($getar);
 
for($i=0; $i<count($getkeys); $i++){
$k = $getkeys[$i];
$v = $getar[$k];
${$k}=$v;
}
 

$getar = $_POST;
$getkeys = array_keys($getar);
 
for($i=0; $i<count($getkeys); $i++){
$k = $getkeys[$i];
$v = $getar[$k];
${$k}=$v;
}


include('admin/dblib.php');
include('admin/func_lib.php');

$sql = "select title, keywords, description, display_name, filename, content, category, maincat_id, subcat_id, header_image, imagefile from content_new where map_url = 'contact.php'";
$qid = db_query($sql);
$result = db_fetch_row($qid);

$meta_title = $result[0];
$meta_keywords = $result[1];
$meta_description = $result[2];
$maincat_id = $result[7];
$display_name = $result[3];
$filename = $result[4];
$content = $result[5];



$sql_temp = "select maincat_name from maincat where maincat_id = '".$maincat_id."'";
$qid_temp = db_query($sql_temp);
$result_temp = db_fetch_row($qid_temp);
$maincat_name = $result_temp[0];


include('header.php');
?>

	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" style="margin:0px 0px 20px; background:#2e2e2e; min-height:500px;" >	
	
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" style="padding:0px; border-bottom: #4e4e4e solid 1px;">
	
				<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-xl-8" style="border-bottom: #4e4e4e solid 1px;">
				<h1 style="font-family: 'Open Sans', sans-serif;font-size: 2.2em; font-weight:300; color:#ffffff; line-height: 42px; float:left;" ><?php echo $display_name;?></h1>
                </div>
				<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4" style="padding-top:30px; text-align:right;">
                	Home &nbsp;/&nbsp; <?php echo $maincat_name; ?> 

				</div>
		</div>
		
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" style="padding:20px 0px;">
		
<?php	


if ($action == "")
{
?>



<script type="text/javascript" src="js/validation/jquery.validate.min.js"></script>
<script type="text/javascript" src="js/validation/additional-methods.min.js"></script>

<script src='https://www.google.com/recaptcha/api.js'></script>	
<script>
$(document).ready(function() {


	var validator = $("#club_form").validate({
	ignore: "",
	rules: {
		name: { required:true, maxlength:20 },
		email: { required:true, email:true},
		contact_no: { required:true},
		keycode: {
        required: function() {
        if (grecaptcha.getResponse() == '') { return true; } else { return false; }
				} 
			}
		},
		
	errorPlacement: function(error, element) {
		$('#' + $(element).attr('id')).parent().next('.error_holder').html(error);
		},

	messages: {
			
		},
	submitHandler: function() {

			document.club_form.submit();
			//alert('submitted');
				
		}
	});
 
});
</script>
<style>
label.error { width:100%; height:auto; margin-top:5px; color: yellow; font-weight:normal;  border:0px solid black; font-family:arial; font-size:12px; }
form input.error { border: 1px dotted red; }
form textarea.error { border: 1px dotted red; }

.error_holder2 { width:300px; height:auto;  float:left; margin-left:150px;}
</style>


	<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-xl-8">

	<form method="post" name="club_form" id="club_form" action="contact.php?action=process">

	<div class="row">

	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" style="margin:20px 0px; color:#efefef;">
	Enter your contact information
	</div>	
	
	<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6" style="margin:10px 0px;">
	
		<div>
		Your Name * 
		<input type="text" class="form-control custom_input_style" name="name" id="name" />
		</div>
		<div class="error_holder"></div>
	</div>
	
	<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6" style="margin:10px 0px;">
		
		<div>
		Your Email Address *
		<input type="text" class="form-control custom_input_style" name="email" id="email" />
		</div>
		<div class="error_holder"></div>
	
	</div>
	
	<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6" style="margin:10px 0px;">
	
		<div>
		Your Contact Number *
		<input type="text" class="form-control custom_input_style" name="contact_no" id="contact_no" />
		</div>
		<div class="error_holder"></div>
	</div>

	<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6" style="margin:10px 0px;">
	Club Name (If member)
	
	<select name="club_name" id="club_name" class="form-control custom_input_style">
	<option value="">Select Club</option>
<?php

		$sql_club = "select club_name from clubs order by club_name";
		$qid_club = db_query($sql_club);
		$num_club = db_num_rows($qid_club);
		
		for ($i=0;$i<=$num_club-1;$i++)
		{
		$result_club = db_fetch_row($qid_club);
		
		echo "<option value=\"".$result_club[0]."\">".$result_club[0]."</option>\n";
		}	
?>	
	
	</select>
	
	
	
	</div>
	
	
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" style="margin:20px 0px; ">
	Remarks / Comments
	<textarea name="remarks" id="remarks" class="form-control custom_input_style" style="height:100px;"></textarea>
	</div>	
	
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" style="margin:20px 0px; ">
	
	<div class="g-recaptcha"  data-sitekey="6LcPly4UAAAAAEkyskmtxn51sPY2tq5NDqJkAoR0"></div>
	<input type='hidden' class='required' name='keycode' id='keycode'>
	
	</div>	
	
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" style="margin:20px 0px; ">
	<input type="submit" value="Submit Request" class="btn btn-primary" style="background:#19455E; border:none;" />
	</div>
	
	</div>
	</form>
	
	
	</div>
	<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
	
	<p>Connect with us:</p>
	
	<p>District Director<br /> <a href="mailto:arvind@district98.org">arvind@district98.org</a></p>
	
	<p>Program Quality Director<br /> <a href="mailto:ravi@district98.org">ravi@district98.org</a></p>
	
	<p>Club Growth Director<br /> <a href="mailto:leo@district98.org">leo@district98.org</a></p>
	
	<p>District Public Relation Manager<br /> <a href="mailto:pr@district98.org">pr@district98.org</a></p>

	<p>Webmaster<br /> <a href="mailto:webmaster@district98.org">webmaster@district98.org</a></p>
	
	</div>
	
	

<?php	
}

if ($action == "process")
{

		$captcha=$_POST['g-recaptcha-response'];
		$response=json_decode(file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6LcPly4UAAAAAE4ZnY8w0_mfDdeKcWtUt45ZvrMA&response=".$captcha."&remoteip=".$_SERVER['REMOTE_ADDR']), true);
        if($response['success'] == true)
		{

		$sql = "insert into contact (post_date, name, email, contact_no, club_name, remarks) values ('".date("Y-m-d")."','".$name."','".$email."','".$contact_no."','".$club_name."','".$remarks."')";
		$qid = db_query($sql);
		
		
		$headers = "From: feedback@district98.org \r\n";
		$headers .= "MIME-Version: 1.0"."\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8"."\r\n";
		
		$msg = "";
		$msg .= "<table cellpadding=\"8\" cellspacing=\"0\" border=\"1\">";
		$msg .= "<tr><td>Name</td><td>".$name."</td></tr>";
		$msg .= "<tr><td>Email</td><td>".$email."</td></tr>";
		$msg .= "<tr><td>Contact No.</td><td>".$contact_no."</td></tr>";
		$msg .= "<tr><td>Club Name</td><td>".$club_name."</td></tr>";
		$msg .= "<tr><td>Remarks</td><td>".$remarks."</td></tr>";
		$msg .= "</table>";
		
		mail("ronb102@gmail.com", "Contact Us - District 98", $msg, $headers);
		mail("cgd@district98.org", "Contact Us - District 98", $msg, $headers);
		mail("webmaster@district98.org", "Contact Us - District 98", $msg, $headers);
		
		echo "<script>\n";
		echo "document.location = \"contact.php?action=thanks\"; \n";
		echo "</script>\n";
		
		
		}
		else
		{
		
		
		echo "Authentication Error. Please contact the site admin.\n";	
		
		}



}
		
if ($action == "thanks")
{

echo "<h4>Thank you for contacting us. Someone will get in touch with you shortly regarding the same.</h4>\n";


}
	
		
?>		
		
		</div>
		
	</div>
	


<?php
include('footer.php');

?>