<form class="" id="submitverificationAdd" method="post" action="<?= base_url('admin_verification/simpan_verification') ?>" enctype="multipart/form-data">
	<div class="col-12 mb-4" id="newuraian">
		<div class="row mb-2">
			<div class="col-lg-8 col-md-8 col-sm-12 py-3">
				<div class="row mb-4">
					<div class="col-12">
						<div style="font-size: 2em;font-weight: 500;">Update Verifikasi Sprint</div>
					</div>
				</div>

				<? if ($this->session->userdata('user_login_level') != 'superadmin'){ ?>
				<div class="row mb-3">
		          	<div class="col-12">
						<h5>Nama Pegawai</h5>
	        			<div class="form-sprint-bg">
							<input type="hidden" id="pegawai" name="pegawai" value="<?= $pegawai->id_pegawai ?>" required>
							<input type="text" id="namapegawai" name="namapegawai" class="form-sprint" value="<?= $pegawai->nama ?>" readonly="">
						</div>
	      			</div>
	    		</div>
				<div class="row mb-3">
		          	<div class="col-12">
						<h5>NIK</h5>
	        			<div class="form-sprint-bg">
							<input type="text" id="nik" name="nik" class="form-sprint" value="<?= $pegawai->nik ?>" readonly="">
						</div>
	      			</div>
	    		</div>
				<div class="row mb-3">
		          	<div class="col-12">
						<h5>Jabatan</h5>
	        			<div class="form-sprint-bg">
							<input type="text" id="jabatan" name="jabatan" class="form-sprint" value="<?= $pegawai->jabatan ?>" readonly="">
						</div>
	      			</div>
	    		</div>
				<? } else { ?>
					<h5>Nama Pegawai</h5>
        			<div class="form-sprint-bg">
						<select id="pegawai" class="form-sprint select2" name="pegawai" style="width:100%;" required>
							<option value="">Pilih Nama Pegawai</option>
							<?php
								foreach ($pegawai as $data){
							?>
								<option value="<?=$data["id_pegawai"]?>" <?= $custdata->idpegawai == $data["id_pegawai"] ? 'selected' : '' ?>><?=$data["nama"]?></option>
							<?php
								}
							?>
						</select>
        			</div>
				<? } ?>

				<div class="row mb-3">
		          	<div class="col-12">
						<h5>Peraturan</h5>
            			<div class="form-sprint-bg">
							<select id="peraturan" class="form-sprint select2" name="peraturan" style="width:100%;" required>
								<option value="">Pilih Peraturan</option>
								<?php
									foreach ($peraturan as $data){
								?>
									<option value="<?=$data["id_peraturan"]?>" <?= $custdata->id_peraturan == $data["id_peraturan"] ? 'selected' : '' ?>><?=$data["nomor"]?> - <?=$data["tentang"]?></option>
								<?php
									}
								?>
							</select>
            			</div>
          			</div>
        		</div>

				<div class="row mb-3">
		          	<div class="col-12">
						<h5>SOP</h5>
            			<div class="form-sprint-bg">
							<select id="sop" class="form-sprint select2" name="sop" style="width:100%;" required>
								<option value="">Pilih SOP</option>
								<?php
									foreach ($sop as $data){
								?><option value="<?=$data["id_sop"]?>" <?= $custdata->id_sop == $data["id_sop"] ? 'selected' : '' ?>><?=$data["nama"]?></option>
								<?php
									}
								?>
							</select>
            			</div>
          			</div>
        		</div>

				<div class="row mb-3">
		          	<div class="col-12">
						<h5>Sprint</h5>
            			<div class="form-sprint-bg">
							<select id="uraian" class="form-sprint select2" name="uraian" style="width:100%;" required>
								<option value="">Pilih Sprint</option>
								<?php
									foreach ($uraian as $data){
								?>
									<option value="<?=$data["id_uraian"]?>" <?= in_array($data["id_uraian"], explode(',', $custdata->id_uraian)) ? 'selected' : '' ?>><?=$data["nama"]?></option>
								<?php
									}
								?>
							</select>
            			</div>
          			</div>
        		</div>

		        <div class="row mb-3">
		          <div class="col-12">
		            <h5>Laporan Pekerjaan</h5>
					<div class="form-sprint-bg">
						<textarea id="laporan" class="w-100 form-no-b" rows="5" name="laporan"><?= $custdata->laporan ?></textarea>
					</div>              
		          </div>
		        </div>

		        <div class="row mb-3">
		          	<div class="col-12">
						<h5>File Before <span class="cred">*</span></h5>
						<? if ($custdata->file_before != ''){ ?>
						<div class="col-lg-3" style="padding-bottom: 10px;"><a href="<?= base_url().'uploads/verification-file/before/'.$custdata->file_before ?>" target="_blank"><?= $custdata->file_before ?></a></div>
						<? } ?>
						<div class="form-sprint-bg">
							<div class="input-group">
								<span class="input-group-btn">
									<span class="btn btn-primary btn-file">
										Browse… <input type="file" id="filebefore" name="filebefore">
									</span>
								</span>
							</div>
						</div>
		          	</div>
		        </div>

		        <div class="row mb-3">
		          <div class="col-12">
		            <h5>Time Before</h5>
					<div class="form-sprint-bg">
						<input type="text" id="timebefore" name="timebefore" class="form-sprint" value="<?= isset($custdata->time_before) && $custdata->time_before != '0000-00-00 00:00:00' ? date('d-m-Y H:i', strtotime($custdata->time_before)) : date('d-m-Y H:i') ?>" readonly="">
					</div>              
		          </div>
		        </div>

				<? if ($custdata->file_before != ''){ ?>
		        <div class="row mb-3">
		          	<div class="col-12">
						<h5>File After <span class="cred">*</span></h5>
						<? if ($custdata->file_after != ''){ ?>
						<div class="col-lg-3" style="padding-bottom: 10px;"><a href="<?= base_url().'uploads/verification-file/after/'.$custdata->file_after ?>" target="_blank"><?= $custdata->file_after ?></a></div>
						<? } ?>
						<div class="form-sprint-bg">
							<div class="input-group">
								<span class="input-group-btn">
									<span class="btn btn-primary btn-file">
										Browse… <input type="file" id="fileafter" name="fileafter">
									</span>
								</span>
							</div>
						</div>
		          	</div>
		        </div>

		        <div class="row mb-3">
		          <div class="col-12">
		            <h5>Time After</h5>
					<div class="form-sprint-bg">
						<input type="text" id="timeafter" name="timeafter" class="form-sprint" value="<?= isset($custdata->time_after) && $custdata->time_after != '0000-00-00 00:00:00' ? date('d-m-Y H:i', strtotime($custdata->time_after)) : date('d-m-Y H:i') ?>" readonly="">
					</div>              
		          </div>
		        </div>
				<? } ?>

			</div>
		</div>

	  	<div class="row">
		  	<div class="col-12 col-lg-4 mb-4 d-flex align-items-lg-end">
		  		<button class="btn-block text-center" style="background: linear-gradient(to right, rgb(254,193,0) , rgb(247,228,0));border: none;padding: 7px 23px;font-size: 12pt;font-weight: normal;border-radius: 18px;" type="submit" name="submit">Update Verifikasi Sprint</button>
		    </div>
		    <div class="col-12 col-lg-4 mb-4 d-flex align-items-lg-end">
		  		<button class="btn-block text-center" onclick="back();" style="background: linear-gradient(to right, rgb(254,193,0) , rgb(247,228,0));border: none;padding: 7px 23px;font-size: 12pt;font-weight: normal;border-radius: 18px;" type="button">Kembali Ke Tabel</button>
		  	</div>
	  	</div>

	</div>

</form>
<div class="clearfix"></div>

<script>
	function back(){
		var urlAdd = "<?php echo base_url().'admin_verification/lists_verification'; ?>";
		$.ajax({
			url:urlAdd,
			beforeSend: function() {
				NProgress.start();
			},
			success:function(data) { 
				NProgress.done();
				$("#ajax_page").html(data);
				$(".select2").select2();
			}
		});
		//return false;
	}	
	$(document).ready(function() {	
		$('#sop').change(function() {
			var urlHideUnhide = "<?php echo base_url().'admin_verification/get_opsi_sop/'; ?>" + $('#sop').val();
			$.ajax({
				url:urlHideUnhide,
				beforeSend: function() {
					NProgress.start();
				},
				success:function(data) { 
					NProgress.done();
					$("#divUraian").html(data);
					$(".select2").select2();
				}
			});
			return false;
		});			
	});
</script>				
