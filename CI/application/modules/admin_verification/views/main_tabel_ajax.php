<!-- START DEKSTOP -->
<div class="d-none d-lg-block">
	<section class="px-3 mb-4">
		<div class="" style="width: 700px;">
		  <div class="row">
		    <div class="col-12">
		      <form class="" id="submitcariverification" method="post" action="" enctype="multipart/form-data">
              <span style="font-size: 24pt;">Cari</span>
              <div style="position: relative;display: inline-block;width: 80%;">
                <input type="text" id="caricust" name="caricust" onkeypress="return runScript(event)" value="" class="px-3" style="font-size: 16pt;width: 100%;height: 60px;border-radius: 50px;border-color: rgba(0,0,0,.60);border-width: 1px;"/>
                <a id="caribtn" onclick="cariVerif();" class="position-absolute" style="top: 0;right: 0;">
                  <img class="" src="<?= ASSETS_IMAGE ?>/ico_src.png" style="width: 40px;height: auto;margin: .5rem 1rem;" />
                </a>
              </div>
              <a id="carireset" href="javascript:void(0);" onclick="carireset();">
                <img class="" src="<?= ASSETS_IMAGE ?>/ico_ref.png" style="width: 50px;height: auto;" />
              </a>
            </form>
		    </div>
		  </div>
		</div>    
	</section>

	<? if ($this->session->flashdata('pesan') != ''){ ?>
	<div class="form-group row" style="padding: 0 20px 0 15px;">
		<label class="alert alert-success col-lg-12"><?= $this->session->flashdata('pesan') ?></label>
	</div>
	<? } ?>	

	<section class="px-3 mb-4">
		<div class="row">
		  <div class="col-12">
		    <div class="row">
		      <?php
			    $total = $count;
			    foreach ($rec as $data){
										?>
		      <div class="col-12 col-lg-4 mb-4">
                  <div class="list-c">
                    <span class="list-c-dt" style="font-size: 16px; font-weight: 600;"><?= date('d M Y', strtotime($data['tglbuat'])) ?></span>
                    <a onclick="viewDetail(<?= $data['id_uraian'] ?>);" class="list-c-nm text-black cursor-pointer"><?= $data['namauraian'] ?></a>
                    <!-- <button type="button" onclick="viewDetail(<?= $data['id_uraian'] ?>);" class="list-c-mn">
                      <img class="" src="<?= ASSETS_IMAGE ?>/m_ico.png" style="width: 40px;height: auto;" />
                    </button> -->
                    <div style="display: flex;">
			            <a href="javascript:void(0);" onclick="editid(<?=$data["id_uraian"] ?>,<?= $hal ?>,'<?= $cari ?>');" class="list-c-mn d-inline-flex align-items-center"><img class="" src="<?= ASSETS_IMAGE ?>/task_ico.png" style="width: 35px;height: 35px;" /></a>
			            <? if ($this->session->userdata('user_login_level') == 'superadmin'){ ?> 
			            <a href="javascript:void(0);" onclick="if (confirm('Apakah data akan dihapus ?')) deleteid(<?=$data["id_uraian"] ?>,<?= $hal ?>,'<?= $cari ?>')" title="Delete" class="list-c-mn d-inline-flex align-items-center"><img class="" src="<?= ASSETS_IMAGE ?>/trash.png" style="width: 25px;height: 25px;" /></a>
			            <? } ?>
			        </div>
                    <? if ($data['file_before'] != '' && $data['file_after'] != '' && $data['approved_kasie'] == '1'){ ?>
                    <img class="on-ico" src="<?= ASSETS_IMAGE ?>/on_img.png" />
                    <? } else if ($data['file_before'] != '' && $data['file_after'] != '' && $data['approved_kasie'] == '0'){ ?>
                    <img class="on-ico" src="<?= ASSETS_IMAGE ?>/on_img.png" />
                    <? } else { ?>
                    <img class="on-ico" src="<?= ASSETS_IMAGE ?>/off_ico.png"  />
                    <? } ?>
                    
                  </div>
                </div>
			    <?php
			    $no++;
			    }
			    ?>     
		    </div>
		  </div>
		</div>
	</section>
 	<?= $paginator ?>
