<!DOCTYPE html>
<html lang="en">
<?php 
// phpinfo();
session_start();
error_reporting(E_ALL ^ E_NOTICE);
$con = mysqli_connect('localhost','edgelit_demo','edgelit_demo','edgelit_demo');
//mysqli_select_db('register_db',$connect);

	$sql_spam="SELECT * FROM `THIRD_PAGE_typewise_monthly_count` WHERE `destination_country`='".$_GET['Country']."' && `type`='Spam' && `month`='Jan'";
	$query_spam = mysqli_query($con,$sql_spam);
	$rows_spam = mysqli_fetch_array($query_spam);
	
	$sql_spam2="SELECT * FROM `THIRD_PAGE_typewise_monthly_count` WHERE `destination_country`='".$_GET['Country']."' && `type`='Spam' && `month`='Feb'";
	$query_spam2 = mysqli_query($con,$sql_spam2);
	$rows_spam2 = mysqli_fetch_array($query_spam2);
	
	$sql_spam3="SELECT * FROM `THIRD_PAGE_typewise_monthly_count` WHERE `destination_country`='".$_GET['Country']."' && `type`='Spam' && `month`='Mar'";
	$query_spam3 = mysqli_query($con,$sql_spam3);
	$rows_spam3 = mysqli_fetch_array($query_spam3);
	
	$sql_spam4="SELECT * FROM `THIRD_PAGE_typewise_monthly_count` WHERE `destination_country`='".$_GET['Country']."' && `type`='Spam' && `month`='Apr'";
	$query_spam4 = mysqli_query($con,$sql_spam4);
	$rows_spam4 = mysqli_fetch_array($query_spam4);
	
	$sql_spam5="SELECT * FROM `THIRD_PAGE_typewise_monthly_count` WHERE `destination_country`='".$_GET['Country']."' && `type`='Spam' && `month`='May'";
	$query_spam5 = mysqli_query($con,$sql_spam5);
	$rows_spam5 = mysqli_fetch_array($query_spam5);
	
	$sql_spam6="SELECT * FROM `THIRD_PAGE_typewise_monthly_count` WHERE `destination_country`='".$_GET['Country']."' && `type`='Spam' && `month`='Jun'";
	$query_spam6 = mysqli_query($con,$sql_spam6);
	$rows_spam6 = mysqli_fetch_array($query_spam6);
	
	$sql_spam7="SELECT * FROM `THIRD_PAGE_typewise_monthly_count` WHERE `destination_country`='".$_GET['Country']."' && `type`='Spam' && `month`='Jul'";
	$query_spam7 = mysqli_query($con,$sql_spam7);
	$rows_spam7 = mysqli_fetch_array($query_spam7);
	
	$sql_spam8="SELECT * FROM `THIRD_PAGE_typewise_monthly_count` WHERE `destination_country`='".$_GET['Country']."' && `type`='Spam' && `month`='Aug'";
	$query_spam8 = mysqli_query($con,$sql_spam8);
	$rows_spam8 = mysqli_fetch_array($query_spam8);
	
	$sql_spam9="SELECT * FROM `THIRD_PAGE_typewise_monthly_count` WHERE `destination_country`='".$_GET['Country']."' && `type`='Spam' && `month`='Sep'";
	$query_spam9 = mysqli_query($con,$sql_spam9);
	$rows_spam9 = mysqli_fetch_array($query_spam9);
	
	$sql_spam10="SELECT * FROM `THIRD_PAGE_typewise_monthly_count` WHERE `destination_country`='".$_GET['Country']."' && `type`='Spam' && `month`='Oct'";
	$query_spam10 = mysqli_query($con,$sql_spam10);
	$rows_spam10 = mysqli_fetch_array($query_spam10);
	
	$sql_spam11="SELECT * FROM `THIRD_PAGE_typewise_monthly_count` WHERE `destination_country`='".$_GET['Country']."' && `type`='Spam' && `month`='Nov'";
	$query_spam11 = mysqli_query($con,$sql_spam11);
	$rows_spam11 = mysqli_fetch_array($query_spam11);
	
	$sql_spam12="SELECT * FROM `THIRD_PAGE_typewise_monthly_count` WHERE `destination_country`='".$_GET['Country']."' && `type`='Spam' && `month`='Dec'";
	$query_spam12 = mysqli_query($con,$sql_spam12);
	$rows_spam12 = mysqli_fetch_array($query_spam12);
	
	
	
	$sql_network="SELECT * FROM `THIRD_PAGE_typewise_monthly_count` WHERE `destination_country`='".$_GET['Country']."' && `type`='Network Attacks' && `month`='Jan'";
	$query_network = mysqli_query($con,$sql_network);
	$rows_network = mysqli_fetch_array($query_network);
	
	$sql_network2="SELECT * FROM `THIRD_PAGE_typewise_monthly_count` WHERE `destination_country`='".$_GET['Country']."' && `type`='Network Attacks' && `month`='Feb'";
	$query_network2 = mysqli_query($con,$sql_network2);
	$rows_network2 = mysqli_fetch_array($query_network2);
	
	$sql_network3="SELECT * FROM `THIRD_PAGE_typewise_monthly_count` WHERE `destination_country`='".$_GET['Country']."' && `type`='Network Attacks' && `month`='Mar'";
	$query_network3 = mysqli_query($con,$sql_network3);
	$rows_network3 = mysqli_fetch_array($query_network3);
	
	$sql_network4="SELECT * FROM `THIRD_PAGE_typewise_monthly_count` WHERE `destination_country`='".$_GET['Country']."' && `type`='Network Attacks' && `month`='Apr'";
	$query_network4 = mysqli_query($con,$sql_network4);
	$rows_network4 = mysqli_fetch_array($query_network4);
	
	$sql_network5="SELECT * FROM `THIRD_PAGE_typewise_monthly_count` WHERE `destination_country`='".$_GET['Country']."' && `type`='Network Attacks' && `month`='May'";
	$query_network5 = mysqli_query($con,$sql_network5);
	$rows_network5 = mysqli_fetch_array($query_network5);
	
	$sql_network6="SELECT * FROM `THIRD_PAGE_typewise_monthly_count` WHERE `destination_country`='".$_GET['Country']."' && `type`='Network Attacks' && `month`='Jun'";
	$query_network6 = mysqli_query($con,$sql_network6);
	$rows_network6 = mysqli_fetch_array($query_network6);
	
	$sql_network7="SELECT * FROM `THIRD_PAGE_typewise_monthly_count` WHERE `destination_country`='".$_GET['Country']."' && `type`='Network Attacks' && `month`='Jul'";
	$query_network7 = mysqli_query($con,$sql_network7);
	$rows_network7 = mysqli_fetch_array($query_network7);
	
	$sql_network8="SELECT * FROM `THIRD_PAGE_typewise_monthly_count` WHERE `destination_country`='".$_GET['Country']."' && `type`='Network Attacks' && `month`='Aug'";
	$query_network8 = mysqli_query($con,$sql_network8);
	$rows_network8 = mysqli_fetch_array($query_network8);
	
	$sql_network9="SELECT * FROM `THIRD_PAGE_typewise_monthly_count` WHERE `destination_country`='".$_GET['Country']."' && `type`='Network Attacks' && `month`='Sep'";
	$query_network9 = mysqli_query($con,$sql_network9);
	$rows_network9 = mysqli_fetch_array($query_network9);
	
	$sql_network10="SELECT * FROM `THIRD_PAGE_typewise_monthly_count` WHERE `destination_country`='".$_GET['Country']."' && `type`='Network Attacks' && `month`='Oct'";
	$query_network10 = mysqli_query($con,$sql_network10);
	$rows_network10 = mysqli_fetch_array($query_network10);
	
	$sql_network11="SELECT * FROM `THIRD_PAGE_typewise_monthly_count` WHERE `destination_country`='".$_GET['Country']."' && `type`='Network Attacks' && `month`='Nov'";
	$query_network11 = mysqli_query($con,$sql_network11);
	$rows_network11 = mysqli_fetch_array($query_network11);
	
	$sql_network12="SELECT * FROM `THIRD_PAGE_typewise_monthly_count` WHERE `destination_country`='".$_GET['Country']."' && `type`='Network Attacks' && `month`='Dec'";
	$query_network12 = mysqli_query($con,$sql_network12);
	$rows_network12 = mysqli_fetch_array($query_network12);
	
		
	
	
	$sql_infections="SELECT * FROM `THIRD_PAGE_typewise_monthly_count` WHERE `destination_country`='".$_GET['Country']."' && `type`='Local Infections' && `month`='Jan'";
	$query_infections = mysqli_query($con,$sql_infections);
	$rows_infections = mysqli_fetch_array($query_infections);
	
	$sql_infections2="SELECT * FROM `THIRD_PAGE_typewise_monthly_count` WHERE `destination_country`='".$_GET['Country']."' && `type`='Local Infections' && `month`='Feb'";
	$query_infections2 = mysqli_query($con,$sql_infections2);
	$rows_infections2 = mysqli_fetch_array($query_infections2);
	
	$sql_infections3="SELECT * FROM `THIRD_PAGE_typewise_monthly_count` WHERE `destination_country`='".$_GET['Country']."' && `type`='Local Infections' && `month`='Mar'";
	$query_infections3 = mysqli_query($con,$sql_infections3);
	$rows_infections3 = mysqli_fetch_array($query_infections3);
	
	$sql_infections4="SELECT * FROM `THIRD_PAGE_typewise_monthly_count` WHERE `destination_country`='".$_GET['Country']."' && `type`='Local Infections' && `month`='Apr'";
	$query_infections4 = mysqli_query($con,$sql_infections4);
	$rows_infections4 = mysqli_fetch_array($query_infections4);
	
	$sql_infections5="SELECT * FROM `THIRD_PAGE_typewise_monthly_count` WHERE `destination_country`='".$_GET['Country']."' && `type`='Local Infections' && `month`='May'";
	$query_infections5 = mysqli_query($con,$sql_infections5);
	$rows_infections5 = mysqli_fetch_array($query_infections5);
	
	$sql_infections6="SELECT * FROM `THIRD_PAGE_typewise_monthly_count` WHERE `destination_country`='".$_GET['Country']."' && `type`='Local Infections' && `month`='Jun'";
	$query_infections6 = mysqli_query($con,$sql_infections6);
	$rows_infections6 = mysqli_fetch_array($query_infections6);
	
	$sql_infections7="SELECT * FROM `THIRD_PAGE_typewise_monthly_count` WHERE `destination_country`='".$_GET['Country']."' && `type`='Local Infections' && `month`='Jul'";
	$query_infections7 = mysqli_query($con,$sql_infections7);
	$rows_infections7 = mysqli_fetch_array($query_infections7);
	
	$sql_infections8="SELECT * FROM `THIRD_PAGE_typewise_monthly_count` WHERE `destination_country`='".$_GET['Country']."' && `type`='Local Infections' && `month`='Aug'";
	$query_infections8 = mysqli_query($con,$sql_infections8);
	$rows_infections8 = mysqli_fetch_array($query_infections8);
	
	$sql_infections9="SELECT * FROM `THIRD_PAGE_typewise_monthly_count` WHERE `destination_country`='".$_GET['Country']."' && `type`='Local Infections' && `month`='Sep'";
	$query_infections9 = mysqli_query($con,$sql_infections9);
	$rows_infections9 = mysqli_fetch_array($query_infections9);
	
	$sql_infections10="SELECT * FROM `THIRD_PAGE_typewise_monthly_count` WHERE `destination_country`='".$_GET['Country']."' && `type`='Local Infections' && `month`='Oct'";
	$query_infections10 = mysqli_query($con,$sql_infections10);
	$rows_infections10 = mysqli_fetch_array($query_infections10);
	
	$sql_infections11="SELECT * FROM `THIRD_PAGE_typewise_monthly_count` WHERE `destination_country`='".$_GET['Country']."' && `type`='Local Infections' && `month`='Nov'";
	$query_infections11 = mysqli_query($con,$sql_infections11);
	$rows_infections11 = mysqli_fetch_array($query_infections11);
	
	$sql_infections12="SELECT * FROM `THIRD_PAGE_typewise_monthly_count` WHERE `destination_country`='".$_GET['Country']."' && `type`='Local Infections' && `month`='Dec'";
	$query_infections12 = mysqli_query($con,$sql_infections12);
	$rows_infections12 = mysqli_fetch_array($query_infections12);
	
	
	
	$sql_demand="SELECT * FROM `THIRD_PAGE_typewise_monthly_count` WHERE `destination_country`='".$_GET['Country']."' && `type`='On-Demand Scan' && `month`='Jan'";
	$query_demand = mysqli_query($con,$sql_demand);
	$rows_demand = mysqli_fetch_array($query_demand);
	
	$sql_demand2="SELECT * FROM `THIRD_PAGE_typewise_monthly_count` WHERE `destination_country`='".$_GET['Country']."' && `type`='On-Demand Scan' && `month`='Feb'";
	$query_demand2 = mysqli_query($con,$sql_demand2);
	$rows_demand2 = mysqli_fetch_array($query_demand2);
	
	$sql_demand3="SELECT * FROM `THIRD_PAGE_typewise_monthly_count` WHERE `destination_country`='".$_GET['Country']."' && `type`='On-Demand Scan' && `month`='Mar'";
	$query_demand3 = mysqli_query($con,$sql_demand3);
	$rows_demand3 = mysqli_fetch_array($query_demand3);
	
	$sql_demand4="SELECT * FROM `THIRD_PAGE_typewise_monthly_count` WHERE `destination_country`='".$_GET['Country']."' && `type`='On-Demand Scan' && `month`='Apr'";
	$query_demand4 = mysqli_query($con,$sql_demand4);
	$rows_demand4 = mysqli_fetch_array($query_demand4);
	
	$sql_demand5="SELECT * FROM `THIRD_PAGE_typewise_monthly_count` WHERE `destination_country`='".$_GET['Country']."' && `type`='On-Demand Scan' && `month`='May'";
	$query_demand5 = mysqli_query($con,$sql_demand5);
	$rows_demand5 = mysqli_fetch_array($query_demand5);
	
	$sql_demand6="SELECT * FROM `THIRD_PAGE_typewise_monthly_count` WHERE `destination_country`='".$_GET['Country']."' && `type`='On-Demand Scan' && `month`='Jun'";
	$query_demand6 = mysqli_query($con,$sql_demand6);
	$rows_demand6 = mysqli_fetch_array($query_demand6);
	
	$sql_demand7="SELECT * FROM `THIRD_PAGE_typewise_monthly_count` WHERE `destination_country`='".$_GET['Country']."' && `type`='On-Demand Scan' && `month`='Jul'";
	$query_demand7 = mysqli_query($con,$sql_demand7);
	$rows_demand7 = mysqli_fetch_array($query_demand7);
	
	$sql_demand8="SELECT * FROM `THIRD_PAGE_typewise_monthly_count` WHERE `destination_country`='".$_GET['Country']."' && `type`='On-Demand Scan' && `month`='Aug'";
	$query_demand8 = mysqli_query($con,$sql_demand8);
	$rows_demand8 = mysqli_fetch_array($query_demand8);
	
	$sql_demand9="SELECT * FROM `THIRD_PAGE_typewise_monthly_count` WHERE `destination_country`='".$_GET['Country']."' && `type`='On-Demand Scan' && `month`='Sep'";
	$query_demand9 = mysqli_query($con,$sql_demand9);
	$rows_demand9 = mysqli_fetch_array($query_demand9);
	
	$sql_demand10="SELECT * FROM `THIRD_PAGE_typewise_monthly_count` WHERE `destination_country`='".$_GET['Country']."' && `type`='On-Demand Scan' && `month`='Oct'";
	$query_demand10 = mysqli_query($con,$sql_demand10);
	$rows_demand10 = mysqli_fetch_array($query_demand10);
	
	$sql_demand11="SELECT * FROM `THIRD_PAGE_typewise_monthly_count` WHERE `destination_country`='".$_GET['Country']."' && `type`='On-Demand Scan' && `month`='Nov'";
	$query_demand11 = mysqli_query($con,$sql_demand11);
	$rows_demand11 = mysqli_fetch_array($query_demand11);
	
	$sql_demand12="SELECT * FROM `THIRD_PAGE_typewise_monthly_count` WHERE `destination_country`='".$_GET['Country']."' && `type`='On-Demand Scan' && `month`='Dec'";
	$query_demand12 = mysqli_query($con,$sql_demand12);
	$rows_demand12 = mysqli_fetch_array($query_demand12);
	
	
	
	$sql_web="SELECT * FROM `THIRD_PAGE_typewise_monthly_count` WHERE `destination_country`='".$_GET['Country']."' && `type`='Web Threats' && `month`='Jan'";
	$query_web = mysqli_query($con,$sql_web);
	$rows_web = mysqli_fetch_array($query_web);
	
	$sql_web2="SELECT * FROM `THIRD_PAGE_typewise_monthly_count` WHERE `destination_country`='".$_GET['Country']."' && `type`='Web Threats' && `month`='Feb'";
	$query_web2 = mysqli_query($con,$sql_web2);
	$rows_web2 = mysqli_fetch_array($query_web2);
	
	$sql_web3="SELECT * FROM `THIRD_PAGE_typewise_monthly_count` WHERE `destination_country`='".$_GET['Country']."' && `type`='Web Threats' && `month`='Mar'";
	$query_web3 = mysqli_query($con,$sql_web3);
	$rows_web3 = mysqli_fetch_array($query_web3);
	
	$sql_web4="SELECT * FROM `THIRD_PAGE_typewise_monthly_count` WHERE `destination_country`='".$_GET['Country']."' && `type`='Web Threats' && `month`='Apr'";
	$query_web4 = mysqli_query($con,$sql_web4);
	$rows_web4 = mysqli_fetch_array($query_web4);
	
	$sql_web5="SELECT * FROM `THIRD_PAGE_typewise_monthly_count` WHERE `destination_country`='".$_GET['Country']."' && `type`='Web Threats' && `month`='May'";
	$query_web5 = mysqli_query($con,$sql_web5);
	$rows_web5 = mysqli_fetch_array($query_web5);
	
	$sql_web6="SELECT * FROM `THIRD_PAGE_typewise_monthly_count` WHERE `destination_country`='".$_GET['Country']."' && `type`='Web Threats' && `month`='Jun'";
	$query_web6 = mysqli_query($con,$sql_web6);
	$rows_web6 = mysqli_fetch_array($query_web6);
	
	$sql_web7="SELECT * FROM `THIRD_PAGE_typewise_monthly_count` WHERE `destination_country`='".$_GET['Country']."' && `type`='Web Threats' && `month`='Jul'";
	$query_web7 = mysqli_query($con,$sql_web7);
	$rows_web7 = mysqli_fetch_array($query_web7);
	
	$sql_web8="SELECT * FROM `THIRD_PAGE_typewise_monthly_count` WHERE `destination_country`='".$_GET['Country']."' && `type`='Web Threats' && `month`='Aug'";
	$query_web8 = mysqli_query($con,$sql_web8);
	$rows_web8 = mysqli_fetch_array($query_web8);
	
	$sql_web9="SELECT * FROM `THIRD_PAGE_typewise_monthly_count` WHERE `destination_country`='".$_GET['Country']."' && `type`='Web Threats' && `month`='Sep'";
	$query_web9 = mysqli_query($con,$sql_web9);
	$rows_web9 = mysqli_fetch_array($query_web9);
	
	$sql_web10="SELECT * FROM `THIRD_PAGE_typewise_monthly_count` WHERE `destination_country`='".$_GET['Country']."' && `type`='Web Threats' && `month`='Oct'";
	$query_web10 = mysqli_query($con,$sql_web10);
	$rows_web10 = mysqli_fetch_array($query_web10);
	
	$sql_web11="SELECT * FROM `THIRD_PAGE_typewise_monthly_count` WHERE `destination_country`='".$_GET['Country']."' && `type`='Web Threats' && `month`='Nov'";
	$query_web11 = mysqli_query($con,$sql_web11);
	$rows_web11 = mysqli_fetch_array($query_web11);
	
	$sql_web12="SELECT * FROM `THIRD_PAGE_typewise_monthly_count` WHERE `destination_country`='".$_GET['Country']."' && `type`='Web Threats' && `month`='Dec'";
	$query_web12 = mysqli_query($con,$sql_web12);
	$rows_web12 = mysqli_fetch_array($query_web12);
	
	
	
	$sql_mail ="SELECT * FROM `THIRD_PAGE_typewise_monthly_count` WHERE `destination_country`='".$_GET['Country']."' && `type`='Infected Mail' && `month`='Jan'";
	$query_mail = mysqli_query($con,$sql_mail);
	$rows_mail = mysqli_fetch_array($query_mail);
	
	$sql_mail2="SELECT * FROM `THIRD_PAGE_typewise_monthly_count` WHERE `destination_country`='".$_GET['Country']."' && `type`='Infected Mail' && `month`='Feb'";
	$query_mail2 = mysqli_query($con,$sql_mail2);
	$rows_mail2 = mysqli_fetch_array($query_mail2);
	
	$sql_mail3="SELECT * FROM `THIRD_PAGE_typewise_monthly_count` WHERE `destination_country`='".$_GET['Country']."' && `type`='Infected Mail' && `month`='Mar'";
	$query_mail3 = mysqli_query($con,$sql_mail3);
	$rows_mail3 = mysqli_fetch_array($query_mail3);
	
	$sql_mail4="SELECT * FROM `THIRD_PAGE_typewise_monthly_count` WHERE `destination_country`='".$_GET['Country']."' && `type`='Infected Mail' && `month`='Apr'";
	$query_mail4 = mysqli_query($con,$sql_mail4);
	$rows_mail4 = mysqli_fetch_array($query_mail4);
	
	$sql_mail5="SELECT * FROM `THIRD_PAGE_typewise_monthly_count` WHERE `destination_country`='".$_GET['Country']."' && `type`='Infected Mail' && `month`='May'";
	$query_mail5 = mysqli_query($con,$sql_mail5);
	$rows_mail5 = mysqli_fetch_array($query_mail5);
	
	$sql_mail6="SELECT * FROM `THIRD_PAGE_typewise_monthly_count` WHERE `destination_country`='".$_GET['Country']."' && `type`='Infected Mail' && `month`='Jun'";
	$query_mail6 = mysqli_query($con,$sql_mail6);
	$rows_mail6 = mysqli_fetch_array($query_mail6);
	
	$sql_mail7="SELECT * FROM `THIRD_PAGE_typewise_monthly_count` WHERE `destination_country`='".$_GET['Country']."' && `type`='Infected Mail' && `month`='Jul'";
	$query_mail7 = mysqli_query($con,$sql_mail7);
	$rows_mail7 = mysqli_fetch_array($query_mail7);
	
	$sql_mail8="SELECT * FROM `THIRD_PAGE_typewise_monthly_count` WHERE `destination_country`='".$_GET['Country']."' && `type`='Infected Mail' && `month`='Aug'";
	$query_mail8 = mysqli_query($con,$sql_mail8);
	$rows_mail8 = mysqli_fetch_array($query_mail8);
	
	$sql_mail9="SELECT * FROM `THIRD_PAGE_typewise_monthly_count` WHERE `destination_country`='".$_GET['Country']."' && `type`='Infected Mail' && `month`='Sep'";
	$query_mail9 = mysqli_query($con,$sql_mail9);
	$rows_mail9 = mysqli_fetch_array($query_mail9);
	
	$sql_mail10="SELECT * FROM `THIRD_PAGE_typewise_monthly_count` WHERE `destination_country`='".$_GET['Country']."' && `type`='Infected Mail' && `month`='Oct'";
	$query_mail10 = mysqli_query($con,$sql_mail10);
	$rows_mail10 = mysqli_fetch_array($query_mail10);
	
	$sql_mail11="SELECT * FROM `THIRD_PAGE_typewise_monthly_count` WHERE `destination_country`='".$_GET['Country']."' && `type`='Infected Mail' && `month`='Nov'";
	$query_mail11 = mysqli_query($con,$sql_mail11);
	$rows_mail11 = mysqli_fetch_array($query_mail11);
	
	$sql_mail12="SELECT * FROM `THIRD_PAGE_typewise_monthly_count` WHERE `destination_country`='".$_GET['Country']."' && `type`='Infected Mail' && `month`='Dec'";
	$query_mail12 = mysqli_query($con,$sql_mail12);
	$rows_mail12 = mysqli_fetch_array($query_mail12);
	
	
	
	$sql_vulnerabilities ="SELECT * FROM `THIRD_PAGE_typewise_monthly_count` WHERE `destination_country`='".$_GET['Country']."' && `type`='Vulnerabilities' && `month`='Jan'";
	$query_vulnerabilities = mysqli_query($con,$sql_vulnerabilities);
	$rows_vulnerabilities = mysqli_fetch_array($query_vulnerabilities);
	
	$sql_vulnerabilities2="SELECT * FROM `THIRD_PAGE_typewise_monthly_count` WHERE `destination_country`='".$_GET['Country']."' && `type`='Vulnerabilities' && `month`='Feb'";
	$query_vulnerabilities2 = mysqli_query($con,$sql_vulnerabilities2);
	$rows_vulnerabilities2 = mysqli_fetch_array($query_vulnerabilities2);
	
	$sql_vulnerabilities3="SELECT * FROM `THIRD_PAGE_typewise_monthly_count` WHERE `destination_country`='".$_GET['Country']."' && `type`='Vulnerabilities' && `month`='Mar'";
	$query_vulnerabilities3 = mysqli_query($con,$sql_vulnerabilities3);
	$rows_vulnerabilities3 = mysqli_fetch_array($query_vulnerabilities3);
	
	$sql_vulnerabilities4="SELECT * FROM `THIRD_PAGE_typewise_monthly_count` WHERE `destination_country`='".$_GET['Country']."' && `type`='Vulnerabilities' && `month`='Apr'";
	$query_vulnerabilities4 = mysqli_query($con,$sql_vulnerabilities4);
	$rows_vulnerabilities4 = mysqli_fetch_array($query_vulnerabilities4);
	
	$sql_vulnerabilities5="SELECT * FROM `THIRD_PAGE_typewise_monthly_count` WHERE `destination_country`='".$_GET['Country']."' && `type`='Vulnerabilities' && `month`='May'";
	$query_vulnerabilities5 = mysqli_query($con,$sql_vulnerabilities5);
	$rows_vulnerabilities5 = mysqli_fetch_array($query_vulnerabilities5);
	
	$sql_vulnerabilities6="SELECT * FROM `THIRD_PAGE_typewise_monthly_count` WHERE `destination_country`='".$_GET['Country']."' && `type`='Vulnerabilities' && `month`='Jun'";
	$query_vulnerabilities6 = mysqli_query($con,$sql_vulnerabilities6);
	$rows_vulnerabilities6 = mysqli_fetch_array($query_vulnerabilities6);
	
	$sql_vulnerabilities7="SELECT * FROM `THIRD_PAGE_typewise_monthly_count` WHERE `destination_country`='".$_GET['Country']."' && `type`='Vulnerabilities' && `month`='Jul'";
	$query_vulnerabilities7 = mysqli_query($con,$sql_vulnerabilities7);
	$rows_vulnerabilities7 = mysqli_fetch_array($query_vulnerabilities7);
	
	$sql_vulnerabilities8="SELECT * FROM `THIRD_PAGE_typewise_monthly_count` WHERE `destination_country`='".$_GET['Country']."' && `type`='Vulnerabilities' && `month`='Aug'";
	$query_vulnerabilities8 = mysqli_query($con,$sql_vulnerabilities8);
	$rows_vulnerabilities8 = mysqli_fetch_array($query_vulnerabilities8);
	
	$sql_vulnerabilities9="SELECT * FROM `THIRD_PAGE_typewise_monthly_count` WHERE `destination_country`='".$_GET['Country']."' && `type`='Vulnerabilities' && `month`='Sep'";
	$query_vulnerabilities9 = mysqli_query($con,$sql_vulnerabilities9);
	$rows_vulnerabilities9 = mysqli_fetch_array($query_vulnerabilities9);
	
	$sql_vulnerabilities10="SELECT * FROM `THIRD_PAGE_typewise_monthly_count` WHERE `destination_country`='".$_GET['Country']."' && `type`='Vulnerabilities' && `month`='Oct'";
	$query_vulnerabilities10 = mysqli_query($con,$sql_vulnerabilities10);
	$rows_vulnerabilities10 = mysqli_fetch_array($query_vulnerabilities10);
	
	$sql_vulnerabilities11="SELECT * FROM `THIRD_PAGE_typewise_monthly_count` WHERE `destination_country`='".$_GET['Country']."' && `type`='Vulnerabilities' && `month`='Nov'";
	$query_vulnerabilities11 = mysqli_query($con,$sql_vulnerabilities11);
	$rows_vulnerabilities11 = mysqli_fetch_array($query_vulnerabilities11);
	
	$sql_vulnerabilities12="SELECT * FROM `THIRD_PAGE_typewise_monthly_count` WHERE `destination_country`='".$_GET['Country']."' && `type`='Vulnerabilities' && `month`='Dec'";
	$query_vulnerabilities12 = mysqli_query($con,$sql_vulnerabilities12);
	$rows_vulnerabilities12 = mysqli_fetch_array($query_vulnerabilities12);
	
	
	
	$sql_botnet ="SELECT * FROM `THIRD_PAGE_typewise_monthly_count` WHERE `destination_country`='".$_GET['Country']."' && `type`='Botnet Activity' && `month`='Jan'";
	$query_botnet = mysqli_query($con,$sql_botnet);
	$rows_botnet = mysqli_fetch_array($query_botnet);
	
	$sql_botnet2="SELECT * FROM `THIRD_PAGE_typewise_monthly_count` WHERE `destination_country`='".$_GET['Country']."' && `type`='Botnet Activity' && `month`='Feb'";
	$query_botnet2 = mysqli_query($con,$sql_botnet2);
	$rows_botnet2 = mysqli_fetch_array($query_botnet2);
	
	$sql_botnet3="SELECT * FROM `THIRD_PAGE_typewise_monthly_count` WHERE `destination_country`='".$_GET['Country']."' && `type`='Botnet Activity' && `month`='Mar'";
	$query_botnet3 = mysqli_query($con,$sql_botnet3);
	$rows_botnet3 = mysqli_fetch_array($query_botnet3);
	
	$sql_botnet4="SELECT * FROM `THIRD_PAGE_typewise_monthly_count` WHERE `destination_country`='".$_GET['Country']."' && `type`='Botnet Activity' && `month`='Apr'";
	$query_botnet4 = mysqli_query($con,$sql_botnet4);
	$rows_botnet4 = mysqli_fetch_array($query_botnet4);
	
	$sql_botnet5="SELECT * FROM `THIRD_PAGE_typewise_monthly_count` WHERE `destination_country`='".$_GET['Country']."' && `type`='Botnet Activity' && `month`='May'";
	$query_botnet5 = mysqli_query($con,$sql_botnet5);
	$rows_botnet5 = mysqli_fetch_array($query_botnet5);
	
	$sql_botnet6="SELECT * FROM `THIRD_PAGE_typewise_monthly_count` WHERE `destination_country`='".$_GET['Country']."' && `type`='Botnet Activity' && `month`='Jun'";
	$query_botnet6 = mysqli_query($con,$sql_botnet6);
	$rows_botnet6 = mysqli_fetch_array($query_botnet6);
	
	$sql_botnet7="SELECT * FROM `THIRD_PAGE_typewise_monthly_count` WHERE `destination_country`='".$_GET['Country']."' && `type`='Botnet Activity' && `month`='Jul'";
	$query_botnet7 = mysqli_query($con,$sql_botnet7);
	$rows_botnet7 = mysqli_fetch_array($query_botnet7);
	
	$sql_botnet8="SELECT * FROM `THIRD_PAGE_typewise_monthly_count` WHERE `destination_country`='".$_GET['Country']."' && `type`='Botnet Activity' && `month`='Aug'";
	$query_botnet8 = mysqli_query($con,$sql_botnet8);
	$rows_botnet8 = mysqli_fetch_array($query_botnet8);
	
	$sql_botnet9="SELECT * FROM `THIRD_PAGE_typewise_monthly_count` WHERE `destination_country`='".$_GET['Country']."' && `type`='Botnet Activity' && `month`='Sep'";
	$query_botnet9 = mysqli_query($con,$sql_botnet9);
	$rows_botnet9 = mysqli_fetch_array($query_botnet9);
	
	$sql_botnet10="SELECT * FROM `THIRD_PAGE_typewise_monthly_count` WHERE `destination_country`='".$_GET['Country']."' && `type`='Botnet Activity' && `month`='Oct'";
	$query_botnet10 = mysqli_query($con,$sql_botnet10);
	$rows_botnet10 = mysqli_fetch_array($query_botnet10);
	
	$sql_botnet11="SELECT * FROM `THIRD_PAGE_typewise_monthly_count` WHERE `destination_country`='".$_GET['Country']."' && `type`='Botnet Activity' && `month`='Nov'";
	$query_botnet11 = mysqli_query($con,$sql_botnet11);
	$rows_botnet11 = mysqli_fetch_array($query_botnet11);
	
	$sql_botnet12="SELECT * FROM `THIRD_PAGE_typewise_monthly_count` WHERE `destination_country`='".$_GET['Country']."' && `type`='Botnet Activity' && `month`='Dec'";
	$query_botnet12 = mysqli_query($con,$sql_botnet12);
	$rows_botnet12 = mysqli_fetch_array($query_botnet12);
	
	
