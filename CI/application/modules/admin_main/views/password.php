      <!-- Main Content -->
      <main class="main" id="content">
        <section class="px-5">
          <section class="px-3 mt-3 mb-4">
            <div style="font-size: 2em;font-weight: 500;">Change Password &nbsp;<a href=""><img class="" src="<?= ASSETS_IMAGE ?>/ico_ref.png" style="width: 50px;height: auto;" /></a>
              <? if ($this->session->userdata('user_login_level') == 'superadmin'){ ?>
                <a href="<?= base_url('user') ?>" class="btn btn-warning">Data User</a>
              <? } ?>
            </div>
          </section>
            <? if ($this->session->flashdata('pesan') != ''){ ?>
            <div class="form-group row" style="padding: 0 20px 0 15px;">
              <?= $this->session->flashdata('pesan') ?>
            </div>
            <? } ?>
            <form class="" id="" method="post" action="<?= base_url('admin_main/simpan_password')?>" enctype="multipart/form-data">
                <div class="form-group" id="newcustomer">
                    <div>
                        <label class="control-label col-lg-3">New Password</label>
                        <div class="col-lg-4" style="padding-bottom: 10px;">
                            <input type="password" id="password" name="password" class="form-control" value="" required>
                        </div>
                        <div class="clearfix"></div>
                        <label class="control-label col-lg-3">Confirm New Password</label>
                        <div class="col-lg-4" style="padding-bottom: 10px;">
                            <input type="password" id="password1" name="password1" class="form-control" value="" required>
                        </div>

                        <div class="clearfix"></div>
                        <hr style="margin: 10px 15px 20px 15px;">
                        <div class="clearfix"></div>

                        <div class="col-lg-3"></div>
                        <div class="col-lg-4">
                            <button type="submit" class="btn btn-info btn-block" name="submit">Change Password</button>
                        </div>
                        <div class="col-lg-2"></div>
                        <div class="col-lg-4"></div>
                    </div>

                </div>
            </form>
            <div class="clearfix"></div>

        </section>
      </main>
      <!-- /Main Content -->