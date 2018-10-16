<!DOCTYPE html>
<html lang="en">
<head>

     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <title>HOME | RPL</title>
     <link rel="shortcut icon" href="<?php echo base_url()?>assets/images/favicon.png">
     <link rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap.min.css">
     <link rel="stylesheet" href="<?php echo base_url()?>assets/css/animate.css">
     <link rel="stylesheet" href="<?php echo base_url()?>assets/css/magnific-popup.css">
     <link rel="stylesheet" href="<?php echo base_url()?>assets/css/font-awesome.min.css">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="<?php echo base_url()?>assets/css/style.css">
<body>

     <section id="header">
          <nav id="mainNav" class="navbar navbar-default">
               <!--menu-->
               <div class="container">
                    <div class="navbar-header page-scroll">
                         <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                              <span class="sr-only">Toggle navigation</span>
                              <span class="icon-bar top-bar"></span>
                              <span class="icon-bar middle-bar"></span>
                              <span class="icon-bar bottom-bar"></span>
                         </button>
                         <a href="index.html" class="navbar-brand page-scroll"><h3 style="font-family: 'AvenirNext-DemiBold';color: #fff;margin-top: 0;font-size: 28px;">RPL</h3></a>
                    </div>

                    <!--navigation-->
                    <div class="collapse navbar-collapse" id="navigation">
                         <ul class="nav navbar-nav navbar-right">
                              <li class="active"><a href="http://localhost:8080/forum/">Home</a></li>
                              <li><a href="http://localhost:8080/forum/">About</a></li>
                              <li><a href="http://localhost:8080/forum/">Learn</a></li>
                              <li><a href="#galeri">Galeri</a></li>
                              <li><a href="<?php echo base_url(); ?>home/mforum2/1">Forum</a></li>
                              <?php
                                   if(!empty($forumDisplay)){
                                   foreach($forumDisplay as $row){ ?>
                                   <li><a href="<?php echo base_url();?>home/mforum/<?php echo $row->id ?>"><?php echo $row->nama ?></a></li>
                              <?php
                                        }
                                   }
                              ?>
                              <li><a href="forum.html">Contact Us</a></li>
                              <li><a data-toggle="modal" data-target="#register" style="margin-right: 10px;"><button class="btn btn-default">Buat Akun</button></a></li>
                              <li><a data-toggle="modal" data-target="#login" style="margin-left: 0;margin-right: 0;"><button class="btn btn-default btn-masuk">Masuk</button></a></li>
                         </ul>
                    </div>
               </div>
          </nav>

          <div class="container">
               <div class="row">
                    <div class="banner" style="margin-top: 70px;">
                         <div class="col-md-6 col-md-offset-3">
                              <h1 class="heading wow fadeInUp text-center">Galeri Prestasi</h1>
                              <p class="subtitle wow fadeInDown text-center">
                                   Voice & SMS services that transform how you communicate with your audience.Unlock access to a suite of intelligent voice services that will transform the way you communicate.
                              </p>
                         </div>
                    </div>
               </div>
          </div>
     </section>

     <section id="galeri">
          <div class="container">
               <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                         <h1 class="title text-center wow fadeInDown">Galeri Prestasi </h1>
                    </div>
                    <div class="col-md-12">
                         <a href="">
                              <div class="col-md-4">
                                   <div class="media">
                                        <div class="layer"><p>Lomba Hackathon Banyumas</p></div>
                                        <img src="<?php echo base_url()?>assets/images/galeri/duty.png" alt="" />
                                   </div>
                              </div>
                         </a>
                         <a href="">
                              <div class="col-md-4">
                                   <div class="media">
                                        <div class="layer"><p>Juara Lomba Web Design</p></div>
                                        <img src="<?php echo base_url()?>assets/images/galeri/duty2.png" alt="" />
                                   </div>
                              </div>
                         </a>
                         <a href="">
                              <div class="col-md-4">
                                   <div class="media">
                                        <div class="layer"><p>Juara Lomba Web Design</p></div>
                                        <img src="<?php echo base_url()?>assets/images/galeri/duty6.png" alt="" />
                                   </div>
                              </div>
                         </a>
                         <a href="">
                              <div class="col-md-8">
                                   <div class="media">
                                        <div class="layer"><p>Juara Lomba Web Design</p></div>
                                        <img src="<?php echo base_url()?>assets/images/galeri/dutybig.png" alt="" />
                                   </div>
                              </div>
                         </a>
                         <a href="">
                              <div class="col-md-4">
                                   <div class="media">
                                        <div class="layer"><p>Juara Lomba Web Design</p></div>
                                        <img src="<?php echo base_url()?>assets/images/galeri/rpl1.jpg" alt="" />
                                   </div>
                              </div>
                         </a>
                         <a href="">
                              <div class="col-md-4">
                                   <div class="media">
                                        <div class="layer"><p>Juara Lomba Web Design</p></div>
                                        <img src="<?php echo base_url()?>assets/images/galeri/duty.png" alt="" />
                                   </div>
                              </div>
                         </a>
                         <a href="">
                              <div class="col-md-8">
                                   <div class="media">
                                        <div class="layer"><p>Juara Lomba Web Design</p></div>
                                        <img src="<?php echo base_url()?>assets/images/galeri/dutybig.png" alt="" />
                                   </div>
                              </div>
                         </a>
                         <a href="">
                              <div class="col-md-4">
                                   <div class="media" style="height: 530px;">
                                        <div class="layer"><p>Juara Lomba Web Design</p></div>
                                        <img src="<?php echo base_url()?>assets/images/galeri/dutylong.png" alt="" />
                                   </div>
                              </div>
                         </a>
                         <a href="">
                              <div class="col-md-4">
                                   <div class="media">
                                        <div class="layer"><p>Juara Lomba Web Design</p></div>
                                        <img src="<?php echo base_url()?>assets/images/galeri/duty.png" alt="" />
                                   </div>
                              </div>
                         </a>
                         <a href="">
                              <div class="col-md-4">
                                   <div class="media">
                                        <div class="layer"><p>Juara Lomba Web Design</p></div>
                                        <img src="<?php echo base_url()?>assets/images/galeri/duty.png" alt="" />
                                   </div>
                              </div>
                         </a>
                         <a href="">
                              <div class="col-md-4">
                                   <div class="media">
                                        <div class="layer"><p>Juara Lomba Web Design</p></div>
                                        <img src="<?php echo base_url()?>assets/images/galeri/duty.png" alt="" />
                                   </div>
                              </div>
                         </a>
                         <a href="">
                              <div class="col-md-4">
                                   <div class="media">
                                        <div class="layer"><p>Juara Lomba Web Design</p></div>
                                        <img src="<?php echo base_url()?>assets/images/galeri/duty.png" alt="" />
                                   </div>
                              </div>
                         </a>
                         <a href="">
                              <div class="col-md-4">
                                   <div class="media">
                                        <div class="layer"><p>Juara Lomba Web Design</p></div>
                                        <img src="<?php echo base_url()?>assets/images/galeri/duty.png" alt="" />
                                   </div>
                              </div>
                         </a>
                         <a href="">
                              <div class="col-md-4">
                                   <div class="media">
                                        <div class="layer"><p>Juara Lomba Web Design</p></div>
                                        <img src="<?php echo base_url()?>assets/images/galeri/duty.png" alt="" />
                                   </div>
                              </div>
                         </a>
                         <a href="">
                              <div class="col-md-4">
                                   <div class="media">
                                        <div class="layer"><p>Juara Lomba Web Design</p></div>
                                        <img src="<?php echo base_url()?>assets/images/galeri/duty.png" alt="" />
                                   </div>
                              </div>
                         </a>
                    </div>
               </div>
          </div>
     </section>

     <section id="demo">
          <div class="container">
               <div class="row">
                    <div class="text-demo">
                         <h3>Jadilah bagian dari kami sekarang juga.</h3>
                         <p>Let us show you just how simple communications can be.</p>
                    </div>
                    <div class="box-btn">
                         <a href="" class="btn btn-block">Lihat Forum</a>
                         <a href="" class="btn btn-outline">Hubungi Kami</a>
                    </div>
               </div>
          </div>
     </section>

     <footer class="footer" id="footer">
          <div class="container">
               <div class="row">
                    <div class="col-sm-2 col-xs-6">
                         <img src="images/logo.png">
                    </div>
                    <div class="col-sm-2 col-xs-6">
                         <h4>Navigation</h4>
                         <ul class="menu">
                              <li><a href="call-routing-and-management.html">Home</a></li>
                              <li><a href="call-tracking-analytics.html">About</a></li>
                              <li><a href="phone-number.html">Learn</a></li>
                              <li><a href="sms-marketing.html">Galeri</a></li>
                              <li><a href="sms-gateway.html">Forum</a></li>
                         </ul>
                    </div>
                    <div class="col-sm-2 col-xs-6">
                         <h4>Forum</h4>
                         <ul class="menu">
                              <li><a href="referrals.html">Forum</a></li>
                              <li><a href="">Alumni</a></li>
                         </ul>
                    </div>
                    <div class="col-sm-2 col-xs-6">
                         <h4>Company</h4>
                         <ul class="menu">
                              <li><a href="about-us.html">About us</a></li>
                              <li><a href="contact-us.html">Contact us</a></li>
                         </ul>
                    </div>
                    <div class="col-sm-2 col-xs-6">
                         <h4>Resources</h4>
                         <ul class="menu">
                              <li><a href="">Support</a></li>
                              <li><a href=".contact-us.html">Contact</a></li>
                         </ul>
                    </div>
               </div>
          </div>
          <div class="copyright">
               <div class="container">
                    <div class="row">
                         <div class="col-md-8">
                              <span>Copyright © Fone Dynamics Pty Ltd. All rights reserved.</span> <a href="">Privacy Policy</a> <a href="">Compliance Statement</a>
                         </div>
                    </div>
               </div>
          </div>
     </footer>





     <!--- MODAL -->
     <div id="img-modal" class="modal fade" role="dialog">
          <div class="modal-dialog">
               <!-- Modal content-->
               <div class="modal-content">
                    <div class="modal-header">
                         <button type="button" class="close" data-dismiss="modal">&times;</button>
                         <h4 class="modal-title">Modal Header</h4>
                    </div>
                    <div class="modal-body">
                         <p>Some text in the modal.</p>
                    </div>
                    <div class="modal-footer">
                         <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
               </div>
          </div>
     </div>