?>
<head>
  <title>Cyber Attack Website</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Coda:400,800" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <script src="js/chart.js"></script>
  <script src="js/chart-main.js"></script>
  <script>
		var config = {
			type: 'line',
			data: {
				labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
				datasets: [{
					label: 'Spam',
					backgroundColor: window.chartColors.red,
					borderColor: window.chartColors.red,
					data: [<?php echo $rows_spam['wise_monthly_count']; ?>, <?php echo $rows_spam2['wise_monthly_count']; ?>, <?php echo $rows_spam3['wise_monthly_count']; ?>, <?php echo $rows_spam4['wise_monthly_count']; ?>, <?php echo $rows_spam5['wise_monthly_count']; ?>, <?php echo $rows_spam6['wise_monthly_count']; ?>, <?php echo $rows_spam7['wise_monthly_count']; ?>, <?php echo $rows_spam8['wise_monthly_count']; ?>, <?php echo $rows_spam9['wise_monthly_count']; ?>, <?php echo $rows_spam10['wise_monthly_count']; ?>, <?php echo $rows_spam11['wise_monthly_count']; ?>, <?php echo $rows_spam12['wise_monthly_count']; ?>],
					fill: false,
				}, {
					label: 'Network Attacks',
					fill: false,
					backgroundColor: window.chartColors.yellow,
					borderColor: window.chartColors.yellow,
					data: [<?php echo $rows_network['wise_monthly_count']; ?>, <?php echo $rows_network2['wise_monthly_count']; ?>, <?php echo $rows_network3['wise_monthly_count']; ?>, <?php echo $rows_network4['wise_monthly_count']; ?>, <?php echo $rows_network5['wise_monthly_count']; ?>, <?php echo $rows_network6['wise_monthly_count']; ?>, <?php echo $rows_network7['wise_monthly_count']; ?>, <?php echo $rows_network8['wise_monthly_count']; ?>, <?php echo $rows_network9['wise_monthly_count']; ?>, <?php echo $rows_network10['wise_monthly_count']; ?>, <?php echo $rows_network11['wise_monthly_count']; ?>, <?php echo $rows_network12['wise_monthly_count']; ?>],
				}, {
					label: 'Local Infections',
					fill: false,
					backgroundColor: window.chartColors.green,
					borderColor: window.chartColors.green,
					data: [<?php echo $rows_infections['wise_monthly_count']; ?>, <?php echo $rows_infections2['wise_monthly_count']; ?>, <?php echo $rows_infections3['wise_monthly_count']; ?>, <?php echo $rows_infections4['wise_monthly_count']; ?>, <?php echo $rows_infections5['wise_monthly_count']; ?>, <?php echo $rows_infections6['wise_monthly_count']; ?>, <?php echo $rows_infections7['wise_monthly_count']; ?>, <?php echo $rows_infections8['wise_monthly_count']; ?>, <?php echo $rows_infections9['wise_monthly_count']; ?>, <?php echo $rows_infections10['wise_monthly_count']; ?>, <?php echo $rows_infections11['wise_monthly_count']; ?>, <?php echo $rows_infections12['wise_monthly_count']; ?>],
				}, {
					label: 'On-Demand',
					fill: false,
					backgroundColor: window.chartColors.grey,
					borderColor: window.chartColors.grey,
					data: [<?php echo $rows_demand['wise_monthly_count']; ?>, <?php echo $rows_demand2['wise_monthly_count']; ?>, <?php echo $rows_demand3['wise_monthly_count']; ?>, <?php echo $rows_demand4['wise_monthly_count']; ?>, <?php echo $rows_demand5['wise_monthly_count']; ?>, <?php echo $rows_demand6['wise_monthly_count']; ?>, <?php echo $rows_demand7['wise_monthly_count']; ?>, <?php echo $rows_demand8['wise_monthly_count']; ?>, <?php echo $rows_demand9['wise_monthly_count']; ?>, <?php echo $rows_demand10['wise_monthly_count']; ?>, <?php echo $rows_demand11['wise_monthly_count']; ?>, <?php echo $rows_demand12['wise_monthly_count']; ?>],
				}, {
					label: 'Web Threats',
					fill: false,
					backgroundColor: window.chartColors.purple,
					borderColor: window.chartColors.purple,
					data: [<?php echo $rows_web['wise_monthly_count']; ?>, <?php echo $rows_web2['wise_monthly_count']; ?>, <?php echo $rows_web3['wise_monthly_count']; ?>, <?php echo $rows_web4['wise_monthly_count']; ?>, <?php echo $rows_web5['wise_monthly_count']; ?>, <?php echo $rows_web6['wise_monthly_count']; ?>, <?php echo $rows_web7['wise_monthly_count']; ?>, <?php echo $rows_web8['wise_monthly_count']; ?>, <?php echo $rows_web9['wise_monthly_count']; ?>, <?php echo $rows_web10['wise_monthly_count']; ?>, <?php echo $rows_web11['wise_monthly_count']; ?>, <?php echo $rows_web12['wise_monthly_count']; ?>],
				}, {
					label: 'Infected Mail',
					fill: false,
					backgroundColor: window.chartColors.blue,
					borderColor: window.chartColors.blue,
					data: [<?php echo $rows_mail['wise_monthly_count']; ?>, <?php echo $rows_mail2['wise_monthly_count']; ?>, <?php echo $rows_mail3['wise_monthly_count']; ?>, <?php echo $rows_mail4['wise_monthly_count']; ?>, <?php echo $rows_mail5['wise_monthly_count']; ?>, <?php echo $rows_mail6['wise_monthly_count']; ?>, <?php echo $rows_mail7['wise_monthly_count']; ?>, <?php echo $rows_mail8['wise_monthly_count']; ?>, <?php echo $rows_mail9['wise_monthly_count']; ?>, <?php echo $rows_mail10['wise_monthly_count']; ?>, <?php echo $rows_mail11['wise_monthly_count']; ?>, <?php echo $rows_mail12['wise_monthly_count']; ?>],
				}, {
					label: 'Vulnerabilities',
					fill: false,
					backgroundColor: window.chartColors.orange,
					borderColor: window.chartColors.orange,
					data: [<?php echo $rows_vulnerabilities['wise_monthly_count']; ?>, <?php echo $rows_vulnerabilities2['wise_monthly_count']; ?>, <?php echo $rows_vulnerabilities3['wise_monthly_count']; ?>, <?php echo $rows_vulnerabilities4['wise_monthly_count']; ?>, <?php echo $rows_vulnerabilities5['wise_monthly_count']; ?>, <?php echo $rows_vulnerabilities6['wise_monthly_count']; ?>, <?php echo $rows_vulnerabilities7['wise_monthly_count']; ?>, <?php echo $rows_vulnerabilities8['wise_monthly_count']; ?>, <?php echo $rows_vulnerabilities9['wise_monthly_count']; ?>, <?php echo $rows_vulnerabilities10['wise_monthly_count']; ?>, <?php echo $rows_vulnerabilities11['wise_monthly_count']; ?>, <?php echo $rows_vulnerabilities12['wise_monthly_count']; ?>],
				}, {
					label: 'Botnet Activity',
					fill: false,
					backgroundColor: window.chartColors.brown,
					borderColor: window.chartColors.brown,
					data: [<?php echo $rows_botnet['wise_monthly_count']; ?>, <?php echo $rows_botnet2['wise_monthly_count']; ?>, <?php echo $rows_botnet3['wise_monthly_count']; ?>, <?php echo $rows_botnet4['wise_monthly_count']; ?>, <?php echo $rows_botnet5['wise_monthly_count']; ?>, <?php echo $rows_botnet6['wise_monthly_count']; ?>, <?php echo $rows_botnet7['wise_monthly_count']; ?>, <?php echo $rows_botnet8['wise_monthly_count']; ?>, <?php echo $rows_botnet9['wise_monthly_count']; ?>, <?php echo $rows_botnet10['wise_monthly_count']; ?>, <?php echo $rows_botnet11['wise_monthly_count']; ?>, <?php echo $rows_botnet12['wise_monthly_count']; ?>],
				}]
			},
			options: {
				responsive: true,
				title: {
					display: true,
					text: ''
				},
				scales: {
					yAxes: [{
						ticks: {
							min: 0,
							max: 500
						}
					}]
				}
			}
		};

		window.onload = function() {
			var ctx = document.getElementById('canvas').getContext('2d');
			window.myLine = new Chart(ctx, config);
		};
	</script>