</div>
<!-- END DEKSTOP -->
<!-- START MOBILE -->
<div class="d-block d-lg-none">
  <section class="mb-3 mt-5 mt-xl-0">
    <div class="row align-items-center">
      <div class="col-7 pr-0">
        <div class="text-uppercase" style="font-size: 12pt;font-weight: bold;color: rgba(0,0,0,.8)">Verifikasi Sprint Kejaksaan Negeri</div>
      </div>
      <div class="col-5 pl-0">
        <a id="carireset" href="javascript:void(0);" onclick="carireset();" title="reset" class="mr-3"><img class="" src="<?= ASSETS_IMAGE ?>/ico_ref.png" style="width: 35px;height: auto;" /></a>
      </div>
    </div>    
  </section>
  
  <section class="mb-3">
    <div class="w-100">
      <div class="row">
        <div class="col-12 d-inline-flex align-items-center">
          <span class="mr-3" style="font-size: 13pt;font-weight: bold;">Cari</span>
          <form id="submitcariuraianmobile" method="post" action="" enctype="multipart/form-data" style="position: relative;display: inline-block;width: 80%;">
            <input id="caricustmobile" name="caricustmobile" class="px-3" style="font-size: 10pt;width: 100%;height: 30px;border-radius: 50px;border-color: rgba(0,0,0,.60);border-width: 1px;"/>
            <!-- <a href="" class="position-absolute" style="top: 0;right: 0;"><img class="" src="<?= ASSETS_IMAGE ?>/ico_src.png" style="width: 16px;height: auto;margin: .5rem 1rem;" /></a> -->
            <button id="caribtn" onclick="caricustmobile();" type="submit" class="position-absolute" style="top: 0;right: 0;border: none;background: none;"><img class="" src="<?= ASSETS_IMAGE ?>/ico_src.png" style="width: 16px;height: auto;margin: .5rem 1rem;" /></button>

          </form>
        </div>
      </div>
    </div>
  </section>

  <section class="">
    <div class="row">
      <?php
      $total = $count;
      foreach ($rec as $data){
                ?>
      <!-- <div class="col-12 col-lg-4 mb-4">
        <div class="list-c">
          <span class="list-c-dt"><?= $data['nama'] ?></span>
          <a href="javascript:void(0);" onclick="viewdata(<?=$data["id_uraian"] ?>);" class="list-c-nm"><?= $data['namasop'] ?></a>
          <div style="display: flex;">
            <a href="javascript:void(0);" onclick="editid(<?=$data["id_uraian"] ?>,<?= $hal ?>,'<?= $cari ?>');" class="list-c-mn d-inline-flex align-items-center"><img class="" src="<?= ASSETS_IMAGE ?>/task_ico.png" style="width: 35px;height: 35px;" /></a> 
            <a href="javascript:void(0);" onclick="if (confirm('Apakah data akan dihapus ?')) deleteid(<?=$data["id_uraian"] ?>,<?= $hal ?>,'<?= $cari ?>')" title="Delete" class="list-c-mn d-inline-flex align-items-center"><img class="" src="<?= ASSETS_IMAGE ?>/trash.png" style="width: 25px;height: 25px;" /></a>
          </div>
        </div>
      </div> -->
	      	<div class="col-12 col-lg-4 mb-4">
              <div class="list-c">
                <span class="list-c-dt" style="font-size: 16px; font-weight: 600;"><?= date('d M Y', strtotime($data['tglbuat'])) ?></span>
                <a onclick="viewDetail(<?= $data['id_uraian'] ?>);" class="list-c-nm text-black cursor-pointer"><?= $data['namauraian'] ?></a>
                <!-- <button type="button" onclick="viewDetail(<?= $data['id_uraian'] ?>);" class="list-c-mn">
                  <img class="" src="<?= ASSETS_IMAGE ?>/m_ico.png" style="width: 40px;height: auto;" />
                </button> -->
                <div style="display: flex;">
		            <a href="javascript:void(0);" onclick="editid(<?=$data["id_uraian"] ?>,<?= $hal ?>,'<?= $cari ?>');" class="list-c-mn d-inline-flex align-items-center"><img class="" src="<?= ASSETS_IMAGE ?>/task_ico.png" style="width: 35px;height: 35px;" /></a>
		            <? if ($this->session->userdata('user_login_level') == 'superadmin'){ ?> 
		            <a href="javascript:void(0);" onclick="if (confirm('Apakah data akan dihapus ?')) deleteid(<?=$data["id_uraian"] ?>,<?= $hal ?>,'<?= $cari ?>')" title="Delete" class="list-c-mn d-inline-flex align-items-center"><img class="" src="<?= ASSETS_IMAGE ?>/trash.png" style="width: 25px;height: 25px;" /></a>
		            <? } ?>
		        </div>
                <? if ($data['file_before'] != '' && $data['file_after'] != '' && $data['approved_kasie'] == '1'){ ?>
                <img class="on-ico" src="<?= ASSETS_IMAGE ?>/on_img.png" />
                <? } else if ($data['file_before'] != '' && $data['file_after'] != '' && $data['approved_kasie'] == '0'){ ?>
                <img class="on-ico" src="<?= ASSETS_IMAGE ?>/on_img.png" />
                <? } else { ?>
                <img class="on-ico" src="<?= ASSETS_IMAGE ?>/off_ico.png"  />
                <? } ?>
                
              </div>
            </div>
        <?php
      $no++;
      }
      ?>

    </div>
  </section>
  <?= $paginator ?>
