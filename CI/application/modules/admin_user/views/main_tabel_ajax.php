												<!-- <div class="col-lg-8">
													<form class="" id="submitcariCustomer" method="post" action="" enctype="multipart/form-data">
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
													<button class="btn btn-primary" style="float:right;margin-right:20px;" id="addcustomerbtn" onclick="addnew();"><i class="fa fa-plus-square"></i> Tambah User</button>
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
                            <th>Nama user</th>
                            <th>Level</th>
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
                            <td><?= $data['nama'] ?></td>
                            <td><?= ucwords($data['level']) ?></td>
                            <td style="text-align:center;">
                                <a class="btn btn-primary btn-sm" href="javascript:void(0);" onclick="editid(<?=$data["id"] ?>,<?= $hal ?>,<?= $cari ?>);" title="Edit" type="button"><i class="fa fa-check"></i></a>
                                <a class="btn btn-danger btn-sm" href="javascript:void(0);" onclick="if (confirm('Apakah data akan dihapus ?')) deleteid(<?=$data["id"] ?>,<?= $hal ?>,<?= $cari ?>)" title="Delete" type="button"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                        <?php
                        $no++;
                        }
                        ?>               
                        </tbody>
                        </table>
												</div> -->
  <section class="px-3 mb-4">
    <div class="" style="width: 700px;">
      <div class="row">
        <div class="col-12">
          <span style="font-size: 24pt;">Cari</span>
          <form id="submitcariCustomer" method="post" action="" enctype="multipart/form-data" style="position: relative;display: inline-block;width: 80%;">
            <input type="text" id="caricust" name="caricust" class="px-3" style="font-size: 16pt;width: 100%;height: 60px;border-radius: 50px;border-color: rgba(0,0,0,.60);border-width: 1px;"/>
            <button id="caribtn" onclick="caricust();" type="submit" class="position-absolute" style="top: 0;right: 0;border: none;background: none;"><img class="" src="<?= ASSETS_IMAGE ?>/ico_src.png" style="width: 40px;height: auto;margin: .5rem 1rem;" /></button>
          </form>
          &nbsp;<a href="#" id="addcustomerbtn" onclick="addnew();"><img class="" src="<?= ASSETS_IMAGE ?>/ico_add.png" style="width: 50px;height: auto;" /></a>
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
              <span class="list-c-dt"><?= $data['nama'] ?></span>
              <a href="javascript:void(0);" onclick="editid(<?=$data["id"] ?>,<?= $hal ?>,<?= $cari ?>);" title="Edit" type="button" class="list-c-nm"><?= ucwords($data['level']) ?></a>
              <button onclick="if (confirm('Apakah data akan dihapus ?')) deleteid(<?=$data["id"] ?>,<?= $hal ?>,<?= $cari ?>)" title="Delete" type="button" class="list-c-mn"><img class="" src="<?= ASSETS_IMAGE ?>/trash.png" style="width: 40px;height: auto;" /></button>
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
												
<script>
	function carireset(){
		var urlAdd = "<?php echo base_url().'admin_user/lists_user/0/1'; ?>";
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
		var urlAdd = "<?php echo base_url().'admin_user/add_user'; ?>";
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
	
	function editid(id,page,cari){
		var urlHideUnhide = "<?php echo base_url().'admin_user/edit_user/'; ?>" + id + "/" + page + "/" + cari;
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
		var urlHideUnhide = "<?php echo base_url().'admin_user/delete/'; ?>" + id + "/" + page + "/" + cari;
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
	
			$('#submitcariCustomer').submit(function(event) {
				event.preventDefault();
				var cari = $("#caricust").val();
				
				var formData = {
						'cari' : cari
				};

				var urlSearch = "<?= base_url('admin_user/lists_user') ?>" ;

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