</head>
<body >
<div class="main-div" style="background:url(images/bg0.png) no-repeat; background-size:cover">
	<header>
		<div class="header-top">
			<div class="container">
				<h2><img src='images/web_icon.gif' width='80px'> Cyber Attack Prediction and Analysis using Spatial and Geo Hotspot</h2>
			</div>
		</div>
		<div class="header-bottom">
			<div class="container">
				<nav class="navbar navbar-inverse">
					<div class="navbar-header">
					  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span> 
					  </button>
					</div>
					<div class="collapse navbar-collapse" id="myNavbar">
					  <ul class="nav navbar-nav cus-nav">
						<li><a href="index.html">Live Map </a></li>
						<li><a href="prediction.php">Prediction</a></li>
						<li><a href="statistics.php" class="active">Statistics</a></li> 
						<li><a href="attack_information.html">Attack Information</a></li> 
						<li><a href="about.html">About Us</a></li> 
					  </ul>
					  
					</div>
				</nav>
			</div>
		</div>
	</header>
	
	<div class="content-div">
		<div class="container">
			<div class="row">
				<div class="col-sm-6">
					<h4 class="cus-heading">Country-wise Plot India</h4>
				</div>
				<div class="col-sm-6">
					<div class="form-group">
					<form>
					   <button class="btn btn-enter cus-select" style="width: 100px;">ENTER</button><input id="myInput" type="text" name="Country" class="form-control cus-select" placeholder="Country" required>
					</form>
					</div>
				</div>
			</div>
			<!-- <div id="chartContainer" style="height: 370px; width: 100%;"></div> -->
			<div style="width: 100%; background:#fff;">
				<canvas id="canvas"></canvas>
			</div>
		</div>
	</div>
	
	<div class="container">
		<div class="row">
			<div class="col-sm-6">
				<div class="sec-back" style="background:url(images/bg4_country.gif) no-repeat; background-size:cover">
					<div class="overlay"></div>
					<h4>Top Attacked Countries</h4>
					<ul>
						<li>China</li>
						<li>USA</li>
						<li>Russia</li>
						<li>India</li>
						<li>Canada</li>
					</ul>
				</div>
				<p class="total">Total Countries Scanned: <span>234</span></p>
			</div>
			
			<div class="col-sm-6">
				<div class="sec-back" style="background:url(images/bg3_attack.jpg) no-repeat; background-size:cover">
				<div class="overlay"></div>
					<h4>Top Malwares</h4>
					<ul>
						<li>Web Threats</li>
						<li>Botnet Activity</li>
						<li>On-Demand Scan</li>
						<li>Network Attacks</li>
						<li>Local Infections</li>
					</ul>
				</div>
				<p class="total">Total Different Type of Cyber Attacks:  <span>12</span></p>
			</div>
		</div>
	</div>
	
