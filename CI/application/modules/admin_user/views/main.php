
        <!-- Main Content -->
        <main class="main" id="content">
          <section class="px-5">
            <section class="px-3 mt-3 mb-4">
              <div style="font-size: 2em;font-weight: 500;">User &nbsp;<a id="carireset" href="javascript:void(0);" onclick="carireset();" type="button" title="reset"><img class="" src="<?= ASSETS_IMAGE ?>/ico_ref.png" style="width: 50px;height: auto;" /></a></div>
            </section>
            <div id="ajax_page">
              <?= $this->load->view('main_tabel_ajax') ?>
            </div>

          </section>
        </main>
        <!-- /Main Content -->

				<script>
				function ajaxPage(urlLink)
				{  
					$.ajax({
						url:urlLink,
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
				</script>

