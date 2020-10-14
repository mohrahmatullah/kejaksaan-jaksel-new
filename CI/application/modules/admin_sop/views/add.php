<form class="" id="submitsopAdd" method="post" action="<?= base_url('admin_sop/simpan_sop') ?>" enctype="multipart/form-data">
	<div class="col-12 mb-4" id="newsop">
		<div class="row mb-2">
			<div class="col-lg-8 col-md-8 col-sm-12 py-3">
				<div class="row mb-4">
					<div class="col-12">
						<div style="font-size: 2em;font-weight: 500;">Tambah SOP</div>
					</div>
				</div>

				<div class="row mb-3">
		          <div class="col-12">
					<h5>Peraturan</h5>
		            <div class="form-sprint-bg">
						<select id="peraturan" class="form-sprint select2" name="peraturan" style="width:100%;" required>
							<option value="">Pilih Peraturan</option>
							<?php
								foreach ($peraturan as $data){
							?>
								<option value="<?=$data["id_peraturan"]?>"><?=$data["nomor"]?></option>
							<?php
								}
							?>
						</select>
		            </div>
		          </div>
		        </div>
		        <div class="row mb-3">
		          <div class="col-12">
		            <h5>Nama SOP</h5>
		            <div class="form-sprint-bg">
		            	<input type="text" id="nama" name="nama" class="form-sprint" value="" required>
		            </div>
		          </div>
		        </div>
		        
		        <div class="row mb-3">
		          <div class="col-12">
		            <h5>Deskripsi</h5>
		            <input type="hidden" id="idsop" name="idsop" class="form-sprint" value="" >
					<div class="form-sprint-bg">
						<textarea id="deskripsi" class="w-100 form-no-b" rows="5" name="deskripsi" required></textarea>
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
									Browse… <input type="file" id="filesop" name="filesop">
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
		  		<button class="btn-block text-center" style="background: linear-gradient(to right, rgb(254,193,0) , rgb(247,228,0));border: none;padding: 7px 23px;font-size: 12pt;font-weight: normal;border-radius: 18px;" type="submit" name="submit">Simpan Data SOP</button>
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
		var urlAdd = "<?php echo base_url().'admin_sop/lists_sop'; ?>";
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

