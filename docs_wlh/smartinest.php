<?php
include_once("config.php");
// based on semple here https://davidwalsh.name/curl-post
// TODO: buddy seem to not working at this moment. We will use samplem data for now and will update later
$fields = array(
	'appid' => $appid,
	'appkey' => $appkey,
	'platform'=> 'REST Client'
);
//print_r($fields);

//open connection
$ch = curl_init();

//url-ify the data for the POST
foreach($fields as $key=>$value) { $fields_string .= $key.'='.$value.'&'; }
rtrim($fields_string, '&');

//set the url, number of POST vars, POST data
curl_setopt($ch,CURLOPT_URL, $endpoint."/devices");
curl_setopt($ch,CURLOPT_POST, count($fields));
curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);

//execute post
//$result = curl_exec($ch);

//print_r($result);

//close connection
//curl_close($ch);

$nest=$_REQUEST['nest'];


?>
<!DOCTYPE HTML>
<!--
	Dopetrope by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->

<html>
	<head>
		<title>Smart Nest <?php echo $nest;?>| What Lives Here?</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="/assets/css/ie/html5shiv.js"></script><![endif]-->
		<script src="/assets/js/jquery.min.js"></script>
		<script src="/assets/js/jquery.dropotron.min.js"></script>
		<script src="/assets/js/skel.min.js"></script>
		<script src="/assets/js/skel-layers.min.js"></script>
		<script src="/assets/js/init.js"></script>
		<script src="https://use.fontawesome.com/72650f737a.js"></script>
		<link rel="stylesheet" href="/assets/css/skel.css" />
		<link rel="stylesheet" href="/assets/css/style.css" />
		<link rel="stylesheet" href="/assets/css/style-desktop.css" />
		
		<!--[if lte IE 8]><link rel="stylesheet" href="/assets/css/ie/v8.css" /><![endif]-->
	</head>
		<body class="homepage">
	<!-- Header -->
			<div id="header-wrapper">
				<div id="header">

					<!-- Logo -->
						<h1><a href="/">What Lives Here?</a></h1>
						<a href="/"><img src="/assets/images/whatliveshere_logo_500px.png" height="100" width="100" alt="What Lives Here?" /></a>


					<!-- Nav -->
						<nav id="nav">
							<ul>
								<li><a href="#">Dashboard</a></li>	
							</ul>
						</nav>
				</div>
			</div>


		<!-- Main -->
			<div id="main-wrapper">
				<div class="container">
					<div class="row">
						<div class="12u">
							<section>
								<header class="major">
									<h2>Status of Smart Nest <?php echo $nest;?></h2>
								</header>
								<div class="row">
									<table class="default">
										<thead>
											<tr>
												<th id="mybox"></th>
												<th id="status">Status</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td headers="mybox">Nesting box number:</td>
												<td headers="status"><?php echo $nest;?></td>
											</tr>
											<tr>
												<td headers="mybox">Location:</td>
												<td headers="status"><?php echo $sampledata[$nest]["location"];?></td>
											</tr>
											<tr>
												<td headers="mybox"><span title="The last time the sensors detected movement in the box">Movement detected:</span></td>
												<td headers="status"><?php echo $sampledata[$nest]["movement"];?></td>
											</tr>
											<tr>
												<td headers="mybox"><span title="Inside the box">Current temperature:</span></td>
												<td headers="status"><?php echo $sampledata[$nest]["temperature"];?>&#176;C</td>
											</tr>
											<tr>
												<td headers="mybox"><span title="Inside the box">Current humidity:</span></td>
												<td headers="status"><?php echo $sampledata[$nest]["humidity"];?></td>
											</tr>
											<tr>
												<td headers="mybox">Sightings</td>
												<td headers="status"><?php echo $sampledata[$nest]["sightings"];?></td>
											</tr>
											<tr>
												<td headers="mybox">Air quality</td>
												<td headers="status"><?php echo $sampledata[$nest]["air"];?></td>
											</tr>

											
											<tr>
												<td headers="mybox">Battery:</td>
												<td headers="status"><span title="75%"><i class="fa fa-battery-three-quarters" aria-hidden="true"></i></span></td>
											</tr>
										</tbody>
									</table>
								</div>
								<div id="copyright">
									<ul class="links">
										<li><strong>Dopetrope</strong> template by <a href="http://n33.co">AJ</a> for <a href="http://html5up.net/">HTML5 UP</a></li>
										<li>Demo Images: <a href="http://facebook.com/DreametryDoodle">Dreametry Doodle</a></li>
										<li>Jekyll Template: <a href="http://cloudcannon.com">Cloud Cannon</a></li>
									</ul>
								</div>
						</section>

					</div>
				</div>
			</div>
		</div>

	</body>
</html>

													