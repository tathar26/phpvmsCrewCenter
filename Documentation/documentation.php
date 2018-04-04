<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>iCrew LITE | Bootstrap Admin Theme</title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

	<link rel="stylesheet" href="assets/plugins/bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/plugins/lity/dist/lity.css">
	<link rel="stylesheet" href="assets/style/flaticon.css">
	<link rel="stylesheet" href="assets/plugins/line-awesome/css/line-awesome.min.css">
	<link rel="stylesheet" href="assets/plugins/socicon/css/socicon.css">
	<link rel="stylesheet" href="assets/style/style.css">
	<link rel="stylesheet" href="assets/plugins/filament-sticky/fixedsticky.css">

	<!-- Code Highlight -->
	<link rel="stylesheet" href="assets/plugins/highlight-js/src/styles/railscasts.css">

	<script src="assets/plugins/jquery/dist/jquery.min.js"></script>
	<script src="assets/plugins/tether/dist/js/tether.min.js"></script>
	<script src="assets/plugins/bootstrap/dist/js/bootstrap.min.js"></script>
	<script src="assets/plugins/lity/dist/lity.min.js"></script>
	<script src="assets/plugins/filament-fixed/fixedfixed.js"></script>
	<script src="assets/plugins/filament-sticky/fixedsticky.js"></script>

	<!-- Code Highlight -->
	<script src="assets/plugins/highlight-js/src/highlight.js"></script>
	<script src="assets/plugins/highlight-js/build/highlight.pack.js"></script>
	<script>hljs.initHighlightingOnLoad();</script>

	<script src="assets/js/custom.js"></script>
	<link rel="icon" href="http://jet.iflyva.in/lib/skins/iCrewLITE/images/favicon.png" type="image/x-icon">
</head>
<body data-spy="scroll" data-target="#sidebarScroll" data-offset="20">