</div>
<!-- END MOBILE -->
<!-- START POP UP -->
  <!-- <div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content custom p-3">
        <div class="row mx-0 mb-3">
          <div class="col-12 detail-v">
          </div>
        </div>
      </div>
    </div>
  </div> -->
  <div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true" id="modalVerif">
    <div class="modal-dialog modal-xl">
        <div class="modal-content custom p-3">
            <div class="row mx-0 mb-3" style="border-bottom: 1px solid rgb(0,0,0);">
                <div class="col-12 d-flex justify-content-between align-items-center pb-2">
                  <h5 class="d-inline-flex">ID Verifikasi: &nbsp;<span id="idVerifSpan"></span></h5>
                  <div class="d-inline-flex">
                  	<span id="statusVerif" style="border-radius: 20px;padding: 5px 15px;color: #fff;font-size: 12pt;font-weight: normal;"></span>
                  </div>
                </div>
            </div>
            <div class="row mx-0 mb-3">
                <div class="col-12">
                    <h5 class="mb-1">Nama Pegawai: <span id="namaPegawaiVerif"></span></h5>
                    <h5 class="mb-1">Peraturan: <span id="peraturanVerif"></span></h5>
                    <h5 class="mb-1">SOP: <span id="sopVerif"></span></h5>
                    <h5 class="mb-1">Sprint: <span id="sprintVerif"></span></h5>
                    <h5 class="mb-1">File Before: <span id="fileBeforeVerif"></span></h5>
                    <h5 class="mb-1">Time Before: <span id="timeBeforeVerif"></span></h5>
                    <h5 class="mb-1">File After : <span id="fileAfterVerif"></span></h5>
                    <h5 class="mb-1">Time After : <span id="timeAfterVerif"></span></h5>
                    <h5 class="mb-1">Deskripsi: <span id="deskripsiVerif"></span></h5>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END POP UP -->		
		
