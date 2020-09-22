<div class="main-container ace-save-state" id="main-container">
			<script type="text/javascript">
				try{ace.settings.loadState('main-container')}catch(e){}
			</script>

			<div id="sidebar" class="sidebar  responsive ace-save-state">
				<script type="text/javascript">
					try{ace.settings.loadState('sidebar')}catch(e){}
				</script>
				<ul class="nav nav-list">
					<li class="<?php if($page=="index"){echo"active";}?>">
						<a href="index.php">
							<i class="menu-icon fa fa-tachometer"></i>
							<span class="menu-text"> Dashboard </span>
						</a>

						<b class="arrow"></b>
					</li>
					<li class="<?php if($page=="booking"){echo"active";}?>">
						<a href="booking.php">
							<i class="menu-icon fa fa-list-alt"></i>
							<span class="menu-text"> ข้อมูลการจอง </span>
						</a>

						<b class="arrow"></b>
					</li>
					<li class="<?php if($page=="calendar"){echo"active";}?>">
						<a href="calendar.php">
							<i class="menu-icon fa fa-calendar"></i>
							<span class="menu-text"> ภาพรวมห้อง </span>
						</a>

						<b class="arrow"></b>
					</li>
					<li class="<?php if($page=="room_balan"){echo"active";}?>">
						<a href="room_balan.php">
							<i class="menu-icon fa fa-exchange"></i>
							<span class="menu-text"> การควบคุมห้อง </span>
						</a>

						<b class="arrow"></b>
					</li>
					<li class="<?php if($page=="rooms"){echo"active";}?>">
						<a href="rooms.php">
							<i class="menu-icon fa fa-home"></i>
							<span class="menu-text"> ข้อมูลห้องพัก </span>
						</a>
						<b class="arrow"></b>
					</li>
					<li class="<?php if($page=="package"){echo"active";}?>">
						<a href="package.php">
							<i class="menu-icon fa fa-home"></i>
							<span class="menu-text"> ข้อมูล Package</span>
						</a>
						<b class="arrow"></b>
					</li>
					<li class="<?php if($page=="promotion"){echo"active";}?>">
						<a href="promotion.php">
							<i class="menu-icon fa fa-certificate"></i>
							<span class="menu-text"> ข้อมูล promotion </span>
						</a>
						<b class="arrow"></b>
					</li>
					<li class="<?php if($page=="pricerooms"){echo"active";}?>">
						<a href="pricerooms.php">
							<i class="menu-icon fa fa-certificate"></i>
							<span class="menu-text">ราคาห้องพัก </span>
						</a>
						<b class="arrow"></b>
					</li>
					
					<li class="<?php if(($page=="activities")||($page=="dining")||($page=="romance")||($page=="manage_slide")||($page=="manage_gallery")||($page=="manage_gallery360")||($page=="contact")||($page=="Lifestyle")||($page=="Lifestyle1")||($page=="imgstyle")||($page=="ph")||($page=="facilties")||($page=="logo")||($page=="qr")||($page=="vdo")||($page=="edit_web")||($page=="edit_web1")||($page=="edit_web2")||($page=="Payment")){echo"active open";}?>">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-cogs"></i>
							<span class="menu-text">แก้ไขหน้าเว็บ</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">

							<li class="<?php if($page=="dining"){echo"active";}?>">
								<a href="dining.php">
									<i class="menu-icon fa fa-caret-right"></i>
									จัดการเมนู Dining
								</a>

								<b class="arrow"></b>
							</li>

							<li class="<?php if($page=="romance"){echo"active";}?>">
								<a href="romance.php">
									<i class="menu-icon fa fa-caret-right"></i>
									จัดการเมนู Romance
								</a>

								<b class="arrow"></b>
							</li>

							<li class="<?php if($page=="activities"){echo"active";}?>">
								<a href="activities.php">
									<i class="menu-icon fa fa-caret-right"></i>
									จัดการเมนู Activities
								</a>

								<b class="arrow"></b>
							</li>

							<li class="<?php if($page=="manage_slide"){echo"active";}?>">
								<a href="manage_slide.php">
									<i class="menu-icon fa fa-caret-right"></i>
									จัดการภาพสไลด์
								</a>

								<b class="arrow"></b>
							</li>
							<li class="<?php if($page=="manage_gallery"){echo"active";}?>">
								<a href="manage_gallery.php">
									<i class="menu-icon fa fa-caret-right"></i>
									จัดการรูปห้องพัก
								</a>

								<b class="arrow"></b>
							</li>
							<!--<li class="<?php if($page=="manage_gallery360"){echo"active";}?>">
								<a href="manage_gallery360.php">
									<i class="menu-icon fa fa-caret-right"></i>
									จัดการรูปห้องพัก 360
								</a>

								<b class="arrow"></b>
							</li>-->
							<li class="<?php if($page=="contact"){echo"active";}?>">
								<a href="contact.php">
									<i class="menu-icon fa fa-caret-right"></i>
									แก้ไขการติดต่อ
								</a>

								<b class="arrow"></b>
							</li>

							<li class="<?php if($page=="Lifestyle"){echo"active";}?>">
								<a href="Lifestyle.php">
									<i class="menu-icon fa fa-caret-right"></i>
									แก้ไข ข้อมูลการเดินทาง ทางเรือ
								</a>

								<b class="arrow"></b>
							</li>
							<li class="<?php if($page=="Lifestyle1"){echo"active";}?>">
								<a href="Lifestyle1.php">
									<i class="menu-icon fa fa-caret-right"></i>
									แก้ไข ข้อมูลการเดินทาง เครื่องบิน
								</a>

								<b class="arrow"></b>
							</li>
							<li class="<?php if($page=="imgstyle"){echo"active";}?>">
								<a href="imgstyle.php">
									<i class="menu-icon fa fa-caret-right"></i>
									จัดการรูปภาพหน้า contact
								</a>

								<b class="arrow"></b>
							</li>
							<li class="<?php if($page=="ph"){echo"active";}?>">
								<a href="ph.php">
									<i class="menu-icon fa fa-caret-right"></i>
									แก้ไขเบอร์โทรศัพท์
								</a>

								<b class="arrow"></b>
							</li>
							<li class="<?php if($page=="facilties"){echo"active";}?>">
								<a href="facilties.php">
									<i class="menu-icon fa fa-caret-right"></i>
									จัดการสิงอำนวยความสะดวก
								</a>

								<b class="arrow"></b>
							</li>
							<li class="<?php if($page=="logo"){echo"active";}?>">
								<a href="logo.php">
									<i class="menu-icon fa fa-caret-right"></i>
									จัดการ LOGO
								</a>

								<b class="arrow"></b>
							</li>
							<li class="<?php if($page=="qr"){echo"active";}?>">
								<a href="qr.php">
									<i class="menu-icon fa fa-caret-right"></i>
									จัดการรูปภาพ QR Code
								</a>

								<b class="arrow"></b>
							</li>
							<li class="<?php if($page=="vdo"){echo"active";}?>">
								<a href="vdo.php">
									<i class="menu-icon fa fa-caret-right"></i>
									จัดการVDO หน้าเว็บ
								</a>

								<b class="arrow"></b>
							</li>
							<li class="<?php if($page=="edit_web"){echo"active";}?>">
								<a href="edit_web.php">
									<i class="menu-icon fa fa-caret-right"></i>
									แก้ไขข้อความ Lifestyle
								</a>
								<b class="arrow"></b>
							</li>
							<li class="<?php if($page=="edit_web1"){echo"active";}?>">
								<a href="edit_web1.php">
									<i class="menu-icon fa fa-caret-right"></i>
									แก้ไขข้อความหน้ารายละเอียด
								</a>
								<b class="arrow"></b>
							</li>
							<li class="<?php if($page=="edit_web2"){echo"active";}?>">
								<a href="edit_web2.php">
									<i class="menu-icon fa fa-caret-right"></i>
									แก้ไขข้อความข้างบน
								</a>
								<b class="arrow"></b>
							</li>
							<li class="<?php if($page=="Payment"){echo"active";}?>">
								<a href="edit_Payment.php">
									<i class="menu-icon fa fa-caret-right"></i>
									แก้ไขข้อความหน้า Payment
								</a>
								<b class="arrow"></b>
							</li>
						</ul>
					</li>


