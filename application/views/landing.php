<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <title>Perpustakaan</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/landingPage')?>/css/bootstrap.css" />
    <!-- main css -->
    <link rel="stylesheet" href="<?php echo base_url('assets/landingPage')?>/css/style.css" />
  </head>

  <body style = "background: url(<?=base_url('assets/landingPage')?>/home-banner.jpg) no-repeat center center fixed;height: 100%;width: 100%; background-position: center; background-repeat: no-repeat; background-size: cover;">
    <!--================ Start Home Banner Area =================-->
    <section >
      <div >
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="banner_content text-center" style="margin-top: 20%;">
                <h2 class="text-uppercase mt-4 mb-5">
                  Sistem 'CRUD' Perpustakaan
                </h2>
                <div>
                  <a href="<?php echo base_url('/login'); ?>"
                  style="display: inline-block;
                  background: #7f8040;
                  padding: 0px 48px;
                  color: #c6cbcc;
                  font-size: 13px;
                  font-weight: 500;
                  line-height: 50px;
                  border-radius: 5px;
                  outline: none !important;
                  text-align: center;
                  text-transform: uppercase;
                  cursor: pointer;
                  -webkit-transition: all 0.3s ease 0s;
                  -moz-transition: all 0.3s ease 0s;
                  -o-transition: all 0.3s ease 0s;
                  transition: all 0.3s ease 0s;">Pustakawan</a>
                  <a href="<?php echo base_url('/Perpustakaan/anggota'); ?>" 
                  style="display: inline-block;
                  background: #7f8040;
                  padding: 0px 48px;
                  color: #c6cbcc;
                  font-size: 13px;
                  font-weight: 500;
                  line-height: 48px;
                  border-radius: 5px;
                  border: 1px solid transparent;
                  outline: none !important;
                  text-align: center;
                  text-transform: uppercase;
                  cursor: pointer;
                  -webkit-transition: all 0.3s ease 0s;
                  -moz-transition: all 0.3s ease 0s;
                  -o-transition: all 0.3s ease 0s;
                  transition: all 0.3s ease 0s;">Anggota</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================ End Home Banner Area =================-->
  </body>
</html>