</div>
<style>
input.form-control{
	font-size: 18px;
    height: 45px;
    font-weight: 600;
}
.autocomplete-items {
     position: absolute;
    border: 1px solid #d4d4d4;
    border-bottom: none;
    border-top: none;
    z-index: 99;
    top: 70%;
    left: 0;
    right: 0;
    width: 210px;
    margin-left: 260px;
}

.autocomplete-items div {
  padding: 10px;
  cursor: pointer;
  background-color: #fff; 
  border-bottom: 1px solid #d4d4d4; 
  color: #000;
}

/*when hovering an item:*/
.autocomplete-items div:hover {
  background-color: #e9e9e9; 
}

/*when navigating through the items using the arrow keys:*/
.autocomplete-active {
  background-color: DodgerBlue !important; 
  color: #000; 
}
</style>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

<script>
function autocomplete(inp, arr) {
  /*the autocomplete function takes two arguments,
  the text field element and an array of possible autocompleted values:*/
  var currentFocus;
  /*execute a function when someone writes in the text field:*/
  inp.addEventListener("input", function(e) {
      var a, b, i, val = this.value;
      /*close any already open lists of autocompleted values*/
      closeAllLists();
      if (!val) { return false;}
      currentFocus = -1;
      /*create a DIV element that will contain the items (values):*/
      a = document.createElement("DIV");
      a.setAttribute("id", this.id + "autocomplete-list");
      a.setAttribute("class", "autocomplete-items");
      /*append the DIV element as a child of the autocomplete container:*/
      this.parentNode.appendChild(a);
      /*for each item in the array...*/
      for (i = 0; i < arr.length; i++) {
        /*check if the item starts with the same letters as the text field value:*/
        if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
          /*create a DIV element for each matching element:*/
          b = document.createElement("DIV");
          /*make the matching letters bold:*/
          b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
          b.innerHTML += arr[i].substr(val.length);
          /*insert a input field that will hold the current array item's value:*/
          b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
          /*execute a function when someone clicks on the item value (DIV element):*/
          b.addEventListener("click", function(e) {
              /*insert the value for the autocomplete text field:*/
              inp.value = this.getElementsByTagName("input")[0].value;
              /*close the list of autocompleted values,
              (or any other open lists of autocompleted values:*/
              closeAllLists();
          });
          a.appendChild(b);
        }
      }
  });
  /*execute a function presses a key on the keyboard:*/
  inp.addEventListener("keydown", function(e) {
      var x = document.getElementById(this.id + "autocomplete-list");
      if (x) x = x.getElementsByTagName("div");
      if (e.keyCode == 40) {
        /*If the arrow DOWN key is pressed,
        increase the currentFocus variable:*/
        currentFocus++;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 38) { //up
        /*If the arrow UP key is pressed,
        decrease the currentFocus variable:*/
        currentFocus--;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 13) {
        /*If the ENTER key is pressed, prevent the form from being submitted,*/
        e.preventDefault();
        if (currentFocus > -1) {
          /*and simulate a click on the "active" item:*/
          if (x) x[currentFocus].click();
        }
      }
  });
  function addActive(x) {
    /*a function to classify an item as "active":*/
    if (!x) return false;
    /*start by removing the "active" class on all items:*/
    removeActive(x);
    if (currentFocus >= x.length) currentFocus = 0;
    if (currentFocus < 0) currentFocus = (x.length - 1);
    /*add class "autocomplete-active":*/
    x[currentFocus].classList.add("autocomplete-active");
  }
  function removeActive(x) {
    /*a function to remove the "active" class from all autocomplete items:*/
    for (var i = 0; i < x.length; i++) {
      x[i].classList.remove("autocomplete-active");
    }
  }
  function closeAllLists(elmnt) {
    /*close all autocomplete lists in the document,
    except the one passed as an argument:*/
    var x = document.getElementsByClassName("autocomplete-items");
    for (var i = 0; i < x.length; i++) {
      if (elmnt != x[i] && elmnt != inp) {
        x[i].parentNode.removeChild(x[i]);
      }
    }
  }
  /*execute a function when someone clicks in the document:*/
  document.addEventListener("click", function (e) {
      closeAllLists(e.target);
  });
}

