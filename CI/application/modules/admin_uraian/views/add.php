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
									<option value="<?=$data["id_sop"]?>"><?=$data["nama"]?></option>
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
		            	<input type="text" id="nama" name="nama" class="form-sprint" value="" required>
		            </div>
		          </div>
		        </div>
        
				<div class="row mb-3">
		          	<div class="col-12">
						<h5>Tipe</h5>
            			<div class="form-sprint-bg">
							<select id="tipe" class="form-sprint select2" name="tipe" style="width:100%;" required>
								<option value="">Pilih Tipe</option>
								<option value="1">Struktural</option>
								<option value="2">Fungsional</option>
							</select>
            			</div>
          			</div>
        		</div>

		        <div class="row mb-3">
		          <div class="col-12">
		            <h5>Deskripsi</h5>
		            <input type="hidden" id="iduraian" name="iduraian" class="form-sprint" value="" required>
					<div class="form-sprint-bg">
						<textarea id="deskripsi" class="w-100 form-no-b" rows="5" name="deskripsi"></textarea>
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
									<option value="<?=$data["id_pegawai"]?>"><?=$data["nama"]?></option>
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

