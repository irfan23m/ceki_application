<!-- -->
<script type="text/javascript">
	//--------VALIDATE PLAYER NAME REGISTER---------
	var validate_msg = "Name is Required";

	document.getElementById("player_1").addEventListener("change", e => {
  		var player_1 = $('#player_1').val();
  		var player_2 = $('#player_2').val();
  		var player_3 = $('#player_3').val();
  		var player_4 = $('#player_4').val();

 		var trimmed_p1 = player_1.trim();
 		var trimmed_p2 = player_2.trim();
 		var trimmed_p3 = player_3.trim();
 		var trimmed_p4 = player_4.trim();

		if (!player_1 || !trimmed_p1) {
			document.getElementById("player_1").focus();
			document.getElementById("validate_player_1").innerHTML = validate_msg;
			document.getElementById("validate_player_1").style.display = "block";
			$("#btn_play").attr("disabled", true);
		} else {
			document.getElementById("validate_player_1").style.display = "none";
			$("#btn_play").removeAttr("disabled");

			if (!player_2 || !trimmed_p2 || !player_3 || !trimmed_p3 || !player_4 || !trimmed_p4) {
				$("#btn_play").attr("disabled",true);
			}
		}
	});
	document.getElementById("player_2").addEventListener("change", e => {
  		var player_1 = $('#player_1').val();
  		var player_2 = $('#player_2').val();
  		var player_3 = $('#player_3').val();
  		var player_4 = $('#player_4').val();

 		var trimmed_p1 = player_1.trim();
 		var trimmed_p2 = player_2.trim();
 		var trimmed_p3 = player_3.trim();
 		var trimmed_p4 = player_4.trim();

		if (!player_2 || !trimmed_p2) {
			document.getElementById("player_2").focus();
			document.getElementById("validate_player_2").innerHTML = validate_msg;
			document.getElementById("validate_player_2").style.display = "block";
			$("#btn_play").attr("disabled", true);
		} else{
			document.getElementById("validate_player_2").style.display = "none";
			$("#btn_play").removeAttr("disabled");
			if (!player_1 || !trimmed_p1 || !player_3 || !trimmed_p3 || !player_4 || !trimmed_p4) {
				$("#btn_play").attr("disabled",true);
			}
		}
	});
	document.getElementById("player_3").addEventListener("change", e => {
  		var player_1 = $('#player_1').val();
  		var player_2 = $('#player_2').val();
  		var player_3 = $('#player_3').val();
  		var player_4 = $('#player_4').val();

 		var trimmed_p1 = player_1.trim();
 		var trimmed_p2 = player_2.trim();
 		var trimmed_p3 = player_3.trim();
 		var trimmed_p4 = player_4.trim();
		if (!player_3 || !trimmed_p3) {
			document.getElementById("player_3").focus();
			document.getElementById("validate_player_3").innerHTML = validate_msg;
			document.getElementById("validate_player_3").style.display = "block";
			$("#btn_play").attr("disabled", true);
		} else{
			document.getElementById("validate_player_3").style.display = "none";
			$("#btn_play").removeAttr("disabled");
			if (!player_2 || !trimmed_p2 || !player_1 || !trimmed_p1 || !player_4 || !trimmed_p4) {
				$("#btn_play").attr("disabled",true);
			}
		}
	});
	document.getElementById("player_4").addEventListener("change", e => {
  		var player_1 = $('#player_1').val();
  		var player_2 = $('#player_2').val();
  		var player_3 = $('#player_3').val();
  		var player_4 = $('#player_4').val();

 		var trimmed_p1 = player_1.trim();
 		var trimmed_p2 = player_2.trim();
 		var trimmed_p3 = player_3.trim();
 		var trimmed_p4 = player_4.trim();

		if (!player_4 || !trimmed_p4) {
			document.getElementById("player_4").focus();
			document.getElementById("validate_player_4").innerHTML = validate_msg;
			document.getElementById("validate_player_4").style.display = "block";
			$("#btn_play").attr("disabled", true);
		} else{
			document.getElementById("validate_player_4").style.display = "none";
			$("#btn_play").removeAttr("disabled");
			if (!player_2 || !trimmed_p2 || !player_3 || !trimmed_p3 || !player_1 || !trimmed_p1) {
				$("#btn_play").attr("disabled",true);
			}
		}
	});
//--------END VALIDATE PLAYER NAME REGISTER---------
</script>