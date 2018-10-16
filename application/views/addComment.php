<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" href="<?php echo base_url()?>css/styles.css" type="text/css" />
<link rel="shortcut icon" href="<?php echo base_url()?>assets/images/favicon.png">
     <link rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap.min.css">
     <link rel="stylesheet" href="<?php echo base_url()?>assets/css/animate.css">
     <link rel="stylesheet" href="<?php echo base_url()?>assets/css/magnific-popup.css">
     <link rel="stylesheet" href="<?php echo base_url()?>assets/css/font-awesome.min.css">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="<?php echo base_url()?>assets/css/style.css">
<link rel="stylesheet" href="<?php echo base_url()?>css/styles.css" type="text/css" />
</head>
<link rel="stylesheet" href="<?php echo base_url()?>css/styles.css" type="text/css" />
</head>
<body>

<nav id="mainNav" class="navbar navbar-default" style="background-color: #4785EB;border-radius: 0;">
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
                              <li class="active"><a href="<?php echo base_url() ?>">Home</a></li>
                              <li><a href="#about">About</a></li>
                              <li><a href="#learn">Learn</a></li>
                              <li><a href="#galeri">Galeri</a></li>
                              <li><a href="<?php echo base_url(); ?>home/mforum/1">Forum</a></li>
                              <?php
                                   if(!empty($forumDisplay)){
                                   foreach($forumDisplay as $row){ ?>
                                   <li><a href="<?php echo base_url();?>home/mforum/<?php echo $row->id     ?>"><?php echo $row->nama ?></a></li>
                              <?php
                                        }
                                   }
                              ?>
                         </ul>
                    </div>
               </div>
          </nav>


    <div id="body">
		<div id="content">
       <?php if(!empty($flashdata)) {echo '<div class="flashdata">'.$flashdata.'</div>';} ?>
        <form method="POST" action="<?php echo base_url() ?>home/saveComment">
        <input type="hidden" name="idthread" id="idthread" value="<?php echo $id ?>">
			 	<table class="tablereqComment">
               		 <tr>
                        	<td style="width:100px;">Thread</td>
                            <td style="width:10px;">:</td>
                            <td><label class="judul"><?php if(!empty($judul)) {echo $judul;} ?></label></td>
                        </tr>
             			<tr>
                        	<td style="width:100px;">Isi Komentar</td>
                            <td style="width:10px;">:</td>
                            <td> <textarea class="textareaku" id="isi" name="isi" ></textarea></td>
                        </tr>
                        <tr>
                        	<td></td>
                            <td></td>
                            <td>
                            <input type="submit" value="Submit" class="btn btn-rpl btn-lg">
                          <a class="btn btn-lg btn-danger" href="<?php echo base_url(); ?>home/mforum/1">Cancel</a></td>
                        </tr>
                </table>
              </form>  
        </div>
        
         
    	<div class="clear"></div>
    </div>
     <footer class="footer" id="footer" style="border-top: 1px solid #ddd;">
          <div class="container">
               <div class="row">
                    <div class="col-sm-2 col-xs-6">
                         <img src="<?php echo base_url()?>assets/images/logo.png">
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
</div>
</body>
</html>
