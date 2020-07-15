<!DOCTYPE html>
<html>
<head>
	<?php $this->load->view('_partials/head.php') ?>
	<title></title>
</head>
<body>
	<div align="center" class="container" style="margin-top: 10px;">
		<div class="row page-content">
			<div class="col-md-6" style="float:none;margin:auto;">
			    <h2 align="left">Input Player Name
			    	<div class="float-right" style="margin-right: 0px;"><a href="<?php echo site_url("ceki_history") ?>" class="btn btn-success"><span class="faa fa-sign-out"></span> Ceki History</a>
			    	</div>
			    </h2>
	
			    <div style="margin-top: 20px;" class="form-group">
			        <input type="text" maxlength="100" name="player_1" class="form-control" id="player_1" placeholder="Player 1">
			        <p align="left" id="validate_player_1" style="color: red; font-style: italic; display: none"></p>
			    </div>
		        <div class="form-group">
		            <input type="text" maxlength="100" name="player_2" class="form-control" id="player_2" placeholder="Player 2">
		            <p align="left" id="validate_player_2" style="color: red; font-style: italic; display: none"></p>
			    </div>
			    <div class="form-group">
			        <input type="text" maxlength="100" name="player_3" class="form-control" id="player_3" placeholder="Player 3">
			        <p align="left" id="validate_player_3" style="color: red; font-style: italic; display: none"></p>
			    </div>
			    <div class="form-group">
			        <input type="text" maxlength="100" name="player_4" class="form-control" id="player_4" placeholder="Player 4">
			        <p align="left" id="validate_player_4" style="color: red; font-style: italic; display: none"></p>
			    </div>
			    <div class="form-group pull-right">
			        <button type="submit" id="btn_play" class="btn btn-primary" style="width: 100px">Play</button>
			    </div>
		    </div>	
		</div>
	</div>
	<?php $this->load->view('_partials/js_hist.php') ?>
	<?php $this->load->view('_partials/js_validate_player_name.php') ?>
</body>
</html>