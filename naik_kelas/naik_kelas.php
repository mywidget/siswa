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
							<option value="2A">Kelas 2A</option>
							<option value="3A">Kelas 3A</option>
						</select>
						<span class="input-group-btn">
							<button class="btn btn-default" type="button" id="proses" disabled>Proses</button>
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
					<select name="to[]" id="mySideToSideSelect_to" class="form-control selectmenu" size="10" multiple="multiple"></select>
				</div>
			</div>
			<script>
				$(document).ready(function() {
					$("#mySideToSideSelect_rightAll").attr('disabled','disabled');
					$("#mySideToSideSelect_rightSelected").attr('disabled','disabled');
					$("#mySideToSideSelect_leftSelected").attr('disabled','disabled');
					$("#mySideToSideSelect_leftAll").attr('disabled','disabled');
					$("#kekelas").attr('disabled','disabled');
					$("#proses").attr('disabled','disabled');
					
					$('#mySideToSideSelect').multiselect();
					
					$(document).on('click', '#tampilkan', function(e){
						e.preventDefault();
						var deptid = $("#dari_kelas").val();
						$.ajax({
							url: 'naik_kelas/getsiswa.php',
							type: 'post',
							data: {depart:deptid},
							dataType: 'json',
							success:function(response){
								$("#mySideToSideSelect_rightAll").removeAttr('disabled');
								$("#mySideToSideSelect_rightSelected").removeAttr('disabled');
								$("#mySideToSideSelect_leftSelected").removeAttr('disabled');
								$("#mySideToSideSelect_leftAll").removeAttr('disabled');
								var len = response.length;
								if (len==0) {
									$("#mySideToSideSelect_rightAll").attr('disabled','disabled');
									$("#mySideToSideSelect_rightSelected").attr('disabled','disabled');
									$("#mySideToSideSelect_leftSelected").attr('disabled','disabled');
									$("#mySideToSideSelect_leftAll").attr('disabled','disabled');
									$("#kekelas").append("<option value=''>Pilih kelas</option>");
								}
								$("#mySideToSideSelect").empty();
								for( var i = 0; i<len; i++){
									var id = response[i]['id'];
									var name = response[i]['name'];
									
									$("#mySideToSideSelect").append("<option value='"+id+"'>"+name+"</option>");
									
								}
							}
						});
					});
					
					$('#mySideToSideSelect').dblclick(function() {
						$("#kekelas").removeAttr('disabled');
						$("#proses").removeAttr('disabled');
					});
					
					$('#mySideToSideSelect_to').dblclick(function() {
						var dari = $('#mySideToSideSelect_to').children();
						var pilihan = dari.length;
						if(pilihan==0){
							$("#kekelas").attr('disabled','disabled');
							$("#proses").attr('disabled','disabled');
							$("#kekelas option[value='']").remove();
							$("#kekelas").prepend("<option value='' selected='selected'>Pilih kelas</option>");
						}
					});
					
					$('#kekelas').on('change', function() {
						$('#mySideToSideSelect_to option').prop('selected', true);
						$("#kekelas option[value='']").remove();
					});
					
					$('#mySideToSideSelect_rightAll,#mySideToSideSelect_rightSelected').click(function(){
						var dari = $('#mySideToSideSelect').children();
						var pilihan = dari.length;
						if(pilihan==0){
							$("#dari_kelas").attr('disabled','disabled');
							$("#tampilkan").attr('disabled','disabled');
							// $("#kekelas").prepend("<option value='' selected='selected'>Pilih kelas</option>");
						}
						$("#kekelas").removeAttr('disabled');
						$("#proses").removeAttr('disabled');
					});
					
					
					
					$('#mySideToSideSelect_leftSelected').click(function(e){
						e.preventDefault();
						var dari = $('#mySideToSideSelect_to').children();
						var pilihan = dari.length;
						if(pilihan==0){
							$("#kekelas").attr('disabled','disabled');
							$("#proses").attr('disabled','disabled');
							$("#kekelas option[value='']").remove();
							$("#kekelas").prepend("<option value='' selected='selected'>Pilih kelas</option>");
						}
					});
					
					$('#mySideToSideSelect_leftAll').click(function(){
						$("#kekelas").attr('disabled','disabled');
						$("#proses").attr('disabled','disabled');
						$("#dari_kelas").removeAttr('disabled');
						$("#tampilkan").removeAttr('disabled');
						$("#kekelas option[value='']").remove();
						$("#kekelas").prepend("<option value='' selected='selected'>Pilih kelas</option>");
					});
					
					$(document).on('click', '#proses', function(e){
						e.preventDefault();
						var kelas = $("#kekelas").val();
						var realvalues = new Array();//storing the selected values inside an array
						$('#mySideToSideSelect_to :selected').each(function(i, selected) {
							realvalues[i] = $(selected).val();
						});
						$.ajax({
							url: 'naik_kelas/proses.php',
							type: 'post',
							data: {kelas:kelas,pilihan:realvalues},
							dataType: 'json',
							success:function(response){
								if(response.status=='ok')
								{
									$("#kekelas").attr('disabled','disabled');
									$("#proses").attr('disabled','disabled');
									$('#mySideToSideSelect_to option:selected').remove();
									$("#kekelas").prepend("<option value='' selected='selected'>Pilih kelas</option>");
									alert('data berhasil diproses');
									}else{
									alert('data gagal diproses');
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