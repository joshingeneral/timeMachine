<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>The RainbowWare Project</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body bgcolor="#999999">

<table  width="800" cellpadding='20' align='center'>
	  <tr> 
			<td width="89%" bgcolor="#000000"> <font color="#CCCCCC">
			<img width="360" src="images/delorean.jpg">
			   <br>This project allows users to send Email into the future and into the past. <br>
			  <br>
			  Hope you enjoy, <br>
			  TheGeneral </font> 
			 </td>
			 <td>
			  <form method="post" action="sendeail.php">

				  <!-- DO NOT change ANY of the php sections -->
				  <?php
				$ipi = getenv("REMOTE_ADDR");
				$httprefi = getenv ("HTTP_REFERER");
				$httpagenti = getenv ("HTTP_USER_AGENT");
				?>
				  <input type="hidden" name="ip" value="<?php echo $ipi ?>" />
				  <input type="hidden" name="httpref" value="<?php echo $httprefi ?>" />
				  <input type="hidden" name="httpagent" value="<?php echo $httpagenti ?>" />
					<font color="#CCCCCC">Your Name: </font><br />
				  <input type="text" name="visitor" size="35" />
				  <br />
						<font color="#CCCCCC">Your Email:</font><br />
				  <input type="text" name="visitormail" size="35" />
				  <br />
						<font color="#CCCCCC">Send to:</font><br />
				  <input type="text" name="sendTo" size="35" />
				  <br />
				  <font color="#CCCCCC">Date to deliver Email:</font><br />
				  <input type="text" name="date" size="35" value="Fri, 18 Dec 2011 00:24:34 -0700"  />
				  
				  <br />
				  <!--  Attention:<br />
				  <select name="attn" size="1">
					<option value=" Sales n Billing ">Sales n Billing </option>
					<option value=" General Support ">General Support </option>
					<option value=" Technical Support ">Technical Support </option>
					<option value=" Webmaster ">Webmaster </option>
				  </select> ! -->
					  <br />
						<font color="#CCCCCC">Mail Message: </font><br />
						<textarea name="content" rows="4" cols="40"></textarea>
					  <br />
					  <input type="submit" value="Send Mail" />
					  <br />
					  </strong> 
					</form>
			</td>
		</tr>
	</table>

</body>
</html>