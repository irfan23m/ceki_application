<script type="text/javascript" src="<?php echo base_url('assets/js/jquery-3.4.1.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.dataTables.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/dataTables.bootstrap4.js') ?>"></script>

<script type="text/javascript">

//Validate Input
	//---------------SAVE--------------
	document.getElementById("score_p1").addEventListener("change",  e => {
		var val_score_p1 = $("#score_p1").val();
		var val_score_p2 = $("#score_p2").val();
		var val_score_p3 = $("#score_p3").val();
		var val_score_p4 = $("#score_p4").val();
		
  		//score 1
		if (val_score_p1 > 500) {
	  		document.getElementById("score_p1").focus();
	  		document.getElementById("validate_score_p1").style.display = "block";
			document.getElementById("validate_score_p1").innerHTML = "Input must be less than 500";
			$("#btn_save").attr("disabled", true);
		}
		else{
			document.getElementById("validate_score_p1").style.display = "none";
			$("#btn_save").removeAttr("disabled");
			if (val_score_p2 > 500 || val_score_p3 > 500 || val_score_p4 > 500) {
				$("#btn_save").attr("disabled", true);
			}
		}
	});

	document.getElementById("score_p2").addEventListener("change",e => {
  		var val_score_p1 = $("#score_p1").val();
		var val_score_p2 = $("#score_p2").val();
		var val_score_p3 = $("#score_p3").val();
		var val_score_p4 = $("#score_p4").val();

  		//score 2
		if (val_score_p2 > 500) {
	  		document.getElementById("score_p2").focus();
	  		document.getElementById("validate_score_p2").style.display = "block";
			document.getElementById("validate_score_p2").innerHTML = "Input must be less than 500";
			$("#btn_save").attr("disabled", true);
		}
		else{
			document.getElementById("validate_score_p2").style.display = "none";
			$("#btn_save").removeAttr("disabled");
			if (val_score_p1 > 500 || val_score_p3 > 500 || val_score_p4 > 500) {
				$("#btn_save").attr("disabled", true);
			}
		}
	});
	document.getElementById("score_p3").addEventListener("change", e => {
  		var val_score_p1 = $("#score_p1").val();
		var val_score_p2 = $("#score_p2").val();
		var val_score_p3 = $("#score_p3").val();
		var val_score_p4 = $("#score_p4").val();

  		//score 3
		if (val_score_p3 > 500) {
	  		document.getElementById("score_p3").focus();
	  		document.getElementById("validate_score_p3").style.display = "block";
			document.getElementById("validate_score_p3").innerHTML = "Input must be less than 500";
			$("#btn_save").attr("disabled", true);
		}
		else{
			document.getElementById("validate_score_p3").style.display = "none";
			$("#btn_save").removeAttr("disabled");
			if (val_score_p2 > 500 || val_score_p1 > 500 || val_score_p4 > 500) {
				$("#btn_save").attr("disabled", true);
			}
		}
	});
	document.getElementById("score_p4").addEventListener("change", e => {
  		var val_score_p1 = $("#score_p1").val();
		var val_score_p2 = $("#score_p2").val();
		var val_score_p3 = $("#score_p3").val();
		var val_score_p4 = $("#score_p4").val();

  		//score 4
		if (val_score_p4 > 500) {
	  		document.getElementById("score_p4").focus();
	  		document.getElementById("validate_score_p4").style.display = "block";
			document.getElementById("validate_score_p4").innerHTML = "Input must be less than 500";
			$("#btn_save").attr("disabled", true);
		}
		else{
			document.getElementById("validate_score_p4").style.display = "none";
			$("#btn_save").removeAttr("disabled");
			if (val_score_p2 > 500 || val_score_p3 > 500 || val_score_p1 > 500) {
				$("#btn_save").attr("disabled", true);
			}
		}
	});

	//---------------UPDATE--------------
	document.getElementById("score_p1_edit").addEventListener("change", e => {
  		var val_score_p1_edit = $("#score_p1_edit").val();
		var val_score_p2_edit = $("#score_p2_edit").val();
		var val_score_p3_edit = $("#score_p3_edit").val();
		var val_score_p4_edit = $("#score_p4_edit").val();

  		//score_p1_edit
		if (val_score_p1_edit > 500) {
	  		document.getElementById("score_p1_edit").focus();
	  		document.getElementById("validate_score_p1_edit").style.display = "block";
			document.getElementById("validate_score_p1_edit").innerHTML = "Input must be less than 500";
			$("#btn_update").attr("disabled", true);
		}
		else{
			document.getElementById("validate_score_p1_edit").style.display = "none";
			$("#btn_update").removeAttr("disabled");
			if (val_score_p4_edit > 500 || val_score_p2_edit > 500 || val_score_p3_edit > 500) {
				$("#btn_update").attr("disabled",true);
			}
		}
	});
	document.getElementById("score_p2_edit").addEventListener("change", e => {
  		var val_score_p1_edit = $("#score_p1_edit").val();
		var val_score_p2_edit = $("#score_p2_edit").val();
		var val_score_p3_edit = $("#score_p3_edit").val();
		var val_score_p4_edit = $("#score_p4_edit").val();

  		//score_p2_edit
		if (val_score_p2_edit > 500) {
	  		document.getElementById("score_p2_edit").focus();
	  		document.getElementById("validate_score_p2_edit").style.display = "block";
			document.getElementById("validate_score_p2_edit").innerHTML = "Input must be less than 500";
			$("#btn_update").attr("disabled", true);
		}
		else{
			document.getElementById("validate_score_p2_edit").style.display = "none";
			$("#btn_update").removeAttr("disabled");
			if (val_score_p4_edit > 500 || val_score_p1_edit > 500 || val_score_p3_edit > 500) {
				$("#btn_update").attr("disabled",true);
			}
		}
	});
	document.getElementById("score_p3_edit").addEventListener("change", e => {
  		var val_score_p1_edit = $("#score_p1_edit").val();
		var val_score_p2_edit = $("#score_p2_edit").val();
		var val_score_p3_edit = $("#score_p3_edit").val();
		var val_score_p4_edit = $("#score_p4_edit").val();

  		//score_p3_edit
		if (val_score_p3_edit > 500) {
	  		document.getElementById("score_p3_edit").focus();
	  		document.getElementById("validate_score_p3_edit").style.display = "block";
			document.getElementById("validate_score_p3_edit").innerHTML = "Input must be less than 500";
			$("#btn_update").attr("disabled", true);
		}
		else{
			document.getElementById("validate_score_p3_edit").style.display = "none";
			$("#btn_update").removeAttr("disabled");
			if (val_score_p4_edit > 500 || val_score_p2_edit > 500 || val_score_p1_edit > 500) {
				$("#btn_update").attr("disabled",true);
			}
		}
	});
	document.getElementById("score_p4_edit").addEventListener("change", e => {
  		var val_score_p1_edit = $("#score_p1_edit").val();
		var val_score_p2_edit = $("#score_p2_edit").val();
		var val_score_p3_edit = $("#score_p3_edit").val();
		var val_score_p4_edit = $("#score_p4_edit").val();

  		//score_p4_edit
		if (val_score_p4_edit > 500) {
	  		document.getElementById("score_p4_edit").focus();
	  		document.getElementById("validate_score_p4_edit").style.display = "block";
			document.getElementById("validate_score_p4_edit").innerHTML = "Input must be less than 500";
			$("#btn_update").attr("disabled", true);
		}
		else{
			document.getElementById("validate_score_p4_edit").style.display = "none";
			$("#btn_update").removeAttr("disabled");
			if (val_score_p1_edit > 500 || val_score_p2_edit > 500 || val_score_p3_edit > 500) {
				$("#btn_update").attr("disabled",true);
			}
		}
	});
