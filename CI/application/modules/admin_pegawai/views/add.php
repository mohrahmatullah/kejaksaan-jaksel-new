<form class="" id="submitpegawaiAdd" method="post" action="" enctype="multipart/form-data">
	<div class="col-12 mb-4" id="newpegawai">
		<div class="row mb-2">
			<div class="col-lg-8 col-md-8 col-sm-12 py-3">
				<div class="row mb-4">
					<div class="col-12">
						<div style="font-size: 2em;font-weight: 500;">Tambah Pegawai</div>
					</div>
				</div>

				<div class="row mb-3">
          <div class="col-12">
            <h5>Nik</h5>
            <div class="form-sprint-bg">
              <input type="text" id="nik" name="nik" value="" class="form-sprint" placeholder="" />
            </div>                    
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-lg-6 col-md-6 col-sm-12 mb-3 mb-lg-0">
            <h5>Nama</h5>
            <div class="form-sprint-bg">
            	<input type="hidden" id="idpegawai" name="idpegawai" class="form-control" value="" >
		          <input type="text" id="namapegawai" name="namapegawai" class="form-sprint" value="" required>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12 mb-3 mb-lg-0">
            <h5>Jabatan</h5>
            <div class="form-sprint-bg">
						<select id="jabatanpegawai" class="form-sprint select2" onclick="disableSelectedItem(this);" name="jabatanpegawai" style="width:100%;" required>
								<option value="">Pilih Jabatan</option>
								<?php
										foreach ($pegawaitype as $data){
								?>
										<option value="<?=$data["id_jabatan"]?>"><?=$data["nama"]?></option>
								<?php
										}
								?>
						</select>
            </div>
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-lg-6 col-md-6 col-sm-12 mb-3 mb-lg-0">
            <h5>Jabatan Atasan</h5>
            <div class="form-sprint-bg">
              <select id="atasanpegawai" class="form-sprint select2" name="atasanpegawai" style="width:100%;">
                <option value="">Pilih Jabatan Dahulu</option>
                <?php
                    foreach ($pegawaitype as $data){
                ?>
                    <option value="<?=$data["id_jabatan"]?>"><?=$data["nama"]?></option>
                <?php
                    }
                ?>
              </select>
           </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12 mb-3 mb-lg-0">
            <h5>Nama Atasan</h5>
            <div class="form-sprint-bg" id="divAts">
            <select id="pegawainamaatasan" class="form-sprint select2" name="pegawainamaatasan" style="width:100%;">
              <option value="">Pilih Jabatan Atasan Dahulu</option>
            </select>
            </div>
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-12">
            <h5>Alamat</h5>
            <div class="form-sprint-bg">
            	<input type="text" id="alamatpegawai" name="alamatpegawai" class="form-sprint" value="">
            </div>
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-lg-6 col-md-6 col-sm-12 mb-3 mb-lg-0">
            <h5>Provinsi</h5>
            <div class="form-sprint-bg">
            	<select id="proppegawai" class="form-sprint select2" name="proppegawai" style="width:100%;">
  							<option value="">Pilih Propinsi</option>
  							<?php
  									foreach ($propinsiall as $data){
  							?>
  									<option value="<?=$data["id_propinsi"]?>"><?=$data["nama_propinsi"]?></option>
  							<?php
  									}
  							?>
  						</select>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12 mb-3 mb-lg-0">
            <h5>Kota / Kabupaten</h5>
            <div class="form-sprint-bg" id="divKab">
  						<select id="kabpegawai" class="form-sprint select2" name="kabpegawai" style="width:100%;">
  							<option value="">Pilih Propinsi Dahulu</option>
  						</select>
            </div>
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-12">
            <h5>No. Telp</h5>
            <div class="form-sprint-bg">
              <input type="text" id="telppegawai" name="telppegawai" class="form-sprint" value="">
            </div>                    
          </div>
        </div>                                    
        <div class="row mb-3">
          <div class="col-12">
            <h5>Email</h5>
            <div class="form-sprint-bg">
            	<input type="text" id="emailpegawai" name="emailpegawai" class="form-sprint" value="">
            </div>
          </div>
        </div>
			</div>
		</div>

	</div>
  <div class="row">
  	<div class="col-12 col-lg-4 mb-4 d-flex align-items-lg-end">
  		<button class="btn-block text-center" style="background: linear-gradient(to right, rgb(254,193,0) , rgb(247,228,0));border: none;padding: 7px 23px;font-size: 12pt;font-weight: normal;border-radius: 18px;" type="submit" name="submit">Simpan Data Pegawai</button>
    </div>
    <div class="col-12 col-lg-4 mb-4 d-flex align-items-lg-end">
  		<button class="btn-block text-center" onclick="back();" style="background: linear-gradient(to right, rgb(254,193,0) , rgb(247,228,0));border: none;padding: 7px 23px;font-size: 12pt;font-weight: normal;border-radius: 18px;" type="button">Kembali Ke Tabel</button>
  	</div>
  </div>
