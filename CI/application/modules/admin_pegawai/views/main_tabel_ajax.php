<!-- <div class="col-lg-8">
	<form class="" id="submitcaripegawai" method="post" action="" enctype="multipart/form-data">
			<label class="control-label col-lg-1" style="margin-top:8px;padding:0;">Cari</label>
			<div class="col-lg-5" style="padding:0;">
					<input type="text" id="caricust" name="caricust" class="form-control" value="">
			</div>
			<div class="col-lg-1" style="padding:0;">
				<button class="btn btn-info" id="caribtn" onclick="caricust();" type="submit"><i class="fa fa-search"></i></button>
			</div>
			<div class="col-lg-1" style="padding:0;">
				<a class="btn btn-warning" id="carireset" href="javascript:void(0);" onclick="carireset();" type="button" title="reset"><i class="fa fa-refresh"></i></a>
			</div>
			<div class="col-lg-4"></div>
	</form>
</div>
<div class="col-lg-4">
	<button class="btn btn-primary" style="float:right;margin-right:20px;" id="addpegawaibtn" onclick="addnew();"><i class="fa fa-plus-square"></i> Tambah Pegawai</button>
</div>

<div class="clearfix"></div>
<hr style="margin: 10px 15px 10px 15px;">
<div class="clearfix"></div>
						
<? if ($this->session->flashdata('pesan') != ''){ ?>
<div class="form-group row" style="padding: 0 20px 0 15px;">
	<label class="alert alert-success col-lg-12"><?= $this->session->flashdata('pesan') ?></label>
</div>
<? } ?>											

<div class="table-responsive">
    <table  class="posttable display table table-bordered table-striped" id="dynamic-table">
    <thead>
    <tr>
        <th style="width: 20px;">No</th>
        <th>NIK</th>
        <th>Nama Pegawai</th>
        <th>Jabatan</th>
        <th>Alamat</th>
        <th width="12%">&nbsp;</th>
    </tr>
    </thead>
    <tbody>
    <?php
    $total = $count;
    foreach ($rec as $data){
							?>  
    <tr>
        <td><?= $no; ?></td>
        <td><?= $data['nik'] ?></td>
        <td><?= $data['nama'] ?></td>
        <td><?= $data['tipe'] ?></td>
        <td><?= $data['alamat'] ?><br><?= $data['kabupaten'] ?>, <?= $data['propinsi'] ?></td>
        <td style="text-align:center;">
            <a class="btn btn-primary btn-sm" href="javascript:void(0);" onclick="editid(<?=$data["id_pegawai"] ?>,<?= $hal ?>,'<?= $cari ?>');" title="Edit" type="button"><i class="fa fa-pencil"></i></a>
			<? if ($this->session->userdata('user_login_level') == 'superadmin'){ ?>
				<a class="btn btn-danger btn-sm" href="javascript:void(0);" onclick="if (confirm('Apakah data akan dihapus ?')) deleteid(<?=$data["id_pegawai"] ?>,<?= $hal ?>,'<?= $cari ?>')" title="Delete" type="button"><i class="fa fa-trash"></i></a>
			<? } ?>
        </td>
    </tr>
    <?php
    $no++;
    }
    ?>               
    </tbody>
    </table>
</div>
												
<?= $paginator ?>
 -->