<div class="wrapper"><!-- wrapper -->

	<section class="section section--header"><!-- section -->

		<header><!-- header -->
			<div class="content">
				<div class="header__handler">
				</div>
			</div>
		</header><!-- header END -->

		<div class="content"><!-- content -->

			<div class="intro"><!-- intro -->
				<img src="assets/img/logo_ics.png" alt="iCrewSystems" width="auto;" height="200">
				<h2 class="intro__title">The Ultimate Freeware phpVMS Crew Center by Leonard Selvaraja</h2>
				<a href="#overview" class="intro__video">
					<span>Get Started</span>
				</a>
				<br><br>
			</div><!-- intro END -->


		</div><!-- content END -->
	</section><!-- section END -->

	<section class="section section--white section--padding"><!-- section -->
		<div class="content">

			<div class="contents"><!-- contents -->

				<div class="contents__sidebar contents__sidebar--mn sidebar-hide" id="sidebarScroll">
					<!-- contents__sidebar    fixedsticky-->
					<ul class="contents__sidebar_list_inset">
						<li><a href="#overview" class="nav-link active">Overview</a></li>
						<li class="sublist_parent">
							<a href="#installation" class="nav-link">
								Installation
								<span class="arrow__icon_wrap">
									<i class="la la-angle-left"></i>
								</span>
							</a>
							<ul class="sublist_inset">
								<li><a href="#installationz" class="nav-link">Installation Checklist</a></li>
								<li><a href="#config" class="nav-link">Configuration</a></li>
								<li><a href="#reqadd" class="nav-link">Required Addons</a></li>
							</ul>
						</li>
						<li class="sublist_parent">
							<a href="#thegraphics" class="nav-link">
								The Graphics
							</a>
						</li>
						<li class="sublist_parent">
							<a href="#htw" class="nav-link">
								How things Work
							</a>
						</li>
						<li class="sublist_parent">
							<a href="#cuz" class="nav-link">
								Customization
							</a>
						</li>

				</div><!-- contents__sidebar END -->

				<div class="contents__box contents__box--right"><!-- contents__box -->

					<div id="overview" class="section">
						<h2 class="section-head">Overview</h2>
						<div class="section-content">
							iCrew LITE is a freeware Crew Resource Center skin made for phpVMS. iCrew LITE crafted by Leonard Selvaraja, is based on a bootstrap project, AdminBSB - Material Design by Güray Yarar &copy; 2016
							.This project was initially planned as a payware release, but now i have released this project for free as a "Thank you" to this community. As of the initial release, there might be some bugs and issues,
							or some features might not work as intended.
							<br><br>
							<center>
								<img src="http://www.iflyva.in/icrewlite/Documentation/assets/img/DemoCrew.png" width="auto;" height="250"/><br>
								iCrew LITE Crew Center on Jet Airways Virtual's Website
							</center>

							<strong>Warning</strong><br>
							This CrewCenter was built on phpVMS by simpilot (v5.5.2), I cannot gaurentee that this will work with other versions of phpVMS as intended
						</div>
					</div>

					<div class="separator"></div>

					<div id="installationz" class="section">
						<h2 class="section-head">Installation</h2>

						<h3 id="sec21" class="section-title">Overview</h3>
						<div class="section-content">
							<p>[UPDATED ON 19.02.2018] Installing iCrew LITE into your website is really simple. All you need to do is, to make sure you follow the check list and do exactly what it says ;)</p>
						</div>

						<h3 id="chekclist" class="section-title">Installation Checklist</h3>
						<div class="section-content">

							<ol>
									<li>Make sure you have the latest stable phpVMS, Version v5.5.2+ </li>
									<li>Make sure you have downloaded the latest version of iCrew LITE</li>
									<li>If you already use Mark Swan's CrewCenter, you can skip to Item #9</li>
									<li>Create a new sub domain, go to your <strong>cpanel > Domains > Add Sub Domain</strong> and create a new subomain. Examples : "crew.yoursite.com", "waterside.bavirtual.com", "icrew.delta-virtual.com". <em>Geddit ?</em> </li>
									<li>Go to your local.config.php and take a note of your database details and also, Take a backup of your entire database. (Just in case, and this can by done via cPanel too)</li>
									<li>Upload the latest version of phpVMS (which is phpVMS 5.5.2) on that subdomain's folder via your filemanager or FTP</li>
									<li>Now open that subdomain and run the <b>update.php</b> provided with the phpVMS</li>
									<li>Fill in the necessary details like the URL etc, the part where it asks about your Database details, put the stuff you copied earlier from your local.config.php (Item #5) and install normally. </li>
									<li>Now, you have phpVMS successfully running on a subdomain with all of your existing data from previous database. Check for all crucial details like your Pilots, Schedules, PIREPS, Total VA Hours etc.</li>
									<li>Unzip the iCrew LITE package and paste it into public_html/(subdomain_folder_name)/lib/skins</li>
									<li>Go to your admin panel and change the skin to iCrew LITE</li>
							</ol>
							<a href="./install.php" class="button">Open Installer</a><br><br>
							<em><p>EXPERIMENTAL : In step 7, Upload the phpVMS installer to your main domain and when the installer asks you to verify the domain (SITE_URL), enter your subdomain. (or) Continue using the normal method and once you're done with the installation, replace the common, modules and templates folders from your previous domain. </p></em>
							<p>
									Your Crew center is successfully installed, but not yet configured. So you are likely it would either keep loading with the preloader or show some error. Don't panic, just continue with the configuration.
							</p>
						</div>

						<div class="space"></div>

						<h3 id="config" class="section-title">Configuration</h3>
						<div class="section-content">
							Configuring iCrew LITE is very easy, I've tried my best to do it all from one place.<br><br>
							Go to <strong>sub_domain_folder > core > local.config.php </strong> and add these lines above <code># Page encoding options</code> <br><br>
							<code>
								/*iCrew LITE Configuration lines */<br>
								define('CREWCENTER_TITLE', 'Demo<strong>Crew</strong>'); <br>
								define('VA_TAGLINE', 'jetairwaysvirtual'); <br>
								define('GMAPS_API', 'asIlxuYoUrGooGlEMaPskEyGoeSherexsur');
							</code><br><br>

							> Now, in the place of DemoCrew you can put in a suitable name for your VA, like BluCrew, iCrew, DeltaCrew, RedCrew etc.
							If nothing is desirable, then use your VA's name itself. <br>
							> Now, for your the VA Tagline, use your "real world airline's tagline", for example for British Airways, it would be "To fly, To Serve". <br>
							> In the GMAPS_API, paste your Google maps API Key.
						</div>

						<div class="space"></div>

						<h3 id="reqadd" class="section-title">Required Addons</h3>
						<div class="section-content">
							<p>
								iCrew LITE requires certain modules to be installed in order to work perfectly. Such modules include <br>
								<ol>
									<li> AIR Mail - simpilotgroup </li>
									<li> Pop Up News - simpilotgroup </li>
									<li> Credits - simpilotgroup </li>
									<li> Events - simpilotgroup</li>
									<li> Ranks - iCrewSystems </li>
								</ol>

								To make your work short and to save time, i'd fully recommend to use the <a href="https://github.com/DavidJClark/phpVMS-Plugins_Manager">Plugin Manager </a> (except Ranks module, everything is included there)<br>
								You can find the Ranks module along with the downloads. For all these addons, the template files are already included with the Skin, so you pretty much have nothing to do but to install it ;)

							</p>
						</div>

						<div class="space"></div>

						<div class="separator"></div>

					<div id="thegraphics" class="section">
						<h2 class="section-head">The Graphics</h2>

						<h3 id="sec31" class="section-title">Overview</h3>
						<div class="section-content">
							<p> iCrew LITE comes included with some preloaded images and icons. These can be changed later according to your VA's need.<br>
								The Preloaded images are
								<ul>
									<li> The Favicon </li>
									<li> Side Bar Cover Photo</li>
									<li> Default - Profile Picture </li>
									<li> Event - Coming Soon Picture </li>
									<li> Focus Airport Picture </li>
								</ul>
							</p>
							<p> If you wish to change these pictures, you are welcomed to do so, but make sure you use the exactly mentioned resolutions. The Path to these pictures are as follows </p>

						</div>

						<div class="space"></div>

						<table class="table-list">
							<thead>
								<th> Image </th>
								<th> Size / Resolution </th>
								<th> Path </th>
							</thead>
							<tbody>
								<tr>
									<td>Favicon</td>
									<td> H: 177 px, W: 177 px.</td>
									<td>/lib/skins/iCrewLITE/images/favicon.png</td>
								<tr>
									<tr>
										<td>Cover Photo</td>
										<td>H: 135px, W: 300px.</td>
										<td>/lib/skins/iCrewLITE/images/cover/default_cover.jpg</td>
									<tr>
										<tr>
											<td>Profile Picture</td>
											<td>-- --</td>
											<td>Directly referenced from my source website</td>
										<tr>
											<tr>
												<td>Event Coming Soon</td>
												<td>H: 1185px, W: 618px.</td>
												<td>/lib/skins/iCrewLITE/images/event_comingsoon.jpg</td>
											<tr>
												<tr>
													<td>Focus Airport</td>
													<td>H: 1024px, W: 683px</td>
													<td>/lib/skins/iCrewLITE/focusairport/dxb.jpg</td>
												<tr>
							</tbody>

						</table>
					<div class="space"></div>
					</div>

					<div class="separator"></div>


					<div id="htw" class="section">
						<h2 class="section-head">How things work</h2>
						<div class="section-content">
							<p> Well, mostly I've made sure everything is dynamic, which means you don't have to change / monitor anything, but there are few stuff which you need to tweak in order to make sure everything works perfectly.
								<br> To begin with, the Staff Page needs a little work with the SQL Database, nothing much, you just need to run a command and there after add few entries.
									<br> Open your phpMyAdmin and run this SQL Command.
								<pre><code>ALTER TABLE  `phpvms_pilots` ADD  `staff` INT NULL DEFAULT NULL AFTER  `ranklevel` ;</code></pre>
								So, now you can see you've added a new feild called "staff", if the pilot is staff in your VA, enter "1" else it'll be "0" by default and in the "Admin Comments" add the persons's respective designation.<br><br>

								Next, open <strong>core > common > StatsData.class.php </strong> and after line '556' add the following <br>
								<pre><code>public static function TodayHours() { <br>return self::getTotalForCol(array('table' => 'pireps','column' => '*',<br>'where' => array('DATE(`submitdate`) = CURDATE()'),'func' => 'SUM'));<br> }</code>
						</pre>
						<br>
						<strong><h3>The Focus Airports</h3> </strong>
						<br>
						Now this is something which one of my friends recommended me to add. The module is extremely simple, no complex code at all. Which makes it almost a 'manual' module. <br>
						When you want to add a new Focus Airport, simply go the <strong>focusairport</strong> folder in <Strong>lib > skins > iCrewLITE </strong> and change the 'ICAO Code' and the 'Image'. As default, I've added 'OMDB' to be the Focus Airport.<br>
						Here's a Tip, (this is completely my opinion) use pictures which have tags like '#silhouette, #sunset' of famous monuments of the Airport's City. For example, i came up with this picture when I searched for 'Dubai skyline sunset silhouette'.

						<br>
						<strong><h3>The Ranks Module</h3> </strong>
						<br>
							That's pretty simple, you can find the required files at the folder called 'Modules' with this installer. Paste that folder under your core > modules and it's done. Please note that it will NOT work as intended if you donot have pictures which depict your VA's respective rankings.
						</div>

						<strong><h3 id="cuz">Cuztomization</h3> </strong>
						<br>
							As default, the Crew Center comes with the 'Indigo' theme color, however you have 16+ Theme colors to choose from. The list of the colors are given below, <br>
							<img src="https://raw.githubusercontent.com/iCrewSystems/iCrewLITE/master/Documentation/assets/img/colors.PNG" height="450" width="auto" />
							To change your theme, just simply go to <strong> lib > skins > iCrewLITE > layout.php </strong> and on line '79' <code>theme-indigo</code> change the "indigo" to your desired theme.<br><br>

							For your login background screen, for this release, you have to change it in each of the login_xyz.php and registration_xyz.php in the <code>style</code> tag.
						</div>
						<br><br>
					</div>

					<div id="zzs" class="section">
						<h2 class="section-head">Congratulations</h2>
						<div class="section-content">
							<p>
									Congratulations, you've successfully installed iCrew LITE Crew Center to your Virtual Airline. I am not sure, but there might be some little fine tuning work left for you. I am sure you can handle that ;) If you think something is wrong, don't hesitate to trouble me.
									<br><br>
									I wish to mention <strong>Nabeel, David (simpilotgroup), Parkho, Vansers, Mark Swan and all the other contributors</strong> for all their hardwork towards the community in providing quality stuff for free. In this project, I'd like to specially thank my mentors Mr.Sooryah and Mr.Dishang for providing me the oppertunity to do this. I also wish to thank Ms. Rashi Trivedi for motivating me to continue this project. Finally, I'd like to thank God for providing the wisdom, knowledge and understanding to complete this project.
							</p>


					</div>

					<div id="lic" class="section">
						<h2 class="section-head">Licensing</h2>
						<div class="section-content">
							<p>
									This project is released under Attribution-NonCommercial-ShareAlike 3.0 Unported (CC BY-NC-SA 3.0) License. The human-readable summary of the license states that <br>
									You are

									<ul>
										<li>Free to Share — copy and redistribute the material in any medium or format</li>
										<li>Free to Adapt — remix, transform, and build upon the material</li>
									</ul>
									Terms of License
									<ol>
										<li><Strong>Attribution</strong> — You must give appropriate credit, provide a link to the license, and indicate if changes were made. You may do so in any reasonable manner, but not in any way that suggests the licensor endorses you or your use.</li>
										<li><strong>NonCommercial</strong> — You may not use the material for commercial purposes.</li>
										<li><strong>ShareAlike</strong> — If you remix, transform, or build upon the material, you must distribute your contributions under the same license as the original.</li>
									</ol>

									<br><br>
									Full legal license can be accessed <a target="_blank" href="https://creativecommons.org/licenses/by-nc-sa/3.0/legalcode">here</a>
							</p>

					</div>

				</div><!-- contents__box END -->

			</div><!-- contents END -->

		</div>
	</section><!-- section END -->

	<section class="section section--bg"><!-- section -->
		<div class="content">
			<h2 class="title text-center">Do you like your new Crew Center? </h2>
			<div class="text-center">
				<a href="https://www.paypal.me/ICSAnsbert/5" target="_blank" class="intro__video">I want to get you coffee</a>
				<a href="mailto:kashrayks@gmail.com?Subject=I%20Want%20to%20hire%20you" target="_blank" class="button">I want to hire you</a>
				<a href="https://forum.phpvms.net/topic/25363-free-icrew-lite-responsive-bootstrap-crew-center-for-phpvms-2018/" target="_blank" class="button">I can't do both, but i can give you a thumbs up</a>
			</div>
		</div>
	</section><!-- section END -->

	<footer>
			<img src="assets/img/bootstrap.jpg" alt=""><br>
			Created by iCrewSystems &copy; 2014-2018
			<br><br>
			<div class="socials">
				<a href="https://www.facebook.com/icrewsystems" target="_blank"><i class="socicon-facebook"></i></a>
				<a href="https://github.com/iCrewSystems/" target="_blank"><i class="socicon-github"></i></a>
			</div>
		</footer>

</div><!-- wrapper END -->

<div class="cover-layout"></div>

<script>
	// Bind as an event handler
	$(document).ready(function () {
		$(".intro__video").on('click', '[data-lightbox]', lity);
	});
</script>

<script>
	$('.contents__sidebar').fixedsticky();
</script>


</body>
</html>
