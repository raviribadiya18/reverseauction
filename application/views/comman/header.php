<body class="counter-scroll">
<div id="loading-overlay">
	<div class="loader"></div>
</div>
<header id="header" class="header bg-color">
	<div class="container">
		<div class="flex-header">
			<div id="logo" class="logo">
				<a href="<?=base_url();?>" title="Logo"><img src="<?=base_url();?>assets/images/logo/ReverseLogo.png" data-width="80" data-height="34" alt="images" data-retina="<?=base_url();?>assets/images/logo/redrawn-logo.png"></a>
			</div>
			<div class="content-menu">
				<div class="nav-wrap">
					<div class="btn-menu"><span></span></div>
					<nav id="mainnav" class="mainnav">
						<ul class="menu">
							 <li class="<?php echo activate_menu('home'); ?>"><a href="<?php echo site_url();?>">HOME</a></li>
							<li class="<?php echo activate_menu('about'); ?>"><a href="<?php echo site_url('about');?>">ABOUT US</a></li>
							<li>
								<a href="#">OUR SERVICES</a>
								<ul class="sub-menu">
									<!-- <li class="<?php echo activate_menu('Testimonials'); ?>"><a href="<?php echo site_url('Testimonials');?>">TESTIMONIALS</a></li> -->
									<li class="<?php echo activate_menu('csr'); ?>"><a href="<?php echo site_url('csr');?>">CSR</a></li>
                                </ul>
							</li>
							<li class="<?php echo activate_menu('reverse_auction'); ?>"><a href="<?php echo site_url('reverse_auction');?>">REVERSE AUCTION</a></li>
							<li class="<?php echo activate_menu('testimonials'); ?>"><a href="<?php echo site_url('testimonials');?>">TESTIMONIALS</a></li>
							<li class="<?php echo activate_menu('contact'); ?>"><a href="<?php echo site_url('contact');?>">CONTACT US</a></li>

							<!-- <?php $uriMethod_name=$this->uri->segment(1);
                            ?>
                            <li <?php if($uriMethod_name==""){ echo "class='active'"; }else{ echo "class=''" ; } 
                                ?> ><a href="<?php echo base_url(); ?>">HOME</a>
                            </li>
                            <li <?php if($uriMethod_name=="about"){ echo "class='active'"; }else{ echo "class=''" ; } 
                                ?> ><a href="<?php echo base_url(); ?>index.php/about">ABOUT US</a>
                            </li>
                              <li <?php if($uriMethod_name=="testimonials"){ echo "class='active'"; }else{ echo "class=''" ; } 
                                ?> ><a href="<?php echo base_url(); ?>index.php/testimonials">TESTIMONIALS</a>
                            </li>
                            <li <?php if($uriMethod_name=="oursevice"){ echo "class='active'"; }else{ echo "class=''" ; } ?>>
                            	<ul>
                            		
                            <li <?php if($uriMethod_name=="csr"){ echo "class='active'"; }else{ echo "class=''" ; } ?>>
                            	<a href="<?php echo base_url(); ?>index.php/csr">CSR</a>
                            </li>
                            <li <?php if($uriMethod_name=="oursevice"){ echo "class='active'"; }else{ echo "class=''" ; }?>><a href="<?php echo base_url(); ?>index.php/reverse_auction">Reverse Auction</a>
                            </li>
                            	</ul>
                            </li>
                            <li <?php if($uriMethod_name=="video"){ echo "class='active'"; }else{ echo "class=''" ; } 
                                ?>><a href="<?php echo base_url(); ?>index.php/video">Video</a>
                            </li>
                            <li <?php if($uriMethod_name=="contact"){ echo "class='active'"; }else{ echo "class=''" ; } 
                                ?>><a href="<?php echo base_url(); ?>index.php/contact">Contact Us</a>
                            </li> -->
                           	<!--<li>
								<a href="<?=base_url();?>" class="active">Home</a>
							</li>
							<li>
								<a href="<?=base_url();?>index.php/about">About Us</a>
							</li>
							<li>
								<a href="#">Our Services</a>
								<ul class="sub-menu">
                                    <li><a href="<?=base_url();?>index.php/testimonials">Testimonials</a></li>
                                    <li><a href="<?=base_url();?>index.php/csr">CSR</a></li>
                                </ul>
							</li>
							<li>
								<a href="<?=base_url();?>index.php/Reverse_auction">Reverse Auction</a>
							</li>
							<li>
								<a href="<?=base_url();?>index.php/contact">Contact Us</a>
							</li>  -->

						</ul>                                
					</nav>
				</div>
			</div>
		</div>
	</div>
</header><!-- header -->
<div class="marq">
<marquee behavior="alternate" onmouseover="this.stop();" onmouseout="this.start();"> Helping Charities,Temples,Churches,Mosques,VWOs,NGOs etc to maximize your fund raising efforts.......Call: 91689889</marquee>
</div>
<style type="text/css">
.marq{
	background-color: black;
	color: white;
	font-family: arial;
	height: 30px;
	width: 100%;
}
.marq:hover{
	color: yellow;
}
</style>
