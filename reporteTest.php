<?php

//Import the PhpJasperLibrary
include_once('PHPJasperXML/tcpdf/tcpdf.php');
include_once("PHPJasperXML/PHPJasperXML.inc.php");
 
 
//database connection details
 
$opc=$_GET["opc"];
$orden=$_GET["orden"];

$server="localhost\sqlexpress";
$db="sistema";
$user="sa";
$pass="123";
$version="0.9d";
$pgport=5432;
$pchartfolder="./class/pchart2";
$cndriver="sqlsrv";
 
 
//display errors should be off in the php.ini file
ini_set('display_errors', 0);
//setting the path to the created jrxml file



   $xml =  simplexml_load_file("report2.jrxml");
   $PHPJasperXML = new PHPJasperXML();
   //$PHPJasperXML->debugsql=true;
   $PHPJasperXML->xml_dismantle($xml);
   $PHPJasperXML->transferDBtoArray($server,$user,$pass,$db,$cndriver);
   $PHPJasperXML->outpage("I");    //page output method I:standard output  D:Download file


 
/*
   $xml =  simplexml_load_file("report2.jrxml");
   $PHPJasperXML = new PHPJasperXML("en","XLS"); 
   //$PHPJasperXML->debugsql=true; 
   //$PHPJasperXML->arrayParameter=array("parameter1"=>$orden); 
   $PHPJasperXML->xml_dismantle($xml);
   //$PHPJasperXML->load_xml_file("report1.jrxml"); 
   $PHPJasperXML->transferDBtoArray($server,$user,$pass,$db,$cndriver);
   $PHPJasperXML->outpage("I","report1.xls");    
*/


?>

