<!-- 
	* 3. CSRF
	* Halaman ini jika dilakukan submit akan melakukan redirect ke controller TranskripRequest.
	* dan memanggil fungsi add ().
	* Hal ini bertujuan untuk melakukan request transkrip secara otomatis dengan identitas pengguna,
	* yang diakses dari halaman lain.
	* HAL yang perlu dilakukan adalah MEMATIKAN csrf_protection menjadi false agar dapat melakukan serangan csrf.
	*/
-->

<form method="post" action="/TranskripRequest/add">
	
	<!-- <input type="hidden" name="csrf_token" value=<?php echo $_GET['token'] ?> -->
	
	<label>Your Name</label>
	<input type="text" name="requestUsage">
    
    <select name="requestType">
    	<option value="DPS_ID">$1000</option>
		<option value="DPS_EN">$100</option>
	</select>

	<button type=submit>EARN $$$ QUICKLY</button>

</form>