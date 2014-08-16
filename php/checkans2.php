<?php

session_start();
include "dbcn.php";

$uid=$_COOKIE['user1'];
  
$query="select* from rank where ucode='$uid';";
$result=mysql_query($query); 
$row=mysql_fetch_row($result);
	
$q=$row[2];

$k="none";

switch($q)
{
	case 1: $k="trickster";
	       break;
	case 2: $k="thesatanicverses";
			break;
	case 3: $k="charliebitmyfinger";
			break;
	case 4: $k="110000";
	       break;
	case 5: $k="luigimario";
	       break;
	case 6: $k="2658455991569831744654692615953842176";
	       break;
	case 7: $k="maverick";
	       break;
	case 8: $k="kingofhearts";
	       break;
	case 9: $k="france";
		       break;
	case 10: $k="timothythomaspowers";
	       break;
	case 11: $k="revolution2020lovecorruptionambition";
	       break;
	case 12: $k="whitebookofsanen";
	       break;
	case 13: $k="junkofuruta";
	       break;
	case 14: $k="282";
	       break;
	case 15: $k="pokerstarpaparazzitelephone";
	       break;
	case 16: $k="qingdynasty";
	       break;
	case 17: $k="johnhenrybonham";
	       break;
	case 18: $k="jabaltariq";
	       break;
	case 19: $k="nigel";
	       break;
	case 20: $k="michaeljordan";
	       break;
	case 21: $k="1318514";
	       break;
	
		
}



?>