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
                              <li class="active"><a href="<?php echo base_url() ?>landing/index3">Home</a></li>
                              <li><a href="<?php echo base_url() ?>landing/index3">About</a></li>
                              <li><a href="<?php echo base_url() ?>landing/index3">Learn</a></li>
                              <li><a href="<?php echo base_url()?>landing/galeri2">Galeri</a></li>
                              
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

    <div id="body" style="padding: 70px 0px 120px 0px;">
		<div id="content">
        <a class="btn btn-rpl"  href="<?php echo base_url();?>home/createThread/<?php echo $id; ?>"> Buat Thread </a>
        
			<table class="tableforumFill" style="margin-top: 50px;;">
            <?php
				if(!empty($forumDisplayFill)){
					foreach($forumDisplayFill as $data){ ?>
                    <tr>
                    	<td style="width:100px;border-right:1px solid #CCC"><img  style="height:150px;width:100px" src="<?php echo base_url() ?>images/avatar.png"></td>
					 	<td> 
                           <label class="judul"><a href="<?php echo base_url() ?>home\detailThread\<?php echo $data->idforum?>"><?php echo $data->judul?></a></label><br>
                           <label class="user"> Oleh <?php echo $data->nama ?></label> |   <label class="tanggal">  Di Post Tanggal <?php echo $data->tanggal?> </label>  <br> <br> 
                           <label class="isi"><?php echo $data->isi?></label>
                        </td>
                        </tr>
					<?php
                    }
				} else { ?>
						<tr>
                        	<td colspan="2"><center> Thread Belum Tersedia </center></td>
                        </tr>
				<?php }		
			?>
            </table>
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

</body>
</html>
