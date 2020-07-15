<script type="text/javascript" src="<?php echo base_url('assets/js/jquery-3.4.1.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.dataTables.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/dataTables.bootstrap4.js') ?>"></script>

<script type="text/javascript">
					
	$(document).ready(function(){
		show_list(); //call function show all product
		//alert(window.value);
		$('#myData').dataTable();

		//function show all product
		function show_list(){
			$.ajax({
				type    : 'ajax',
				url     : '<?php echo site_url('ceki_history/ceki_hist_list') ?>',
				async   : false,
				dataType: 'JSON',
				success : function(data){
					var html='';
					var i;

					for (i = 0; i < data.length; i++) {


						action = 
                        		'<a href="javascript:void(0);" class="btn btn-danger btn-sm item_delete" data-ceki_id="'+data[i].ceki_id+'">Delete</a>';
						
						html += '<tr>'+
									'<td>'+data[i].play_date+'</td>'+
									'<td>'+data[i].player_1+'</td>'+
									'<td>'+data[i].player_2+'</td>'+
									'<td>'+data[i].player_3+'</td>'+
									'<td>'+data[i].player_4+'</td>'+
									'<td>'+data[i].last_score_p1+'</td>'+
									'<td>'+data[i].last_score_p2+'</td>'+
									'<td>'+data[i].last_score_p3+'</td>'+
									'<td>'+data[i].last_score_p4+'</td>'+
									'<td>'+data[i].winner+'</td>'+
									'<td style="text-align:right;">'+
										action+
                                	'</td>'+
								'</tr>';

					}
					$('#show_data').html(html);
				}
			});
		}

		//Play form Register
		$('#btn_play').on('click',function(){
			var player_1 = $('#player_1').val();
			var player_2 = $('#player_2').val();
			var player_3 = $('#player_3').val();
			var player_4 = $('#player_4').val();

			var trimmed_p1 = player_1.trim();
			var trimmed_p2 = player_2.trim();
			var trimmed_p3 = player_3.trim();
			var trimmed_p4 = player_4.trim();

			if (!player_1 || !trimmed_p1 || !player_2 || !trimmed_p2 || !player_3 || !trimmed_p3 || !player_4 || !trimmed_p4) {
				var validate_msg = "Name is Required";

				if (!player_1 || !trimmed_p1) {
					document.getElementById("validate_player_1").innerHTML = validate_msg;
					document.getElementById("validate_player_1").style.display = "block";
				} else {
					document.getElementById("validate_player_1").style.display = "none";
				}
				if (!player_2 || !trimmed_p2) {
					document.getElementById("validate_player_2").innerHTML = validate_msg;
					document.getElementById("validate_player_2").style.display = "block";
				} else{
					document.getElementById("validate_player_2").style.display = "none";
				}
				if (!player_3 || !trimmed_p3) {
					document.getElementById("validate_player_3").innerHTML = validate_msg;
					document.getElementById("validate_player_3").style.display = "block";
				} else{
					document.getElementById("validate_player_3").style.display = "none";
				}
				if (!player_4 || !trimmed_p4) {
					document.getElementById("validate_player_4").innerHTML = validate_msg;
					document.getElementById("validate_player_4").style.display = "block";
				} else{
					document.getElementById("validate_player_4").style.display = "none";
				}
			} 
			else {
				$.ajax({
					type:'POST',
					url:'<?php echo site_url('ceki_history/ceki_hist_save') ?>',
					dataType:'JSON',
					data: {player_1:player_1,
						player_2:player_2,
						player_3:player_3,
						player_4:player_4},
					success:function(data){
						window.location.href= "<?php echo base_url('ceki') ?>";
					}
				});
				return false;
			}
		});

		//get data for delete record and check verification user
        $('#show_data').on('click','.item_delete',function(){
	            var ceki_id = $(this).data('ceki_id');

	            var check_cookie = document.cookie;
	           // alert(check_cookie);
	            if (check_cookie == "") {
	            	$('#Modal_Verification_Owner').modal('show');
	            	$('[name="ceki_id_delete"]').val(ceki_id);
	            }
	            else{
		            $('#Modal_Delete').modal('show');
		            $('[name="ceki_id_delete"]').val(ceki_id);
		        }
	    });

        //cek verification
        $('#btn_submit').on('click',function(){
        	
        	var own_username = $('#own_username').val();
        	var own_password = $('#own_password').val();

        	var trimmed_own_username = own_username.trim();
        	var trimmed_own_password = own_password.trim();

        	if (!own_username || !trimmed_own_username || !own_password || !trimmed_own_password) {
        		if (!own_username || !trimmed_own_username) {
        			document.getElementById("validate_own_username").style.display = "block";
        			document.getElementById("validate_own_username").innerHTML = "Username is Required";
        		}
        		if (!own_password || !trimmed_own_password) {
        			document.getElementById("validate_own_password").style.display = "block";
        			document.getElementById("validate_own_password").innerHTML = "Password is Required";
        		}
        	} 
        	else {
	        	if (own_username == "irfan.pensil" && own_password == "irfan.pensil") {
	        		//set for expires cookie
	        		var today = new Date();
					today.setMinutes(today.getMinutes() + 1);
					var strDate = today.toUTCString();
				    //--set cookie
	        		document.cookie = "own_username="+own_username+"; expires="+strDate+";";
	        		//alert(document.cookie);

	        		$('#Modal_Verification_Owner').modal('hide');

	        		document.getElementById("title_failed").style.display = "none";
	        		document.getElementById("msg_failed").style.display = "none";

	        		document.getElementById("title_success").style.display = "block";
	        		document.getElementById("msg_success").style.display = "block";
	        		$('#Modal_Respone_Verification').modal("show");

	        		$('[name="own_username"]').val("");
	        		$('[name="own_password"]').val("");

	        		$('#Modal_Delete').modal('show');
	        		//var ceki_id = $(this).data('ceki_id');
	        		//$('[name="ceki_id_delete"]').val(ceki_id);
	        	} else {
	        		$('#Modal_Verification_Owner').modal('hide');
	        		document.getElementById("title_success").style.display = "none";
	        		document.getElementById("msg_success").style.display = "none";

	        		document.getElementById("title_failed").style.display = "block";
	        		document.getElementById("msg_failed").style.display - "block";
	        		$('#Modal_Respone_Verification').modal("show");

	        		$('[name="own_username"]').val("");
	        		$('[name="own_password"]').val("");
	        	}
	        }
        })
	 
	    //delete record to database
        $('#btn_delete').on('click',function(){
            var ceki_id = $('#ceki_id_delete').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('ceki_history/ceki_hist_delete')?>",
                dataType : "JSON",
                data : {ceki_id:ceki_id},
                success: function(data){
                    $('[name="ceki_id_delete"]').val("");
                    $('#Modal_Delete').modal('hide');
                    //show_list();
                    document.location.reload(true);
                }
            });
            return false;
        });

        /*$('#btn_back').on('click',function(){
        	document.cookie = "own_username=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
        })*/
    });
</script>