/*An array containing all the country names in the world:*/
var countries = ["Afghanistan","Albania","Algeria","Andorra","Angola","Anguilla","Antigua & Barbuda","Argentina","Armenia","Aruba","Australia","Austria","Azerbaijan","Bahamas","Bahrain","Bangladesh","Barbados","Belarus","Belgium","Belize","Benin","Bermuda","Bhutan","Bolivia","Bosnia & Herzegovina","Botswana","Brazil","British Virgin Islands","Brunei","Bulgaria","Burkina Faso","Burundi","Cambodia","Cameroon","Canada","Cape Verde","Cayman Islands","Central Arfrican Republic","Chad","Chile","China","Colombia","Congo","Cook Islands","Costa Rica","Cote D Ivoire","Croatia","Cuba","Curacao","Cyprus","Czech Republic","Denmark","Djibouti","Dominica","Dominican Republic","Ecuador","Egypt","El Salvador","Equatorial Guinea","Eritrea","Estonia","Ethiopia","Falkland Islands","Faroe Islands","Fiji","Finland","France","French Polynesia","French West Indies","Gabon","Gambia","Georgia","Germany","Ghana","Gibraltar","Greece","Greenland","Grenada","Guam","Guatemala","Guernsey","Guinea","Guinea Bissau","Guyana","Haiti","Honduras","Hong Kong","Hungary","Iceland","India","Indonesia","Iran","Iraq","Ireland","Isle of Man","Israel","Italy","Jamaica","Japan","Jersey","Jordan","Kazakhstan","Kenya","Kiribati","Kosovo","Kuwait","Kyrgyzstan","Laos","Latvia","Lebanon","Lesotho","Liberia","Libya","Liechtenstein","Lithuania","Luxembourg","Macau","Macedonia","Madagascar","Malawi","Malaysia","Maldives","Mali","Malta","Marshall Islands","Mauritania","Mauritius","Mexico","Micronesia","Moldova","Monaco","Mongolia","Montenegro","Montserrat","Morocco","Mozambique","Myanmar","Namibia","Nauro","Nepal","Netherlands","Netherlands Antilles","New Caledonia","New Zealand","Nicaragua","Niger","Nigeria","North Korea","Norway","Oman","Pakistan","Palau","Palestine","Panama","Papua New Guinea","Paraguay","Peru","Philippines","Poland","Portugal","Puerto Rico","Qatar","Reunion","Romania","Russia","Rwanda","Saint Pierre & Miquelon","Samoa","San Marino","Sao Tome and Principe","Saudi Arabia","Senegal","Serbia","Seychelles","Sierra Leone","Singapore","Slovakia","Slovenia","Solomon Islands","Somalia","South Africa","South Korea","South Sudan","Spain","Sri Lanka","St Kitts & Nevis","St Lucia","St Vincent","Sudan","Suriname","Swaziland","Sweden","Switzerland","Syria","Taiwan","Tajikistan","Tanzania","Thailand","Timor L'Este","Togo","Tonga","Trinidad & Tobago","Tunisia","Turkey","Turkmenistan","Turks & Caicos","Tuvalu","Uganda","Ukraine","United Arab Emirates","United Kingdom","United States of America","Uruguay","Uzbekistan","Vanuatu","Vatican City","Venezuela","Vietnam","Virgin Islands (US)","Yemen","Zambia","Zimbabwe"];

/*initiate the autocomplete function on the "myInput" element, and pass along the countries array as possible autocomplete values:*/
autocomplete(document.getElementById("myInput"), countries);
</script>
</body>
</html>