<script type="text/javascript">
	$(document).ready(function() {	
	
			$('#submitcariuraian').submit(function(event) {
				event.preventDefault();
				var cari = $("#caricust").val();
				
				var formData = {
						'cari' : cari
				};

				var urlSearch = "<?= base_url('admin_verification/lists_verification/0/1') ?>" ;
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
			$('#submitcariuraianmobile').submit(function(event) {
				event.preventDefault();
				var cari = $("#caricustmobile").val();
				
				var formData = {
						'cari' : cari
				};

				var urlSearch = "<?= base_url('admin_verification/lists_verification/0/1') ?>" ;
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
	// function runScript(e) {
 //    if (e.keyCode == 13) {
 //    	cariVerif();
 //    }
	// }
	function carireset(){
		var urlAdd = "<?php echo base_url().'admin_verification/lists_verification/0/1'; ?>";
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
		return false;
	}

	function viewDetail(id){
		$('.bd-example-modal-xl').modal('show');
		var viewURL = "<?php echo base_url().'admin_verification/get_uraian_detail/'; ?>" + id;
		var dataObj = {};
    	dataObj.id = id;
		$.ajax({
          url: viewURL,
          type: 'POST',
          cache: false,
          datatype: 'json',
          data: {data:dataObj},
          headers: { 'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content') },
          success: function(data){
          	var page = $('#halamanVerif').val();
          	var cari = $('#cariVerif').val();
	        	if(data.file_before != '' && data.file_after != '' && data.approved_kasub == '1'){
	        		document.getElementById("statusVerif").innerHTML = "Terverifikasi";
	        		$("#statusVerif").css("background-color","#5cb85c");
	        	} else if(data.file_before != '' && data.file_after != '' && data.approved_kasub == '0'){
							document.getElementById("statusVerif").innerHTML = "Menunggu Approval";
							$("#statusVerif").css("background-color","#f0ad4e");
	        	} else{
	        		document.getElementById("statusVerif").innerHTML = "Belum Diproses";
	        		$("#statusVerif").css("background-color","#d9534f");
	        	}
          	document.getElementById("idVerifSpan").innerHTML = data.id_verification;
          	document.getElementById("namaPegawaiVerif").innerHTML = data.namapegawai;
          	document.getElementById("peraturanVerif").innerHTML = data.peraturan_lengkap;
          	document.getElementById("sopVerif").innerHTML = data.nama_sop;
          	document.getElementById("sprintVerif").innerHTML = data.nama_uraian;
          	document.getElementById("fileBeforeVerif").innerHTML = data.file_before;
          	document.getElementById("timeBeforeVerif").innerHTML = data.time_before;
          	document.getElementById("fileAfterVerif").innerHTML = data.file_after;
          	document.getElementById("timeAfterVerif").innerHTML = data.time_after;
          	document.getElementById("deskripsiVerif").innerHTML = data.deskripsi;
          	document.getElementById("namaVerifOnDelModal").innerHTML = data.nama_uraian;
          	$("#delVerif").attr('data-dismiss', 'modal');
          	$("#delVerif").attr('data-toggle', 'modal');
          	document.getElementById("delVerif").href = "#removeVerifModal";
          	document.getElementById("editVerif").href = "javascript:void(0);";
          	document.getElementById("editVerif").onclick = function() { editid(data.id_uraian,page,cari); };
          	document.getElementById("btnDelVerif").href = "javascript:void(0);";
          	document.getElementById("btnDelVerif").onclick = function() { deleteid(data.id_verification,page,cari); };
          	// document.getElementsByClassName("modal-backdrop").modal('hide');
          },
          error:function(){}
    	});
	}

	function cariVerif(){
		
		var cari = $("#caricust").val();
		
		var formData = {
				'cari' : cari
		};

		var urlSearch = "<?= base_url('admin_verification/lists_verification/0/1') ?>" ;

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
	}

	
	function addnew(){
		var urlAdd = "<?php echo base_url().'admin_verification/add_verification'; ?>";
		$.ajax({
			url:urlAdd,
			beforeSend: function() {
				NProgress.start();
			},
			success:function(data) { 
				NProgress.done();
				$("#ajax_page").html(data);
				$(".select2").select2();
			    $('#tanggal').datepicker({
			    	format: 'dd-mm-yyyy',
			        todayHighlight: true
			    });
			    $('.btn-file :file').on('fileselect', function(event, numFiles, label) {
			        
			        var input = $(this).parents('.input-group').find(':text'),
			          log = numFiles > 1 ? numFiles + ' files selected' : label;
			        
			        if( input.length ) {
			          input.val(log);
			        } else {
			          if( log ) alert(log);
			        }
			        
			    });
			    $('#deskripsi').summernote({
			        height: 150   //set editable area's height
			    });
			}
		});
		//return false;
	}
	
	function editid(id,page,cari){
		$('.modal-backdrop').remove();
		var urlHideUnhide = "<?php echo base_url().'admin_verification/edit_verification/'; ?>" + id + "/" + page + "/" + cari;
		$.ajax({
			url:urlHideUnhide,
			beforeSend: function() {
				NProgress.start();
			},
			success:function(data) { 
				NProgress.done();
				$("#ajax_page").html(data);
				$(".select2").select2();
			    $('#tanggal').datepicker({
			    	format: 'dd-mm-yyyy',
			        todayHighlight: true
			    });
			    $('.btn-file :file').on('fileselect', function(event, numFiles, label) {
			        
			        var input = $(this).parents('.input-group').find(':text'),
			          log = numFiles > 1 ? numFiles + ' files selected' : label;
			        
			        if( input.length ) {
			          input.val(log);
			        } else {
			          if( log ) alert(log);
			        }
			        
			    });
			    $('#deskripsi').summernote({
			        height: 150   //set editable area's height
			    });
			}
		});
		return false;
	}

	function deleteid(id,page,cari){
		$('#removeVerifModal').modal('show');
		var urlHideUnhide = "<?php echo base_url().'admin_verification/delete/'; ?>" + id + "/" + page + "/" + cari;
		$.ajax({
			url:urlHideUnhide,
			beforeSend: function() {
				NProgress.start();
			},
			success:function(data) { 
				NProgress.done();
				$("#ajax_page").html(data);
				$(".select2").select2();
			}
		});
		return false;
	}
	
	// $(document).ready(function() {
	
	// 		$('#submitcariverification').submit(function(event) {
	// 			event.preventDefault();
	// 			var cari = $("#caricust").val();
				
	// 			var formData = {
	// 					'cari' : cari
	// 			};

	// 			var urlSearch = "<?= base_url('admin_verification/lists_verification') ?>" ;
	// 			carireset();

	// 			$.ajax({
	// 				type:'POST',
	// 				url:urlSearch,
	// 				data:formData,
	// 				beforeSend: function() {
	// 					NProgress.start();
	// 				},
	// 				success:function(data) { 
	// 					NProgress.done();
	// 					$("#ajax_page").html(data);
	// 					$(".select2").select2();
	// 				}
	// 			});
	// 			//return false;
	// 		});
			
	// });
</script>				

