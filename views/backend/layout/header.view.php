<!DOCTYPE html>
<html>
	<head>
		<!-- Basic Page Info -->
		<meta charset="utf-8" />
		<title>Torofy.com</title>

		<link href="https://cdn.jsdelivr.net/npm/remixicon@2.2.0/fonts/remixicon.css" rel="stylesheet">
		<link rel="stylesheet" href="../../assets/backend/vendors/styles/custom.css" >

		<!-- Site favicon -->
		<link
			rel="apple-touch-icon"
			sizes="180x180"
			href="../../assets/backend/vendors/images/apple-touch-icon.png"
		/>
		<link
			rel="icon"
			type="image/png"
			sizes="32x32"
			href="../../assets/backend/vendors/images/favicon-32x32.png"
		/>
		<link
			rel="icon"
			type="image/png"
			sizes="16x16"
			href="../../assets/backend/vendors/images/favicon-16x16.png"
		/>

		<!-- Mobile Specific Metas -->
		<meta
			name="viewport"
			content="width=device-width, initial-scale=1, maximum-scale=1"
		/>

		<!-- Google Font -->
		<link
			href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
			rel="stylesheet"
		/>
		<!-- CSS -->
		<link rel="stylesheet" type="text/css" href="../../assets/backend/vendors/styles/core.min.css" />
		<link
			rel="stylesheet"
			type="text/css"
			href="../../assets/backend/vendors/styles/icon-font.min.css"
		/>
		<link
			rel="stylesheet"
			type="text/css"
			href="../../assets/backend/vendors/plugins/datatables/css/dataTables.bootstrap4.min.css"
		/>
		<link
			rel="stylesheet"
			type="text/css"
			href="../../assets/backend/vendors/plugins/datatables/css/jquery.dataTables.min.css"
		/>
		<link
			rel="stylesheet"
			type="text/css"
			href="../../assets/backend/vendors/plugins/datatables/css/responsive.bootstrap4.min.css"
		/>
		<link rel="stylesheet" type="text/css" href="../../assets/backend/vendors/styles/style.min.css" />
		<link rel="stylesheet" type="text/css" href="../../assets/backend/vendors/styles/bootstrap-switch-button.min.css" />




		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script
			async
			src="https://www.googletagmanager.com/gtag/js?id=G-GBZ3SGGX85"
		></script>
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag() {
				dataLayer.push(arguments);
			}
			gtag("js", new Date());

			gtag("config", "G-GBZ3SGGX85");
		</script>
		<!-- Google Tag Manager -->
		<script>
			(function (w, d, s, l, i) {
				w[l] = w[l] || [];
				w[l].push({ "gtm.start": new Date().getTime(), event: "gtm.js" });
				var f = d.getElementsByTagName(s)[0],
					j = d.createElement(s),
					dl = l != "dataLayer" ? "&l=" + l : "";
				j.async = true;
				j.src = "https://www.googletagmanager.com/gtm.js?id=" + i + dl;
				f.parentNode.insertBefore(j, f);
			})(window, document, "script", "dataLayer", "GTM-NXZMQSS");
		</script>

		<!-- End Google Tag Manager -->
	</head>
	<body>
		<div class="hid">
			<?php include(base_path('views/backend/layout/sidebar.view.php')) ?>

			<?php include(base_path('views/backend/layout/nav.view.php')) ?>
		</div>

			<div class="mobile-menu-overlay"></div>

			<div class="main-container pt-3">
				<div class="pd-ltr-20">
			
					<div class="pre-loader">
						<div class="pre-loader-box">
							<div class="loader-logo d-flex">
								<!-- <img src="../../assets/backend/vendors/images/deskapp-logo.svg" alt="" /> -->
								<img
									src="../../assets/backend/vendors/images/logo-icon.png"
									alt=""
									class="light-logo"
									style="width:80px; height:80px; padding:10px"
								/>
								<span style="color:#92999f; font-size: 30px; font-weight:700;">Torofy.com</span>
							</div>
							<div class="loader-progress" id="progress_div">
								<div class="bar" id="bar1"></div>
							</div>
							<div class="percent" id="percent1">0%</div>
							<div class="loading-text">Loading...</div>
						</div>
					</div>
