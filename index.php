<?php 
include 'config.php';
?>

 <html>
 	
 	<head>
 		<meta charset="utf-8">
 		<link rel="stylesheet" type="text/css" media="screen" href="converse.js-0.9.4/css/converse.min.css">
		<script src="converse.js-0.9.4/builds/converse.min.js"></script>
		<style type="text/css">body{background-color:#222222;}</style>
 	</head>
 	<body>
 		<script>
		require(['converse'], function (converse) {
		    converse.initialize({
		        bosh_service_url: '<?php echo $boshUrl; ?>', // Please use this connection manager only for testing purposes
	            keepalive: true,
				jid: '<?php echo $username."@".$server; ?>',
			    authentication: 'prebind',
    			prebind_url: '<?php echo $prebindUrl; ?>',
    			prebind: true,
    			allow_logout: false,
		        i18n: locales.en, // Refer to ./locale/locales.js to see which locales are supported
		        show_controlbox_by_default: true,
		        roster_groups: true,
		        message_carbons: true,
		        play_sounds:true,
		        hide_offline_users: true
		    });
		});
		</script>
 	</body>
 </html>