<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8" />

		<title><?=$title?></title>
		<meta name="description" content="<?=$description?>" />
		<meta name="keywords" content="<?=$keywords?>" />

		<link rel="shortcut icon" href="<?=ASSETS_IMAGE.'icon.png'?>" />

    <!-- Bootstrap -->
    <!-- <link href="<?= ASSETS_CSS ?>bootstrap.min.css" rel="stylesheet">
    <link href="<?= ASSETS_CSS ?>font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= ASSETS_CSS ?>animate.min.css">
    <link rel="stylesheet" href="<?= ASSETS_CSS ?>summernote.css">
    <link rel="stylesheet" href="<?= ASSETS_CSS ?>summernote-bs3.css">
    <link rel="stylesheet" href="<?= ASSETS_CSS ?>chosen.min.css">
    <link rel="stylesheet" href="<?= ASSETS_CSS ?>chosen-bootstrap.css">
    <link rel="stylesheet" href="<?= ASSETS_CSS ?>datepicker3.css">
    <link rel="stylesheet" href="<?= ASSETS_CSS ?>bootstrap-colorpicker.css">
    <link rel="stylesheet" href="<?= ASSETS_CSS ?>bootstrap-checkbox.css">
    <link href="<?= ASSETS_CSS ?>minoral.css" rel="stylesheet">-->
    <link href="<?= ASSETS_CSS ?>nprogress.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="<?= ASSETS_PLUGINS ?>select2/select2.min.css">  -->

    <!-- Import Animate CSS -->
    <link rel="stylesheet" href="<?= ASSETS_CSS ?>animate/animate.css" />
	
	  <!-- Import Hamburgers CSS -->
    <link rel="stylesheet" href="<?= ASSETS_CSS ?>hamburgers/hamburgers.css" />

    <!-- Import Bootstrap CSS -->
    <link rel="stylesheet" href="<?= ASSETS_CSS ?>bootstrap/bootstrap.min.css" />

    <!-- Import Owl Carousel CSS -->
    <link rel="stylesheet" href="<?= ASSETS_CSS ?>owlcarousel/owl.carousel.min.css" />
    <link rel="stylesheet" href="<?= ASSETS_CSS ?>owlcarousel/owl.theme.default.min.css" />
    
    <!-- Import CSS -->
    <link rel="stylesheet" href="<?= ASSETS_CSS ?>style.css"/>
    <link rel="stylesheet" href="<?= ASSETS_CSS ?>style2.css"/>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- <script src="<?= ASSETS_JS ?>jquery-1.10.2.js"></script> -->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="brownish-scheme">

		<? if ($nav_active == 'home1'){ ?>
    <!-- Preloader -->
    <div class="mask"><div id="loader"></div></div>
    <!--/Preloader -->
		<? } ?>

    <!-- Wrap all page content here -->
    <!-- <div id="wrap"> -->

    <!-- Make page fluid -->
    <!-- <div class="row"> -->

    <div id="header-m" class="" style="display: none;">
      <header class="p-3 d-flex justify-content-between align-items-center" style="background: linear-gradient(to right, rgb(254,193,0) , rgb(247,228,0));height: 66px;">
        <div class="brand-m d-inline-flex">
          <img src="<?= ASSETS_IMAGE ?>/logo_text.png" style="width: 140px;height: 31px;" />
        </div>
        <div class="d-inline-flex ml-auto">
          <button class="nav-l-m btn-nav-m" style="border:none;background:none;"><img class="h-auto" src="<?= ASSETS_IMAGE ?>/close.png" style="width: 30px;"></button>
        </div>
      </header>
      <div class="row pt-3">
        <div class="col-12">
          <ul class="list-unstyled mb-0 nav-menu-m ">
            <li class=""><a href="<?= base_url() ?>" class="nav-link py-3" title="dashboard"><img class="nav-img h-auto mr-3" style="width: 36px;height: 36px;" src="<?= ASSETS_IMAGE ?>/home_icon.png" />Dashboard</a></li>
            <li class=""><a href="<?= base_url('pegawai') ?>" class="nav-link py-3" title="pegawai" ><img class="nav-img h-auto mr-3" style="width: 36px;height: 36px;" src="<?= ASSETS_IMAGE ?>/pegawai.png" />Pegawai</a></li>
            <li class=""><a href="<?= base_url('peraturan-jaksa-agung') ?>" class="nav-link py-3" title="peraturan jaksa agung"><img class="nav-img h-auto mr-3" style="width: 36px;height: 36px;" src="<?= ASSETS_IMAGE ?>/jaksa.png" />Peraturan Jaksa</a></li>
            <li class=""><a href="<?= base_url('sop') ?>" class="nav-link py-3" title="sop"><img class="nav-img h-auto mr-3" style="width: 36px;height: 36px;" src="<?= ASSETS_IMAGE ?>/sop.png" />SOP</a></li>
            <li class=""><a href="<?= base_url('uraian-kerja') ?>" class="nav-link py-3" title="sprint"><img class="nav-img h-auto mr-3" style="width: 36px;height: 36px;" src="<?= ASSETS_IMAGE ?>/task_ico.png" />Sprint</a></li>
            <li class=""><a href="<?= base_url('verification-file')?>" class="nav-link py-3" title="verifikasi sprint"><img class="nav-img h-auto mr-3" style="width: 36px;height: 36px;" src="<?= ASSETS_IMAGE ?>/v-sprint.png" />Verifikasi Sprint</a></li>
            <li class=""><a href="<?= base_url('report')?>" class="nav-link py-3" title="report"><img class="nav-img h-auto mr-3" style="width: 36px;height: 36px;" src="<?= ASSETS_IMAGE ?>/report.png" />Report</a></li>
            <li class=""><a href="<?= base_url('logout') ?>" class="nav-link py-3" title="logout"><img class="nav-img h-auto mr-3" style="width: 36px;height: 36px;" src="<?= ASSETS_IMAGE ?>/logout.png" />Logout</a></li>
          </ul>
        </div>
      </div>
      <!-- <div class="row align-content-end flex-wrap">
        <div class="col-12 text-center">
          <ul class="list-unstyled mb-0 nav-menu-m ">
            <li class="">
              <button class="btn-nav-m nav-link py-3 px-3 d-flex align-items-center justify-content-center text-uppercase"  style="border:none;background:none;">Exit</button>
            </li>
          </ul>
        </div>
      </div> -->
    </div>
