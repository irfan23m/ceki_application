<!--  -->
<script type="text/javascript">
	$(document).on('keydown', '#own_password', function(e) {
    if (e.keyCode == 32) return false;
	});

	//validate verification own Username & password
	document.getElementById("own_username").addEventListener("change", e=> {
		var own_username = $('#own_username').val();
    	var own_password = $('#own_password').val();
    	var trimmed_own_username = own_username.trim();
    	var trimmed_own_password = own_password.trim();

		if (!own_username || !trimmed_own_username) {
			document.getElementById("validate_own_username").style.display = "block";
			document.getElementById("validate_own_username").innerHTML = "Username is Required";
			$("#btn_submit").attr("disabled",true);
		} else {
			document.getElementById("validate_own_username").style.display = "none";
			$("#btn_submit").removeAttr("disabled");
			if (!own_password || !trimmed_own_password) {
				$("#btn_submit").attr("disabled",true);
			}
		}    		
	});

	document.getElementById("own_password").addEventListener("change", e=> {
		var own_username = $('#own_username').val();
    	var own_password = $('#own_password').val();
    	var trimmed_own_username = own_username.trim();
    	var trimmed_own_password = own_password.trim();

		if (!own_password || !trimmed_own_password) {
			document.getElementById("validate_own_password").style.display = "block";						
			document.getElementById("validate_own_password").innerHTML = "Password is Required";
			$("#btn_submit").attr("disabled",true);
		} else {
			document.getElementById("validate_own_password").style.display = "none";			
			$("#btn_submit").removeAttr("disabled");
			if (!own_username || !own_username) {
				$("#btn_submit").attr("disabled",true);
			}
		}	
	});
</script>