</form>
<div class="clearfix"></div>

<!-- <main>
  <section class="px-3 mt-3 mb-4">
    <div style="font-size: 2em;font-weight: 500;">Tambah Pegawai &nbsp;<a href=""><img class="" src="<?= ASSETS_IMAGE ?>/ico_ref.png" style="width: 50px;height: auto;" /></a></div>
  </section>
  
  <section class="px-3 mb-4">
    <div class="row">
      <div class="col-12">
        <form class="row" id="submitpegawaiAdd" method="post" action="" enctype="multipart/form-data">

          <div class="col-12 col-lg-9 mb-4" id="newpegawai">
            <div class="row mb-2">
              <div class="col-12 col-xl-6">
                <div class="row mb-3">
                  <div class="col-12">
                    <h5>Nik</h5>
                    <div class="form-sprint-bg">
                      <input type="text" id="nik" name="nik" value="" class="form-sprint" placeholder="" />
                    </div>
                    
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-12">
                    <h5>Nama</h5>
                    <div class="form-sprint-bg">
                    	<input type="hidden" id="idpegawai" name="idpegawai" class="form-control" value="" >
												<input type="text" id="namapegawai" name="namapegawai" class="form-sprint" value="" required>
                    </div>
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-12">
                    <h5>Alamat</h5>
                    <div class="form-sprint-bg">
                    	<input type="text" id="alamatpegawai" name="alamatpegawai" class="form-sprint" value="">
                    </div>
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-12">
                    <h5>Provinsi</h5>
                    <div class="form-sprint-bg">
                    	<select id="proppegawai" class="form-sprint select2" name="proppegawai" style="width:100%;">
													<option value="">Pilih Propinsi</option>
													<?php
															foreach ($propinsiall as $data){
													?>
															<option value="<?=$data["id_propinsi"]?>"><?=$data["nama_propinsi"]?></option>
													<?php
															}
													?>
												</select>
                    </div>
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-12">
                    <h5>Kota / Kabupaten</h5>
                    <div class="form-sprint-bg" id="divKab">
												<select id="kabpegawai" class="form-sprint select2" name="kabpegawai" style="width:100%;">
													<option value="">Pilih Propinsi Dahulu</option>
												</select>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 col-xl-6">
              	<div class="row mb-3">
                  <div class="col-12">
                    <h5>No. Telp</h5>
                    <div class="form-sprint-bg">
                      <input type="text" id="telppegawai" name="telppegawai" class="form-sprint" value="">
                    </div>
                    
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-12">
                    <h5>Jabatan</h5>
                    <div class="form-sprint-bg">
												<select id="jabatanpegawai" class="form-sprint select2" name="jabatanpegawai" style="width:100%;" required>
														<option value="">Pilih Jabatan</option>
														<?php
																foreach ($pegawaitype as $data){
														?>
																<option value="<?=$data["id_jabatan"]?>"><?=$data["nama"]?></option>
														<?php
																}
														?>
												</select>
                    </div>
                  </div>
                </div>                    
                <div class="row mb-3">
                  <div class="col-12">
                    <h5>Email</h5>
                    <div class="form-sprint-bg">
                    	<input type="text" id="emailpegawai" name="emailpegawai" class="form-sprint" value="">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-3 mb-4 d-flex align-items-lg-end">
            <button style="background: linear-gradient(to right, rgb(254,193,0) , rgb(247,228,0));border: none;padding: 7px 23px;font-size: 10pt;font-weight: normal;border-radius: 18px;" type="submit" name="submit">Simpan Data Pegawai</button>
          </div>

        </form>
      </div>
    </div>
  </section>