//---End Validate Input

	$(document).ready(function(){
		show_list(); //call function show all product


		//function show all product
		function show_list(){
			$.ajax({
				type    : 'ajax',
				url     : '<?php echo site_url('ceki/ceki_main_data') ?>',
				async   : false,
				dataType: 'JSON',
				success : function(data){
					var html='';
					var i;

					for (i = 0; i < data.length; i++) {

						action = 
								'<a href="javascript:void(0);" class="btn btn-info btn-sm item_edit" data-row_id="'+data[i].row_id+'" data-score_p1="'+data[i].score_p1+'" data-score_p2="'+data[i].score_p2+'" data-score_p3="'+data[i].score_p3+'" data-score_p4="'+data[i].score_p4+'" hidden="true" >Edit</a>'+' '+
                        		'<a href="javascript:void(0);" class="btn btn-danger btn-sm item_delete" data-row_id="'+data[i].row_id+'" hidden="true" >Delete</a>';
						if (i+1 == data.length) {

							if (data[i].score_p1 >= 1000 || data[i].score_p2 >= 1000 || data[i].score_p3 >= 1000 || data[i].score_p4 >= 1000) {

								action = 
										'<a href="javascript:void(0);" class="btn btn-info btn-sm item_edit" data-row_id="'+data[i].row_id+'" data-score_p1="'+data[i].score_p1+'" data-score_p2="'+data[i].score_p2+'" data-score_p3="'+data[i].score_p3+'" data-score_p4="'+data[i].score_p4+'" style="pointer-events: none; cursor: default;" >Edit</a>'+' '+
                                		'<a href="javascript:void(0);" class="btn btn-danger btn-sm item_delete" data-row_id="'+data[i].row_id+'" style="pointer-events: none; cursor: default;" >Delete</a>'
							}else{
								action = 
										'<a href="javascript:void(0);" class="btn btn-info btn-sm item_edit" data-row_id="'+data[i].row_id+'" data-score_p1="'+data[i].score_p1+'" data-score_p2="'+data[i].score_p2+'" data-score_p3="'+data[i].score_p3+'" data-score_p4="'+data[i].score_p4+'" >Edit</a>'+' '+
                                		'<a href="javascript:void(0);" class="btn btn-danger btn-sm item_delete" data-row_id="'+data[i].row_id+'" >Delete</a>'
                            }
						}
						html += '<tr>'+
									//'<td>'+data[i].row_id+'</td>'+
									'<td>'+data[i].score_p1+'</td>'+
									'<td>'+data[i].score_p2+'</td>'+
									'<td>'+data[i].score_p3+'</td>'+
									'<td>'+data[i].score_p4+'</td>'+
									'<td style="text-align:right;">'+
										action+
                                	'</td>'+
								'</tr>';

						var total_score_p1 = data[i].score_p1;
						var total_score_p2 = data[i].score_p2;
						var total_score_p3 = data[i].score_p3;
						var total_score_p4 = data[i].score_p4;
					}

					$('#show_data').html(html);
					if (total_score_p1 >= 1000 || total_score_p2 >= 1000 || total_score_p3 >= 1000 || total_score_p4 >= 1000) {
						var ceki_hist_id = '<?php echo $this->session->userdata('ceki_id'); ?>';
						//console.log(ceki_hist_id);
						if (total_score_p1 >= 1000) {
							var winner = "<?php echo $this->session->userdata('player_1') ?>";
							alert("Max Score (1000) Reached, Congratulation for the Winner "+winner+" !");
							document.getElementById("btn_add").style='pointer-events: none; cursor: default;';
						}
						else if (total_score_p2 >= 1000) {
							var winner = "<?php echo $this->session->userdata('player_2') ?>";
							alert("Max Score (1000) Reached, Congratulation for the Winner "+winner+" !");
							document.getElementById("btn_add").style='pointer-events: none; cursor: default;';					
						}
						else if (total_score_p3 >= 1000) {
							var winner = "<?php echo $this->session->userdata('player_3') ?>";
							alert("Max Score (1000) Reached, Congratulation for the Winner "+winner+" !");
							document.getElementById("btn_add").style='pointer-events: none; cursor: default;';
						}
					    else if (total_score_p4 >= 1000) {
							var winner = "<?php echo $this->session->userdata('player_4') ?>";
							alert("Max Score (1000) Reached, Congratulation for the Winner "+winner+" !");
							document.getElementById("btn_add").style='pointer-events: none; cursor: default;';
						}

						$.ajax({
							type:'POST',
							url:'<?php echo site_url('ceki_history/ceki_hist_update') ?>',
							dataType:'JSON',
							data: {ceki_hist_id:ceki_hist_id,
								winner:winner,
								last_score_p1:total_score_p1,
								last_score_p2:total_score_p2,
								last_score_p3:total_score_p3,
								last_score_p4:total_score_p4},

							success:function(data){
								//alert("success");
							}
						})
						
					}
				//show_list();
				
				}
			});

			$('#myData').dataTable({
			  "ordering": false
			});
		}

		//Save Product
		$('#btn_save').on('click',function(){
			
			var ceki_id = $('#ceki_id').val();
			var score_p1 = $('#score_p1').val();
			var score_p2 = $('#score_p2').val();
			var score_p3 = $('#score_p3').val();
			var score_p4 = $('#score_p4').val();

			if (score_p1 == "") {
				score_p1 = 0;
			}
			if (score_p2 == "") {
				score_p2 = 0;
			}
			if (score_p3 == "") {
				score_p3 = 0;
			}
			if (score_p4 == "") {
				score_p4 = 0;
			}

			$.ajax({
				type:'POST',
				url:'<?php echo site_url('ceki/ceki_main_save') ?>',
				dataType:'JSON',
				data: {ceki_id:ceki_id,
					score_p1:score_p1,
					score_p2:score_p2,
					score_p3:score_p3,
					score_p4:score_p4},
				success:function(data){
					$('[name="ceki_id"]').val("");
					$('[name="score_p1"]').val("");
					$('[name="score_p2"]').val("");
					$('[name="score_p3"]').val("");
					$('[name="score_p4"]').val("");
					$('#Modal_Add').modal('hide');
					//show_list();
					document.location.reload(true);
				}
			});
			return false;
		});

		//get data for update record
        $('#show_data').on('click','.item_edit',function(){
        	var row_id = $(this).data('row_id');
            var score_p1 = $(this).data('score_p1');
            var score_p2 = $(this).data('score_p2');
            var score_p3 = $(this).data('score_p3');
            var score_p4 = $(this).data('score_p4');
             
            $('#Modal_Edit').modal('show');
            $('[name="row_id_edit"]').val(row_id);
            $('[name="score_p1_edit"]').val(score_p1);
			$('[name="score_p2_edit"]').val(score_p2);
			$('[name="score_p3_edit"]').val(score_p3);
			$('[name="score_p4_edit"]').val(score_p4);
        });
 
        //update record to database
        $('#btn_update').on('click',function(){
        	var row_id = $('#row_id_edit').val();
            var score_p1 = $('#score_p1_edit').val();
			var score_p2 = $('#score_p2_edit').val();
			var score_p3 = $('#score_p3_edit').val();
			var score_p4 = $('#score_p4_edit').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('ceki/ceki_main_update')?>",
                dataType : "JSON",
                data : {row_id:row_id , score_p1:score_p1, score_p2:score_p2, 
                		score_p3:score_p3, score_p4:score_p4},
                success: function(data){
                    $('[name="row_id_edit"]').val("")
		            $('[name="score_p1_edit"]').val("");
					$('[name="score_p2_edit"]').val("");
					$('[name="score_p3_edit"]').val("");
					$('[name="score_p4_edit"]').val("");
                    $('#Modal_Edit').modal('hide');
                    //show_list();
                    document.location.reload(true);
                }
            });
            return false;
        });

		//get data for delete record
        $('#show_data').on('click','.item_delete',function(){
	            var row_id = $(this).data('row_id');
	             
	            $('#Modal_Delete').modal('show');
	            $('[name="row_id_delete"]').val(row_id);
	    });
	 
	        //delete record to database
        $('#btn_delete').on('click',function(){
            var row_id = $('#row_id_delete').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('ceki/ceki_main_delete')?>",
                dataType : "JSON",
                data : {row_id:row_id},
                success: function(data){
                    $('[name="row_id_delete"]').val("");
                    $('#Modal_Delete').modal('hide');
                    //show_list();
                    document.location.reload(true);
                }
            });
            return false;
        });

        $('#btn_reset').on('click',function(){
            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('ceki/empty_ceki_main')?>",
                dataType : "JSON",
                success: function(data){
                    $('#Modal_Reset').modal('hide');
                    $('#Modal_Reseted').modal('show');
                }
            });
            return false;
        });

         $('#btn_reseted').on('click',function(){
            $('#Modal_Reseted').modal('hide');
            window.location.href="<?php echo base_url('index.php/ceki_history/ceki_hist_register') ?>"
            return false;
        });

    });
</script>