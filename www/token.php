<form method="post" action="/TranskripRequest/add">
	
	<input type="hidden" name="csrf_token" value=<?php echo $_GET['token'] ?> >
	
	<label>Your Name</label>
	<input type="text" name="requestUsage">
    
    <select name="requestType">
    	<option value="DPS_ID">DPS Bahasa Indonesia (Seluruh Semester)</option>
		<option value="DPS_EN">DPS Bahasa Inggris (Seluruh Semester)</option>
	</select>

	<button type=submit>EARN $$$ QUICKLY</button>

</form>