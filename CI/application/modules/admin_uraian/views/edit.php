<form class="" id="submituraianAdd" method="post" action="<?= base_url('admin_uraian/simpan_uraian') ?>" enctype="multipart/form-data">
	<div class="col-12 mb-4" id="newuraian">
		<div class="row mb-2">
			<div class="col-lg-8 col-md-8 col-sm-12 py-3">
				<div class="row mb-4">
					<div class="col-12">
						<div style="font-size: 2em;font-weight: 500;">Tambah Sprint</div>
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
								?>
									<option value="<?=$data["id_sop"]?>" <?= $custdata->sop_id == $data["id_sop"] ? 'selected' : '' ?>><?=$data["nama"]?></option>
								<?php
									}
								?>
							</select>
			            </div>
			        </div>
		        </div>

		        <div class="row mb-3">
		          <div class="col-12">
		            <h5>Nama Sprint</h5>
		            <div class="form-sprint-bg">
		            	<input type="text" id="nama" name="nama" class="form-sprint" value="<?= $custdata->nama ?>" required>
		            </div>
		          </div>
		        </div>
        
				<div class="row mb-3">
		          	<div class="col-12">
						<h5>Tipe</h5>
            			<div class="form-sprint-bg">
							<select id="tipe" class="form-sprint select2" name="tipe" style="width:100%;" required>
								<option value="">Pilih Tipe</option>
								<option value="1"<?= $custdata->tipe == '1' ? 'selected' : '' ?>>Struktural</option>
								<option value="2"<?= $custdata->tipe == '2' ? 'selected' : '' ?>>Fungsional</option>
							</select>
            			</div>
          			</div>
        		</div>

		        <div class="row mb-3">
		          <div class="col-12">
		            <h5>Deskripsi</h5>
					<input type="hidden" id="iduraian" name="iduraian" class="form-sprint" value="<?= $custdata->id_uraian ?>" >
					<input type="hidden" id="cari" name="cari" class="form-sprint" value="<?= $cari ?>" >
					<input type="hidden" id="page" name="page" class="form-sprint" value="<?= $page ?>" >
					<div class="form-sprint-bg">
						<textarea id="deskripsi" class="w-100 form-no-b" rows="5" name="deskripsi" required><?= $custdata->deskripsi ?></textarea>
					</div>              
		          </div>
		        </div>

				<div class="row mb-3">
		          	<div class="col-12">
						<h5>PIC</h5>
            			<div class="form-sprint-bg">
							<select id="userid" class="form-sprint select2" name="userid" style="width:100%;" required>
								<option value="">Pilih PIC</option>
								<?php
									foreach ($users as $data){
								?>
									<option value="<?=$data["id_pegawai"]?>" <?= $custdata->pegawai_id == $data["id_pegawai"] ? 'selected' : '' ?>><?=$data["nama"]?></option>
								<?php
									}
								?>
							</select>
            			</div>
          			</div>
        		</div>

		        <div class="row mb-3">
		          	<div class="col-12">
						<h5>File</h5>
						<? if ($custdata->file != ''){ ?>
						<div class="col-lg-3" style="padding-bottom: 10px;"><a href="<?= base_url().'uploads/uraian-kerja/'.$custdata->file ?>" target="_blank"><?= $custdata->file ?></a></div>
						<? } ?>
						<div class="form-sprint-bg">
							<div class="input-group">
								<span class="input-group-btn">
									<span class="btn btn-primary btn-file">
										Browse… <input type="file" id="fileuraian" name="fileuraian">
									</span>
								</span>
							</div>
						</div>
		          	</div>
		        </div>
			</div>
		</div>
	  	<div class="row">
		  	<div class="col-12 col-lg-4 mb-4 d-flex align-items-lg-end">
		  		<button class="btn-block text-center" style="background: linear-gradient(to right, rgb(254,193,0) , rgb(247,228,0));border: none;padding: 7px 23px;font-size: 12pt;font-weight: normal;border-radius: 18px;" type="submit" name="submit">Simpan Data Sprint</button>
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
		var urlAdd = "<?php echo base_url().'admin_uraian/lists_uraian'; ?>";
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
</script>				
