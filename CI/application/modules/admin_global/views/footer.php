      
    <div class="wrapper d-none d-lg-block">
      
      <!-- Footer -->
      <footer class="footer-sec">

      </footer>
      <!-- Footer -->

    </div>

    <div class="d-block d-lg-none">      
      <div class="space-nav-fot"></div>
      <footer class="p-3 d-flex align-items-center justify-content-center fix-bottom" style="background: linear-gradient(to right, rgb(254,193,0) , rgb(247,228,0));height: 75px;">
        <ul class="list-unstyled mb-0 d-flex align-items-center">
          <li class="nav-m-m float-left"><button class="nav-l-m btn-nav-m" style="border:none;background:none;"><img class="nav-img-m h-auto" src="<?= ASSETS_IMAGE ?>/home_icon.png" /></button></li>
          <li class="nav-m-m float-left"><a href="<?= base_url('verification-file')?>" class="nav-l-m " style="border:none;background:none;"><img class="nav-img-m h-auto" src="<?= ASSETS_IMAGE ?>/v-sprint.png" /></a></li>
          <li class="nav-m-m float-left"><a href="<?= base_url('report')?>" class="nav-l-m " style="border:none;background:none;"><img class="nav-img-m h-auto" src="<?= ASSETS_IMAGE ?>/report.png" /></a></li>
        </ul>
      </footer>
    </div>
      
    <!-- </div> -->
    <!-- Make page fluid-->

    <!-- </div> -->
    <!-- Wrap all page content end -->

    <!-- Import Jquery 3.3.1 -->
    <script type="text/javascript" src="<?= ASSETS_JS ?>jquery-3.3.1.min.js"></script>
		
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!-- <script src="<?= ASSETS_JS ?>bootstrap.min.js"></script> -->
    <!-- <script src="<?= ASSETS_JS ?>plugins/jquery.nicescroll.min.js"></script>
    <script src="<?= ASSETS_JS ?>plugins/blockui/jquery.blockUI.js"></script>
    <script src="<?= ASSETS_JS ?>plugins/summernote/summernote.min.js"></script>
    <script src="<?= ASSETS_JS ?>plugins/chosen/chosen.jquery.min.js"></script>
    <script src="<?= ASSETS_JS ?>plugins/datepicker/bootstrap-datepicker.js"></script>
    <script src="<?= ASSETS_JS ?>plugins/colorpicker/bootstrap-colorpicker.min.js"></script>
    <script src="<?= ASSETS_JS ?>minoral.min.js"></script>
		<script src="<?= ASSETS_JS ?>plugins/ckeditor/ckeditor.js"></script>
    <script src="<?= ASSETS_PLUGINS ?>select2/select2.full.min.js"></script>-->
    <script src="<?= ASSETS_JS ?>nprogress.js"></script> 

    <!-- Import Bootstrap JS -->
    <script type="text/javascript" src="<?= ASSETS_JS ?>bootstrap/bootstrap.min.js"></script>

    <!-- Import Owl Carousel JS -->
    <script type="text/javascript" src="<?= ASSETS_JS ?>owlcarousel/owl.carousel.min.js"></script>

    <!-- Import WOW JS -->
    <script type="text/javascript" src="<?= ASSETS_JS ?>wow/wow.min.js"></script>

    <!-- Import Javascript -->
    <script type="text/javascript" src="<?= ASSETS_JS ?>script.js"></script>
		
    <script>

      //initialize file upload button function
      $(document)
        .on('change', '.btn-file :file', function() {
          var input = $(this),
          numFiles = input.get(0).files ? input.get(0).files.length : 1,
          label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
          input.trigger('fileselect', [numFiles, label]);
      });

      $(function(){
        
        //load wysiwyg editor
        $('#input06').summernote({
          height: 130   //set editable area's height
        });

        //chosen select input
        $(".chosen-select").chosen({disable_search_threshold: 10});

        //initialize datepicker
        $('.datepicker').datepicker({
          format: 'dd-mm-yyyy',
          todayHighlight: true
        });

        //initialize file upload button
        $('.btn-file :file').on('fileselect', function(event, numFiles, label) {
          
          var input = $(this).parents('.input-group').find(':text'),
            log = numFiles > 1 ? numFiles + ' files selected' : label;
          
          if( input.length ) {
            input.val(log);
          } else {
            if( log ) alert(log);
          }
          
        });
        $(".select2").select2();

      })
        
      CKEDITOR.replace('ckeditor',{ 
        filebrowserWindowWidth: '900',
        filebrowserWindowHeight: '400',
        filebrowserImageBrowseUrl: '<?php echo base_url()?>assets/kcfinder/browse.php?opener=ckeditor&type=images',
        filebrowserFlashBrowseUrl: '<?php echo base_url()?>assets/kcfinder/browse.php?opener=ckeditor&type=Flash',			
      });
      
    </script>

    <script>
      $('.db-carousel').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        dots: false,
        navText: ["<img src='<?= ASSETS_IMAGE ?>/right_arrow.png' style='display: none;'>","<img src='<?= ASSETS_IMAGE ?>/right_arrow.png'>"],
        responsive:{
          0:{
              items:1
          },
          600:{
              items:3
          },
          1000:{
              items:5
          }
        }
      })

      $('.db-carousel-m').owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        dots: false,
        items: 4
      })
    </script>
    <script>
      $('.btn-nav-m').on("click", function(e) {
        $('#header-m').toggleClass('dflex');
      });
    </script>
		
  </body>
</html>