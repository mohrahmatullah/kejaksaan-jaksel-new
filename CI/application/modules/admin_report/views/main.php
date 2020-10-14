
        <!-- Page content -->
        <!-- <div id="content" class="col-md-12"> -->
          
          <!-- breadcrumbs -->
          <!-- <div class="breadcrumbs">
            <ol class="breadcrumb">
              <li><a href="<?= base_url() ?>"><i class="fa fa-money"></i> Dashboard</a></li>
              <li class="active">Report Sprint Kejaksaan Negeri</li>
						</ol>
          </div> -->
          <!-- /breadcrumbs -->

          <!-- content main container -->
          <!-- <div class="main"> -->

            <!-- row -->
            <!-- <div class="row"> -->

              <!-- col 12 -->
              <!-- <div class="col-md-12"> -->
              
                <!-- tile -->
                <!-- <section class="tile cornered" style="min-height:650px;"> -->

                  <!-- tile body -->
                  <!-- <div class="tile-body">
										
										<div id="ajax_page">
											
										</div>
										
                  </div> -->
                  <!-- /tile body -->
                
                <!-- </section> -->
                <!-- /tile -->

              <!-- </div> -->
              <!-- /col 12 -->
        
            <!-- </div> -->
            <!-- /row -->

          <!-- </div> -->
          <!-- /content container -->

        <!-- </div> -->
        <!-- Page content end -->

				<!-- <script>
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
        </script> -->
        
      <!-- Main Content -->
      <div class="main" id="content" style="overflow-x: hidden;">
        <section class="px-xl-5">
          <section class="px-3 mt-3 mb-4 d-none d-lg-block">
            <div style="font-size: 2em;font-weight: 500;">REPORTS &nbsp;<a id="carireset" href="javascript:void(0);" onclick="carireset();" title="reset"><img class="" src="<?= ASSETS_IMAGE ?>/ico_ref.png" style="width: 50px;height: auto;" /></a></div>
          </section>
          <section>
            <div id="ajax_page">
              <?= $this->load->view('main_tabel_ajax') ?>
            </div>
          </section>
        </section>
      </div>
      
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
      <!-- /Main Content -->