<!-- START DEKSTOP -->
<div class="d-none d-lg-block">
  <section class="px-3 mb-4">
    <div class="" style="width: 700px;">
      <div class="row">
        <div class="col-12">
          <span style="font-size: 24pt;">Cari</span>
          <form id="submitcaripegawai" method="post" action="" enctype="multipart/form-data" style="position: relative;display: inline-block;width: 80%;">
            <input type="text" id="caricust" name="caricust" class="px-3" style="font-size: 16pt;width: 100%;height: 60px;border-radius: 50px;border-color: rgba(0,0,0,.60);border-width: 1px;"/>
            <button id="caribtn" onclick="caricust();" type="submit" class="position-absolute" style="top: 0;right: 0;border: none;background: none;"><img class="" src="<?= ASSETS_IMAGE ?>/ico_src.png" style="width: 40px;height: auto;margin: .5rem 1rem;" /></button>
          </form>
          &nbsp;<a href="#" id="addpegawaibtn" onclick="addnew();"><img class="" src="<?= ASSETS_IMAGE ?>/ico_add.png" style="width: 50px;height: auto;" /></a>
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
              <span class="list-c-dt"><?= $data['nik'] ?></span>
              <a href="javascript:void(0);" onclick="viewdata(<?= $data['id_pegawai'] ?>);" class="list-c-nm"><?= $data['nama'] ?></a>
              <div style="display: flex;">
                <a href="javascript:void(0);" onclick="editid(<?=$data["id_pegawai"] ?>,<?= $hal ?>,'<?= $cari ?>');" class="list-c-mn d-inline-flex align-items-center mr-2"><img class="" src="<?= ASSETS_IMAGE ?>/task_ico.png" style="width: 35px;height: 35px;" /></a> 
              	<a href="javascript:void(0);" onclick="if (confirm('Apakah data akan dihapus ?')) deleteid(<?=$data["id_pegawai"] ?>,<?= $hal ?>,'<?= $cari ?>')" title="Delete" class="list-c-mn d-inline-flex align-items-center"><img class="" src="<?= ASSETS_IMAGE ?>/trash.png" style="width: 25px;height: 25px;" /></a>
              </div>                      
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
        <div class="text-uppercase" style="font-size: 12pt;font-weight: bold;color: rgba(0,0,0,.8)">PEGAWAI</div>
      </div>
      <div class="col-5 pl-0">
        <a id="carireset" href="javascript:void(0);" onclick="carireset();" title="reset" class="mr-3"><img class="" src="<?= ASSETS_IMAGE ?>/ico_ref.png" style="width: 35px;height: auto;" /></a>
        <a href="#" id="addpegawaibtn" onclick="addnew();"><img class="" src="<?= ASSETS_IMAGE ?>/ico_add.png" style="width: 35px;height: auto;" /></a>
      </div>
    </div>    
  </section>
  
  <section class="mb-3">
    <div class="w-100">
      <div class="row">
        <div class="col-12 d-inline-flex align-items-center">
          <span class="mr-3" style="font-size: 13pt;font-weight: bold;">Cari</span>
          <form id="submitcaripegawaimobile" method="post" action="" enctype="multipart/form-data" style="position: relative;display: inline-block;width: 80%;">
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
      <div class="col-12 col-lg-4 mb-4">
        <div class="list-c">
          <span class="list-c-dt"><?= $data['nik'] ?></span>
          <a href="javascript:void(0);" onclick="viewdata(<?=$data["id_pegawai"] ?>);" class="list-c-nm"><?= $data['nama'] ?></a>
          <div style="display: flex;">
            <a href="javascript:void(0);" onclick="editid(<?=$data["id_pegawai"] ?>,<?= $hal ?>,'<?= $cari ?>');" class="list-c-mn d-inline-flex align-items-center"><img class="" src="<?= ASSETS_IMAGE ?>/task_ico.png" style="width: 35px;height: 35px;" /></a> 
            <a href="javascript:void(0);" onclick="if (confirm('Apakah data akan dihapus ?')) deleteid(<?=$data["id_pegawai"] ?>,<?= $hal ?>,'<?= $cari ?>')" title="Delete" class="list-c-mn d-inline-flex align-items-center"><img class="" src="<?= ASSETS_IMAGE ?>/trash.png" style="width: 25px;height: 25px;" /></a>
          </div>
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
<div id="bd-example-modal-xl" class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content custom p-3">
      <div class="row mx-0 mb-3" style="border-bottom: 1px solid rgb(0,0,0);">
        <div class="col-12 d-flex justify-content-between align-items-center pb-2 detail-h">
        </div>
      </div>
      <div class="row mx-0 mb-3">
        <div class="col-12 detail-v">
        </div>
      </div>
    </div>
  </div>
</div>	
<!-- END POP UP -->	
<script>
	function carireset(){
		var urlAdd = "<?php echo base_url().'admin_pegawai/lists_pegawai/0/1'; ?>";
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
	
	function addnew(){
		var urlAdd = "<?php echo base_url().'admin_pegawai/add_pegawai'; ?>";
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

  function lihatid(id){
    var urlAdd = "<?php echo base_url().'admin_pegawai/lihat_pegawai/'; ?>" + id;
    $.ajax({
      url:urlAdd,
      beforeSend: function() {
        NProgress.start();
      },
      success:function(data) {
      console.log(data); 
        NProgress.done();
        $("#ajax_page").html(data);
        $(".select2").select2();
      }
    });
    //return false;
  }

	function viewdata(id){
		$('#bd-example-modal-xl').modal('show');
		var urlAdd = "<?php echo base_url().'admin_pegawai/view_pegawai/'; ?>" + id;
		var dataObj    = {};
    	dataObj.id     =  id;
    	var loop = "";
    	var head = "";
		$.ajax({
          url: urlAdd,
          type: 'POST',
          cache: false,
          datatype: 'json',
          data: {data:dataObj},
          headers: { 'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content') },
          success: function(data){
          	// console.log(data);
            loop += '<h5 class="mb-3"><strong>'+ data.nama + '</strong></h5><h5 class="mb-1">'+ data.alamat + '</h5><h5 class="mb-1">'+ data.nama_jabatan + '</h5>';
            head += '<h5 class="d-inline-flex">'+ data.nik + '</h5>';
            $(document).find('.detail-v').html(loop);
            $(document).find('.detail-h').html(head);
          },
          error:function(){}
    	});
	}
	
	function editid(id,page,cari){
		var urlHideUnhide = "<?php echo base_url().'admin_pegawai/edit_pegawai/'; ?>" + id + "/" + page + "/" + cari;
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

	function deleteid(id,page,cari){
		var urlHideUnhide = "<?php echo base_url().'admin_pegawai/delete/'; ?>" + id + "/" + page + "/" + cari;
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
	
	$(document).ready(function() {	
	
			$('#submitcaripegawai').submit(function(event) {
				event.preventDefault();
				var cari = $("#caricust").val();
				
				var formData = {
						'cari' : cari
				};

				var urlSearch = "<?= base_url('admin_pegawai/lists_pegawai') ?>" ;

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

      $('#submitcaripegawaimobile').submit(function(event) {
        event.preventDefault();
        var cari = $("#caricustmobile").val();
        
        var formData = {
            'cari' : cari
        };

        var urlSearch = "<?= base_url('admin_pegawai/lists_pegawai') ?>" ;

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
</script>				