<!-- 					<li class="<?php if(($page=="deluxe_panoramic_view")||($page=="deluxe_pool_access")||($page=="royal_suite_panoramic_view")||($page=="royal_suite_pool_view")||($page=="royal_suite_seaview")||($page=="penthouse_suite")||($page=="grand_royal_suite_seaview")){echo"active open";}?>">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-cogs"></i>
							<span class="menu-text">Accommodation</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="<?php if($page=="deluxe_panoramic_view"){echo"active";}?>">
								<a href="deluxe_panoramic_view.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Deluxe Panoramic View
								</a>
								<b class="arrow"></b>
							</li>
							
						</ul>
						<ul class="submenu">
							<li class="<?php if($page=="deluxe_pool_access"){echo"active";}?>">
								<a href="deluxe_pool_access.php">
									<i class="menu-icon fa fa-caret-right"></i>
									deluxe pool access
								</a>
								<b class="arrow"></b>
							</li>
							
						</ul>
						<ul class="submenu">
							<li class="<?php if($page=="royal_suite_panoramic_view"){echo"active";}?>">
								<a href="royal_suite_panoramic_view.php">
									<i class="menu-icon fa fa-caret-right"></i>
									royal suite panoramic view
								</a>
								<b class="arrow"></b>
							</li>
							
						</ul>
						<ul class="submenu">
							<li class="<?php if($page=="royal_suite_pool_view"){echo"active";}?>">
								<a href="royal_suite_pool_view.php">
									<i class="menu-icon fa fa-caret-right"></i>
									royal suite pool view
								</a>
								<b class="arrow"></b>
							</li>
							
						</ul>
						<ul class="submenu">
							<li class="<?php if($page=="royal_suite_seaview"){echo"active";}?>">
								<a href="royal_suite_seaview.php">
									<i class="menu-icon fa fa-caret-right"></i>
									royal suite seaview
								</a>
								<b class="arrow"></b>
							</li>
							
						</ul>
						<ul class="submenu">
							<li class="<?php if($page=="penthouse_suite"){echo"active";}?>">
								<a href="penthouse_suite.php">
									<i class="menu-icon fa fa-caret-right"></i>
									penthouse suite
								</a>
								<b class="arrow"></b>
							</li>
							
						</ul>
						<ul class="submenu">
							<li class="<?php if($page=="grand_royal_suite_seaview"){echo"active";}?>">
								<a href="grand_royal_suite_seaview.php">
									<i class="menu-icon fa fa-caret-right"></i>
									grand royal suite seaview
								</a>
								<b class="arrow"></b>
							</li>
							
						</ul>
					</li>
 -->


					<li class="<?php if(($page=="art_beach_club")||($page=="pattaya_restaurents")||($page=="steak_house")||($page=="sukoi_teppanyaki")||($page=="sky_bar")||($page=="lagoon_bar")||($page=="shine_bar")){echo"active open";}?>">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-cogs"></i>
							<span class="menu-text">แก้ไขข้อความdining</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="<?php if($page=="art_beach_club"){echo"active";}?>">
								<a href="art_beach_club.php">
									<i class="menu-icon fa fa-caret-right"></i>
									art beach club
								</a>
								<b class="arrow"></b>
							</li>
							
						</ul>
						<ul class="submenu">
							<li class="<?php if($page=="pattaya_restaurents"){echo"active";}?>">
								<a href="pattaya_restaurents.php">
									<i class="menu-icon fa fa-caret-right"></i>
									pattaya restaurents
								</a>
								<b class="arrow"></b>
							</li>
							
						</ul>
						<ul class="submenu">
							<li class="<?php if($page=="steak_house"){echo"active";}?>">
								<a href="steak_house.php">
									<i class="menu-icon fa fa-caret-right"></i>
									steak house
								</a>
								<b class="arrow"></b>
							</li>
							
						</ul>
						<ul class="submenu">
							<li class="<?php if($page=="sukoi_teppanyaki"){echo"active";}?>">
								<a href="sukoi_teppanyaki.php">
									<i class="menu-icon fa fa-caret-right"></i>
									sukoi teppanyaki
								</a>
								<b class="arrow"></b>
							</li>
							
						</ul>
						<ul class="submenu">
							<li class="<?php if($page=="sky_bar"){echo"active";}?>">
								<a href="sky_bar.php">
									<i class="menu-icon fa fa-caret-right"></i>
									sky bar
								</a>
								<b class="arrow"></b>
							</li>
							
						</ul>
						<ul class="submenu">
							<li class="<?php if($page=="lagoon_bar"){echo"active";}?>">
								<a href="lagoon_bar.php">
									<i class="menu-icon fa fa-caret-right"></i>
									lagoon bar
								</a>
								<b class="arrow"></b>
							</li>
							
						</ul>
						<ul class="submenu">
							<li class="<?php if($page=="shine_bar"){echo"active";}?>">
								<a href="shine_bar.php">
									<i class="menu-icon fa fa-caret-right"></i>
									shine bar
								</a>
								<b class="arrow"></b>
							</li>
							
						</ul>
					</li>


					<li class="<?php if(($page=="wedding_styles")||($page=="private_candle_light")){echo"active open";}?>">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-cogs"></i>
							<span class="menu-text">แก้ไข romance</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="<?php if($page=="wedding_styles"){echo"active";}?>">
								<a href="wedding_styles.php">
									<i class="menu-icon fa fa-caret-right"></i>
									wedding styles
								</a>
								<b class="arrow"></b>
							</li>
							
						</ul>
						<ul class="submenu">
							<li class="<?php if($page=="private_candle_light"){echo"active";}?>">
								<a href="private_candle_light.php">
									<i class="menu-icon fa fa-caret-right"></i>
									private candle light
								</a>
								<b class="arrow"></b>
							</li>
							
						</ul>
						
					</li>


					<li class="<?php if(($page=="excursions")||($page=="fitness_center")||($page=="thai_massage")||($page=="kid_club")||($page=="beach_activity_center")||($page=="yoga")||($page=="Merit_making_to_the_monks")||($page=="Thai_cookery_class")){echo"active open";}?>">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-cogs"></i>
							<span class="menu-text">แก้ไขข้อความactivities</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="<?php if($page=="excursions"){echo"active";}?>">
								<a href="excursions.php">
									<i class="menu-icon fa fa-caret-right"></i>
									excursions
								</a>
								<b class="arrow"></b>
							</li>
							
						</ul>
						<ul class="submenu">
							<li class="<?php if($page=="fitness_center"){echo"active";}?>">
								<a href="fitness_center.php">
									<i class="menu-icon fa fa-caret-right"></i>
									fitness center
								</a>
								<b class="arrow"></b>
							</li>
							
						</ul>
						<ul class="submenu">
							<li class="<?php if($page=="thai_massage"){echo"active";}?>">
								<a href="thai_massage.php">
									<i class="menu-icon fa fa-caret-right"></i>
									thai massage
								</a>
								<b class="arrow"></b>
							</li>
							
						</ul>
						<ul class="submenu">
							<li class="<?php if($page=="kid_club"){echo"active";}?>">
								<a href="kid_club.php">
									<i class="menu-icon fa fa-caret-right"></i>
									kid club
								</a>
								<b class="arrow"></b>
							</li>
							
						</ul>
						<ul class="submenu">
							<li class="<?php if($page=="beach_activity_center"){echo"active";}?>">
								<a href="beach_activity_center.php">
									<i class="menu-icon fa fa-caret-right"></i>
									beach activity center
								</a>
								<b class="arrow"></b>
							</li>
							
						</ul>
						<ul class="submenu">
							<li class="<?php if($page=="yoga"){echo"active";}?>">
								<a href="yoga.php">
									<i class="menu-icon fa fa-caret-right"></i>
									yoga
								</a>
								<b class="arrow"></b>
							</li>
							
						</ul>
						<ul class="submenu">
							<li class="<?php if($page=="Merit_making_to_the_monks"){echo"active";}?>">
								<a href="Merit_making_to_the_monks.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Merit making to the monks
								</a>
								<b class="arrow"></b>
							</li>
							
						</ul>
						<ul class="submenu">
							<li class="<?php if($page=="Thai_cookery_class"){echo"active";}?>">
								<a href="Thai_cookery_class.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Thai cookery class
								</a>
								<b class="arrow"></b>
							</li>
							
						</ul>
					</li>

					<li class="<?php if($page=="location"){echo"active";}?>">
						<a href="location.php">
							<i class="menu-icon fa fa-certificate"></i>
							<span class="menu-text">location </span>
						</a>
						<b class="arrow"></b>
					</li>


				</ul><!-- /.nav-list -->

				<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
					<i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
				</div>
			</div>