<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
          <div class="modal-dialog">
               <div class="modal-content">
                    <div class="modal-body">
                         <div class="bg-modal">
                              <h2>Software Enginering</h2>
                              <p>SMK TELKOM PURWOKERTO</p>
                         </div>
                         <div class="form-modal">
                         <?php if(!empty($flashdata)) {echo '<div class="flashdatax">'.$flashdata.'  </div>';} ?>
                              <h2>Please Login Now!</h2>
                              <div class="form-area"><!-- .Form-area -->
                                   <form id="login" name="frm" method="POST" action="<?php echo base_url()?>home/cekuser">
                                        <div class="form-group">
                                             <input name="user" type="text" class="form-control" placeholder="Nama Akun" />
                                        </div>
                                        <div class="form-group">
                                             <input name="pass" type="password" class="form-control" placeholder="Password" id="pwd" />
                                        </div>
                                        <div class="row">
                                             <div class="col-md-6 col-xs-6">
                                                  <a href=""><p class="text-left">Lupa Password ?</p></a>
                                             </div>
                                             <div class="col-md-6 col-xs-6">
                                                  <button type="submit" class="btn btn-submit" value="Masuk">Masuk</button>
                                             </div>
                                        </div>
                                   </form>
                              </div><!-- / .Form-area -->
                         </div>
                    </div>
               </div>
          </div>
     </div>

     <div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
          <div class="modal-dialog">
               <div class="modal-content">
                    <div class="modal-body">
                         <div class="bg-modal">
                              <h2>Software Enginering</h2>
                              <p>SMK TELKOM PURWOKERTO</p>
                         </div>
                         <div class="form-modal">
                              <h2>Please Register!</h2>
                              <div class="form-area"><!-- .Form-area -->
                                   <form id="register" method="POST" action="<?php echo base_url()?>home/adduser">
                                        <div class="form-group">
                                             <input name="nama" type="text" id="nama" class="form-control" placeholder="Nama Anda" />
                                        </div>
                                        <div class="form-group">
                                             <input name="user" type="text" id="user" class="form-control" placeholder="Nama Akun" />
                                        </div>
                                        <div class="form-group">
                                             <input name="pass" type="password" id="pass" class="form-control" placeholder="Password" id="pwd" />
                                        </div>
                                        <div class="row">
                                             <div class="col-md-6 col-xs-6">
                                                  <a href=""><p class="text-left">Lupa Password ?</p></a>
                                             </div>
                                             <div class="col-md-6 col-xs-6">
                                                  <a><input type="submit" value="Daftar" href="" class="btn btn-submit"></a>
                                             </div>
                                        </div>
                                   </form>
                              </div><!-- / .Form-area -->
                         </div>
                    </div>
               </div>
          </div>
     </div>




     <!-- SCRIPTS -->
     <script src="<?php echo base_url()?>assets/js/jquery.js"></script>
     <script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
     <script src="<?php echo base_url()?>assets/js/smoothscroll.js"></script>
     <script src="<?php echo base_url()?>assets/js/jquery.parallax.js"></script>
     <script src="<?php echo base_url()?>assets/js/jquery.magnific-popup.min.js"></script>
     <script src="<?php echo base_url()?>assets/js/magnific-popup-options.js"></script>
     <script src="<?php echo base_url()?>assets/js/wow.min.js"></script>
     <script src="<?php echo base_url()?>assets/js/custom.js"></script>

</body>
</html>