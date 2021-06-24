<?php
	// $aksi="siswa/aksi_siswa.php";
	$p=isset($_GET['aksi'])?$_GET['aksi']:null;
	switch($p){
		default:
	?>
    <div class="row">
		<div class="col-sm-12">
			<h4 class="pull-left page-title">Kenaikan Kelas</h4>
			<ol class="breadcrumb pull-right">
				<li><a href="#">Beranda</a></li>
				<li class="active">Kenaikan Kelas</li>
			</ol>
		</div>
	</div>
	
    <div class='panel panel-default'>
		<div class='panel-heading'> 
			<h3 class='panel-title'><i class='fa fa-user'></i> Pengaturan kenaikan kelas</h3> 
			</div>  <div class='panel-body'> 
			<div class="row">
				<div class="col-md-6">
					<label for="dari_kelas">Dari Kelas</label>
					<div class="input-group">
						<select name="dari_kelas"  id="dari_kelas" class="form-control custom-select">
							<option value="" selected>Pilih Kelas</option>
							<option value="2A">Kelas 2A</option>
							<option value="2B">Kelas 2B</option>
							<option value="3A">Kelas 3A</option>
							<option value="3B">Kelas 3B</option>
						</select>
						<span class="input-group-btn">
							<button class="btn btn-success" type="button" id="tampilkan">Tampilkan</button>
						</span>
					</div><!-- /input-group -->
				</div>
				<div class="col-md-6">
					<label for="kekelas">Ke Kelas</label>
					<div class="input-group">
						<select name="kekelas"  id="kekelas" class="form-control custom-select">
							<option value="" selected>Pilih Kelas</option>
							<option value="1A">Kelas 1A</option>
							<option value="2A">Kelas 2A</option>
							<option value="3A">Kelas 3A</option>
						</select>
						<span class="input-group-btn">
							<button class="btn btn-default" type="button" id="proses">Proses</button>
						</span>
					</div><!-- /input-group -->
				</div>
			</div>
			<hr>
			<div class="row">
				<div class="col-xs-5 col-md-5 col-sm-5">
					<select name="from[]" id="mySideToSideSelect" class="form-control" size="10" multiple="multiple">
					</select>
				</div>
				
				<!-- Action buttons -->
				<div class="col-xs-2 col-md-2 col-sm-2">
					<button type="button" id="mySideToSideSelect_rightAll" class="btn btn-block"><i class="glyphicon glyphicon-forward"></i></button>
					<button type="button" id="mySideToSideSelect_rightSelected" class="btn btn-block"><i class="glyphicon glyphicon-chevron-right"></i></button>
					<button type="button" id="mySideToSideSelect_leftSelected" class="btn btn-block"><i class="glyphicon glyphicon-chevron-left"></i></button>
					<button type="button" id="mySideToSideSelect_leftAll" class="btn btn-block"><i class="glyphicon glyphicon-backward"></i></button>
				</div>
				
				<!-- Right side select -->
				<div class="col-xs-5 col-md-5 col-sm-5">
					<select name="to[]" id="mySideToSideSelect_to" class="form-control" size="10" multiple="multiple"></select>
				</div>
			</div>
			<script>
				$(document).ready(function() {
					$('#mySideToSideSelect').multiselect();
					$(document).on('click', '#tampilkan', function(e){
						e.preventDefault();
						var deptid = $("#dari_kelas").val();
						$.ajax({
							url: 'getsiswa.php',
							type: 'post',
							data: {depart:deptid},
							dataType: 'json',
							success:function(response){
								var len = response.length;
								
								$("#mySideToSideSelect").empty();
								for( var i = 0; i<len; i++){
									var id = response[i]['id'];
									var name = response[i]['name'];
									
									$("#mySideToSideSelect").append("<option value='"+id+"'>"+name+"</option>");
									
								}
							}
						});
					});
					
					$(document).on('click', '#proses', function(e){
						e.preventDefault();
						var deptid = $("#kekelas").val();
						$.ajax({
							url: 'pindahkelas.php',
							type: 'post',
							data: {depart:deptid},
							dataType: 'json',
							success:function(response){
								var len = response.length;
								
								$("#mySideToSideSelect").empty();
								for( var i = 0; i<len; i++){
									var id = response[i]['id'];
									var name = response[i]['name'];
									
									$("#mySideToSideSelect").append("<option value='"+id+"'>"+name+"</option>");
									
								}
							}
						});
					});
					
				});
			</script>
		</div>
	</div>
	<?php
		break;
	}?>					