<?php 
    /*
    Plugin Name: prem-popup
    Plugin URI: www.premsingh.com.np
    Description: Plugin for displaying custom popup
    Author: Prem Kumar Singh
    Version: 1.0
    Author URI: www.premsingh.com.np
    */
    function prem_test(){
    	if(isset($_POST['premPopupSubmit'])){
    		
    		$to  = 'premsingh57@gmail.com';
    		$subject = 'Parade of Homes 2016';

    		// message
    		$message = '
    		<html>
    		<head>
    		  <title>Parade of Homes 2016</title>
    		</head>
    		<body>
    		  <p></p>
    		  <table>
    		    <tr>
    		      <td>Name:</td><td>'. $_POST['name'] .'</td>
    		    </tr>
    		    <tr>
    		      <td>Email:</td><td>'.$_POST['email'].'</td>
    		    </tr>
    		    <tr>
    		      <td>Phone:</td><td>'.$_POST['phone'] . '</td>
    		    </tr>
    		    <tr>
    		      <td><h2>Prizes:</h2></td>
    		    </tr>';
    		   if(isset($_POST['stayandplay'])){
    		   		$message .= '<tr>
    		      <td>Stay and Play Package(Golf & Hotel)</td>
    		    </tr>';
    		   }
    		   if(isset($_POST['winipad'])){
    		   		$message .= '<tr>
    		      <td>Win An iPad</td>
    		    </tr>';
    		   }
    		   if(isset($_POST['freelisting'])){
    		   		$message .= '<tr>
    		      <td>Free Listing *Save $5,000 on commissions *Home must be over $200,000</td>
    		    </tr>';
    		   }
    		   if(isset($_POST['buyerspackage'])){
    		   		$message .= '<tr>
    		      <td>Buyers Package *$3,000 in closing costs Free Appraisal(Academy) - $500 value,Free Home Inspection. *Home must be over $200,000</td>
    		    </tr>';
    		   }
    		   if(isset($_POST['academyswag'])){
    		   		$message .= '<tr>
    		      <td>Academy Swag Bag(speaker,golf balls,blanket)</td>
    		    </tr>';
    		   }
    		   if(isset($_POST['severalparade'])){
    		   		$message .= '<tr>
    		      <td>Several Parade Tickets for next year</td>
    		    </tr>';
    		   }
    		$message .=
    		    '
    		  </table>
    		</body>
    		</html>
    		';
    		$headers  = 'MIME-Version: 1.0' . "\r\n";
    		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    		mail($to, $subject, $message, $headers);
    		$success = true;
    	}
    	?>
    	<style>
			@import "http://fonts.googleapis.com/css?family=Raleway";
			/*----------------------------------------------
			CSS settings for HTML div Exact Center
			------------------------------------------------*/
			#abc {
			width:100%;
			height:100%;
			opacity:.95;
			top:0;
			left:0;
			display:none;
			position:fixed;
			background-color:#313131;
			overflow:auto
			}
			img#close {
			position:absolute;
			right:-14px;
			top:-14px;
			cursor:pointer
			}
			div#popupContact {
			position:absolute;
			left:45%;
			top:5%;
			margin-left:-202px;
			font-family:'Raleway',sans-serif
			}
			form {
			max-width:500px;
			min-width:250px;
			padding:10px 50px;
			border:2px solid gray;
			border-radius:10px;
			font-family:raleway;
			background-color:#fff
			}
			p {
			margin-top:20px
			}
			h2 {
			background-color:#FEFFED;
			padding:20px 35px;
			margin:-10px -50px;
			text-align:center;
			border-radius:10px 10px 0 0
			}
			hr {
			margin:10px -50px;
			border:0;
			border-top:1px solid #ccc
			}
			input[type=text] {
			width:82%;
			padding:10px;
			margin-top:30px;
			border:1px solid #ccc;
			padding-left:10px;
			font-size:16px;
			font-family:raleway
			}
			#name {
			background-image:url(../images/name.jpg);
			background-repeat:no-repeat;
			background-position:5px 7px
			}
			#email {
			background-image:url(../images/email.png);
			background-repeat:no-repeat;
			background-position:5px 7px
			}
			textarea {
			background-image:url(../images/msg.png);
			background-repeat:no-repeat;
			background-position:5px 7px;
			width:82%;
			height:95px;
			padding:10px;
			resize:none;
			margin-top:30px;
			border:1px solid #ccc;
			padding-left:40px;
			font-size:16px;
			font-family:raleway;
			margin-bottom:30px
			}
			#submit {
			text-decoration:none;
			width:100%;
			text-align:center;
			display:block;
			background-color:#FFBC00;
			color:#fff;
			border:1px solid #FFCB00;
			padding:10px 0;
			font-size:20px;
			cursor:pointer;
			border-radius:5px
			}
			#success{
				text-decoration:none;
			width:100%;
			text-align:center;
			display:block;
			background-color:#FFBC00;
			color:#fff;
			border:1px solid #FFCB00;
			padding:10px 0;
			font-size:20px;
			cursor:pointer;
			border-radius:5px
			}
			span {
			color:red;
			font-weight:700
			}
			button {
			width:10%;
			height:45px;
			border-radius:3px;
			background-color:#cd853f;
			color:#fff;
			font-family:'Raleway',sans-serif;
			font-size:18px;
			cursor:pointer
			}
			.name{
				width: 10%;
			}
    	</style>
    	<script type="text/javascript">
    		// Validating Empty Field
    		function check_empty() {
    		if (document.getElementById('name').value == "" || document.getElementById('email').value == "" || document.getElementById('phone').value == "" ) {
    		alert("Fill All Fields !");
    		} else {
    		document.getElementById('form').submit();
    		alert("Form Submitted Successfully...");
    		}
    		}
    		//Function To Display Popup
    		function div_show() {
    		document.getElementById('abc').style.display = "block";
    		}
    		//Function to Hide Popup
    		function div_hide(){
    		document.getElementById('abc').style.display = "none";
    		}
    	</script>
    	<?php
    }
    function footer_function(){
    	?>
		<!-- Body Starts Here -->
		<div onLoad="div_show();" id="body" style="overflow:hidden;">
		<div id="abc">
		<!-- Popup Div Starts Here -->
		<div id="popupContact">
		<!-- Contact Us Form -->

		<form action="#" id="form" onsubmit="check_empty()" method="POST" name="form">
		<img id="close" src="<?php echo plugins_url( 'prem-popup/images/3.png', dirname(__FILE__) ); ?>" onclick ="div_hide()">
		<h2>Parade of Homes 2016</h2>
		<?php
		if($success){
			?>
			<span id="success">Congratulation!Your Prizes Sent Successfully.</span>
			<?php
		} 
		?>
		
		<hr>
		<input id="name" name="name" placeholder="Name" type="text">
		<input id="email" name="email" placeholder="Email" type="text">
		<input id="phone" name="phone" placeholder="9813477008" type="text">
		<table width="100%" cellpadding="0" cellspacing="0" style="vertical-align:top; padding-top:15px;">
		 <tr style="vertical-align:top">
		  <td class="name"><input id="stayandplay" name="stayandplay" type="checkbox"></td>
		  <td>Stay and Play Package(Golf & Hotel)</td>
		 </tr>
		 <tr style="vertical-align:top">
		  <td><input id="winipad" name="winipad" type="checkbox"></td>
		  <td>Win An iPad</td>
		 </tr>
		 <tr style="vertical-align:top">
		  <td><input type="checkbox" id="freelisting" name="freelisting"></td>
		  <td>Free Listing *Save $5,000 on commissions *Home must be over $200,000</td>
		 </tr>
		 <tr style="vertical-align:top">
		  <td><input type="checkbox" id="buyerspackage" name="buyerspackage"></td>
		  <td>Buyers Package *$3,000 in closing costs Free Appraisal(Academy) - $500 value,Free Home Inspection. *Home must be over $200,000</td>
		 </tr>
		 <tr style="vertical-align:top">
		  <td><input type="checkbox" id="academyswag" name="academyswag"></td>
		  <td>Academy Swag Bag(speaker,golf balls,blanket)</td>
		 </tr>
		 <tr>
		  <td><input type="checkbox" id="severalparade" name="severalparade"></td>
		  <td>Several Parade Tickets for next year</td>
		 </tr>
		 <tr>
		  <td colspan="2">
			<input type="submit" name="premPopupSubmit" id="submit" value="Send"> 
		  	</td>
		 </tr>
		</table>
		</form>
		</div>
		<!-- Popup Div Ends Here -->
		</div>

		</div>
		<script type="text/javascript">
				document.getElementById('abc').style.display = "block";
		</script>
    	<?php
    }
    add_action('wp_head', 'prem_test');

    add_action('wp_footer', 'footer_function');
?>