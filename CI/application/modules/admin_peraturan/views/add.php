<form class="" id="submitperaturanAdd" method="post" action="<?= base_url('admin_peraturan/simpan_peraturan') ?>" enctype="multipart/form-data">

	<div class="col-12 col-xl-8 mb-4" id="newperaturan">
		<div class="row mb-2">
			<div class="col-12 py-lg-5 py-3">
				<div class="row mb-4">
					<div class="col-12">
						<div style="font-size: 2em;font-weight: 500;">Tambah Peraturan</div>
					</div>
				</div>
				<div class="row mb-3">
					<div class="col-12">
						<h5>Nomor</h5>
						<div class="form-sprint-bg">
							<input type="text" id="nomor" name="nomor" value="" class="form-sprint" placeholder="" required/>
						</div>
						
					</div>
				</div>
				<div class="row mb-3">
					<div class="col-12">
						<h5>Tahun</h5>
						<div class="form-sprint-bg">
							<input type="hidden" id="idperaturan" name="idperaturan" class="form-control" value="">
							<input type="text" id="tahun" name="tahun" class="form-sprint" value="" placeholder="YYYY" required>
						</div>
					</div>
				</div>
				<div class="row mb-3">
					<div class="col-12">
						<h5>Tentang</h5>
						<div class="form-sprint-bg">
							<textarea id="tentang" class="w-100 form-no-b" rows="3" name="tentang" required></textarea>
						</div>
					</div>
				</div>
				<div class="row mb-3">
					<div class="col-12">
						<h5>Tanggal Penetapan</h5>
						<div class="form-sprint-bg">
							<input type="text" id="tanggal" name="tanggal" class="form-sprint" placeholder="DD-MM-YYYY" value="" required>
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
										Browse… <input type="file" id="fileperaturan" name="fileperaturan">
									</span>
								</span>
							</div>
						</div>
					</div>
				</div>
			</div>			
		</div>
	</div>
  	<div class="row">
	  	<div class="col-12 col-lg-4 mb-4 d-flex align-items-lg-end">
	  		<button class="btn-block text-center" style="background: linear-gradient(to right, rgb(254,193,0) , rgb(247,228,0));border: none;padding: 7px 23px;font-size: 12pt;font-weight: normal;border-radius: 18px;" type="submit" name="submit">Simpan Data Peraturan</button>
	    </div>
	    <div class="col-12 col-lg-4 mb-4 d-flex align-items-lg-end">
	  		<button class="btn-block text-center" onclick="back();" style="background: linear-gradient(to right, rgb(254,193,0) , rgb(247,228,0));border: none;padding: 7px 23px;font-size: 12pt;font-weight: normal;border-radius: 18px;" type="button">Kembali Ke Tabel</button>
	  	</div>
  	</div>

</form>
<div class="clearfix"></div>

<script>
	function back(){
		var urlAdd = "<?php echo base_url().'admin_peraturan/lists_peraturan'; ?>";
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

