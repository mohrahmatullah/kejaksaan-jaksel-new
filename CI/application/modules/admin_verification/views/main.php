<!-- Main Content -->
<div class="main" id="content" style="overflow-x: hidden;">
  <section class="px-xl-5">
    <section class="px-3 mt-3 mb-4 d-none d-lg-block">
      <div style="font-size: 2em;font-weight: 500;">VERIFIKASI SPRINT &nbsp;<a id="carireset" href="javascript:void(0);" onclick="carireset();" title="reset"><img class="" src="<?= ASSETS_IMAGE ?>/ico_ref.png" style="width: 50px;height: auto;" /></a></div>
    </section>
    <section>
      <div id="ajax_page">
        <?= $this->load->view('main_tabel_ajax') ?>
      </div>
    </section>
  </section>
</div>
<!-- /Main Content -->
<script type="text/javascript">
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