</main> -->

<script>
	function back(){
		var urlAdd = "<?php echo base_url().'admin_pegawai/lists_pegawai'; ?>";
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
	
			$('#proppegawai').change(function() {
					var urlHideUnhide = "<?php echo base_url().'admin_pegawai/get_opsi_kabupaten/'; ?>" + $('#proppegawai').val();
					$.ajax({
						url:urlHideUnhide,
						beforeSend: function() {
							NProgress.start();
						},
						success:function(data) { 
							NProgress.done();
							$("#divKab").html(data);
							$(".select2").select2();
						}
					});
					return false;
			});

      $('#atasanpegawai').change(function() {
          var urlHideUnhide = "<?php echo base_url().'admin_pegawai/get_opsi_nama_atasan/'; ?>" + $('#atasanpegawai').val();
          $.ajax({
            url:urlHideUnhide,
            beforeSend: function() {
              NProgress.start();
            },
            success:function(data) { 
              NProgress.done();
              $("#divAts").html(data);
              $(".select2").select2();
            }
          });
          return false;
      });
			
			$('#submitpegawaiAdd').submit(function(event) {
				event.preventDefault();
				var idpegawai = $("#idpegawai").val();
				var nik = $("#nik").val();
				var nama = $("#namapegawai").val();
				var jabatan = $("#jabatanpegawai").val();
				var alamat = $("#alamatpegawai").val();
				var propinsi = $("#proppegawai").val();
				var kabupaten = $("#kabpegawai").val();
				var telp = $("#telppegawai").val();
				var email = $("#emailpegawai").val();
        var pegawainamaatasan = $("#pegawainamaatasan").val();
				
				var formData = {
						'idpegawai' : idpegawai,
						'nik' : nik,
						'nama' : nama,
						'jabatan' : jabatan,
						'alamat' : alamat,
						'propinsi' : propinsi,
						'kabupaten' : kabupaten,
						'telp' : telp,
						'email' : email,
            'pegawainamaatasan' : pegawainamaatasan
				};

				var urlSearch = "<?= base_url('admin_pegawai/simpan_pegawai') ?>";

				$.ajax({
					type:'POST',
					url:urlSearch,
					data:formData,
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
			});
			
	});

  function disableSelectedItem(ddl) {
    var value = ddl.options[ddl.selectedIndex].value;
    var st = document.getElementById("atasanpegawai");

    if(ddl.options[4].value == value){
        st.options[0].disabled = true;
        st.options[1].disabled = true;
        st.options[2].disabled = true;
        st.options[3].disabled = false;
        st.options[4].disabled = true;
    }
    else if(ddl.options[3].value == value){
        st.options[0].disabled = true;
        st.options[1].disabled = true;
        st.options[2].disabled = false;
        st.options[3].disabled = true;
        st.options[4].disabled = true;
    }
    else if(ddl.options[2].value == value){
        st.options[0].disabled = true;
        st.options[1].disabled = false;
        st.options[2].disabled = true;
        st.options[3].disabled = true;
        st.options[4].disabled = true;
    }
    else if(ddl.options[1].value == value){
        st.options[0].disabled = true;
        st.options[1].disabled = true;
        st.options[2].disabled = true;
        st.options[3].disabled = true;
        st.options[4].disabled = true;
    }
    else if(ddl.options[0].value == value){
        st.options[0].disabled = true;
        st.options[1].disabled = true;
        st.options[2].disabled = true;
        st.options[3].disabled = true;
        st.options[4].disabled = true;
    }  
  }
</script>				
