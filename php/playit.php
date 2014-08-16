<?php
ob_start();
ob_start();

echo '<script type="text/javascript">
      
	  function setzero()
	  {
		document.getElementById("wron").innerHTML="";  		  
	  }
 
      </script>
      ';

?>
<link rel="stylesheet" href="style.css" type="text/css" />

<?php

include "dbcn.php";

session_start();

if(isset($_COOKIE['user1']))
{
  $uid=$_COOKIE['user1'];
  
  $query="select* from rank where ucode='$uid';";
  $result=mysql_query($query); 
  $row=mysql_fetch_row($result);
	
  $qu=$row[2];
  
  echo "<body style=\"background-image: url(bodmas.jpg); background-size:100%;\">
    
    ";
  
  echo "<div style=\"height:40px\" align=\"right\">
        <a id=\"link\" href=\"playit.php\">HOME</a>
        <a id=\"link\" href=\"http://www.facebook.com/#!/pages/Bodmas12/310746298977329\" target=\"_blank\">FORUM</a>
		<a id=\"link\" href=\"leader.php\">LEADERBOARD</a>
		<a id=\"link\" href=\"logout.php\">LOGOUT</a>  
        </div><br />
        ";
   
  echo "<div align=\"center\">
        <a href=\"index.php\"><img src=\"Blurred.jpg\" height=\"25%\" width=\"18%\"></a>
		</div> 
		 ";

  echo "<div align=\"center\"><h1>event will start soon</h1></div>";
 
 	switch($qu)
  {

	case 1  : echo'<title>level 1</title><div align="center" style=" padding:5%;"><h1>Digital overlapping</h1><h2>Club Member numbers are on the transparent badges.                   Two badges are overlaid, making what looks like </h2>
	               <img src="lvl1.png" /><br />
				   <h2>Neither badge has 8 and 9 as digits. Both numbers are non-squares and their sum is also 89. What are the two badges numbers?<br /> 
                   Enter the badges numbers in decreasing order.</h2>
				   </div> ';
			  break;
			  
    case 2 : echo "<title>level 2</title><div align=\"center\"><h2><br />A number when divided by 2,3,4,....16 gives remainder 1,2,3,...15 respectively.<br /> Give                    me the smallest                   possible number.</h2>
	               </div>";
				   break;
	
	case 3: echo"<title>level 3</title><div align=\"center\"><h2><br /><img src=\"lvl3.png\" /><br />3 numbers are chosen from the above set such that they are in G.P.
                 <br />Find the total no. of  possible sub-sets.</h2>
	             </div>	";
	             break;
	             
	case 4: echo"<title>level 4</title><div align=\"center\"><h2><img src=\"lvl4.png\" /><br />If we consider terms in this order {1/1 , 1/2, 2/1, 3/1, 2/2, 1/3,                  1/4 .......}
                 i.e.    Moving diagonally with changing directions.<br />
                 Then find the 4444th term of the series.<br /><br />
                 <font color=\"#FF0000\">Note: If your answer is 7/12, 712 should be entered.</font></h2>
	             </div>	";
				 break;
	
	case 5: echo"<title>level 5</title><div align=\"center\"><h2><br />Using the digits 1,1,2,3,4,5,6,7.<br />
                 Find the sum of all possible four digit numbers</h2>
	             </div>	";
				 break;
	
	case 6: echo"<title>level 6</title><div align=\"center\"><h2>There are two numbers whose sum equals their product.<br /> That is, they give the                 same                 result whether you add them together or multiply them together.<br /> For example 2 and 2. If one of the number is 987,654,321 , find the other                 number satisfying the above mentioned number.<br />
	             <font color=\"#FF0000\">Note: If your answer is 7/12, 712 should be entered.</font>
	             </div>	";
				 break;
	
	case 7: echo"<title>level 7</title><div align=\"center\"><h2>A series goes as follows: 0, 2, 12, 36, 80, 150 and so on....<br />
                 Find the 123rd term?</h2>
	             </div>	";
				 break;
				 
	case 8: echo"<title>level 8</title><div align=\"center\"><h2><br />In the year 1911 there were two dates which, written in a well-known manner,<br /> the day multiplied by the                  month will equal the year.<br /> These are 11/1/11 and 1/11/11. In which year of the century- 1901-2000,<br /><br />these type of dates  occur maximum number of                  time?</h2>
	             </div>	";
                 break;
                   	
	case 9: echo"<title>level 9</title><div align=\"center\"><h2><br />Lallan and Mulley were best of friends.  Lallan, one day browsing through his bank credentials, noticed                 that a check no. had a peculiar feature. He noticed that the number reversed itself when multiplied with four. In an attempt to amaze his friend                  and show off his newly acquired mathematical ingenuity, he placed a wager with Mulley over finding two no.s, the largest and the smallest possible                  16 digit numbers showing this property?  <br />
                 Help Mulley to win the wager!<br />
				 <font color=\"#FF0000\">Answer format: if the ans is 123 and 987 the submit 123987</font>
	             </div>	";
				 break;
	
	case 10: echo"<title>level 10</title><div align=\"center\"><h2><br />[4  9  19  14]	[9  20  42  31]    [21  43  89  67]       [38  78 160 120]	 [ ?] 	[113  234  474                    353]<br />
                  Find the missing set of 4 terms. In answer no space should be present nor parenthesis.</h2>
                <br />
	             </div>	";
				 break;
				 
	case 11: echo"<title>level 11</title><div align=\"center\"><h2><br />[x] denotes the greatest integral part of x.<br /> For example [2.3]=2, [-7]= -7, [6] =6. If y is a positive                  integer satisfying the condition:<br />
                  [y/ 99] = [y/101]<br />
                  Then calculate the number of solutions.<br /></h2>
                  </div>	";
				  break;
				 
	case 12: echo"<title>level 12</title><div align=\"center\"><h2><br />A number system with base 10 has terms A,B,C,D,....J ,where A and J represents 1and 0 (of decimal                   number system)    respectively. If<br />
                  HI*GF=DHJFFC<br />
                  DC*BD=AFJCJF<br />
                  EE*FH=DJJFCJ<br />
                  Then calculate II*GG.
	              </div>	";
				  break;
				 
	case 13: echo"<title>level 13</title><div align=\"center\"><h2><br />For all those \"Italian Job\" fans, here is a code sequence that unlocks a bank safe holding millions                   of dollars' worth gold.The code sequence goes as follows:<br /><br />
                  6579/4/1024/5922/A/1126/B/9/1238/4797/13.5/C<br/> and so on....<br />
                  So, all that stands between you and all the gold is A, B and C. find them!!<br /></h2>
	             </div>	";
				 break;
				 
	case 14: echo"<title>level 14</title><div align=\"center\"><h2><br />A number when successively divided (quotient of 1st division is taken as dividend in the 2nd                   division) by 7, 11 and 13<br /> gives remainder 3, 4 and 5 respectively. If the same number is successively divided in<br /> reverse order i.e. by 13, 11 and                   then by 7, what                   would be the 3 remainders?</h2>
	             </div>	";
				 break;
				 
				 
	case 15: echo"<title>level 15</title><div align=\"center\"><h2><br/>India and Pakistan manage to enter the finals of the world cup. The match reaches climax when in the                   last over, India requires 10 runs to win. Nevertheless, India manages to win the match and the series. Knowing that all the runs were scored off                   the bat, with a maximum of 2 runs per ball except exactly one four hit by the indian batsman in the over, and India manages to win on the last                    ball, find the no. of ways India bagged the trophy?</h2>
	               </div>	";
				   break;
				 
	case 16: echo"<title>level 16</title><div align=\"center\"><h2><br/>A eight degree polynomial function F(x) gives the values 2, 10, 30, 68 ....., 520  at x equal to 1, 2,                  3, ... ,8<br />
                  Find F(9) if F'(1)= -7!+4.</h2>
	              </div>	";
				  break;
				 
	case 17: echo"<title>level 17</title><div align=\"center\"><h2><br />A cheese cube has the dimensions 3,125 and it has to be reduced into smaller cubes of dimension 1.       <br/>           Find the minimum possible no. of cuts that can achieve this.<br /></h2>
	              </div>	";
				  break;
				 
	case 18: echo"<title>level 18</title><div align=\"center\"><h2><br />A table contains nos 52, 54, 56 upto 100. The uniqueness of this table is such that the sum of each                  row is equal not only to one another but also to that of each column and the two diagonals. Enter the missing terms row wise without any space
	              <br /><img src=\"lvl18.png\" /></h2>
				  </div>	";
				  break;
				 
	case 19: echo"<title>level 19</title><div align=\"center\"><h2><br />FIND THE MISSING TERM IN SEQUENCE: <br />
                  HPXF   IOVO   JNRV   LLJB   OITG    ?    BVBR    OIDA .........</h2>
 	             </div>	";
				 break;
	
	case 20: echo"<title>level 20</title><div align=\"center\"><h2><br />1000 convicts are seated on chairs around a circular table. These chairs are bearing numbers from 1-                  1000. The convicts are brought for their capital punishment. The executioner decides a pattern to kill the convicts. He calls upon every 2nd                  convicts (i.e. he starts executing in the order 2.4.6....) and kills him.<br />
                  What was the chair number of the 999th convict to be executed?</h2>
	              </div>	";
				  break;
				  
        case 21: echo"<title>level 21</title><div align=\"center\"><h2><br />If <br /> 2 + 1 = 3<br /> 5 + 7 = 5<br /> 11 + 3 = 9 <br /> then what is 12345678 + 98765432 ? </div> ";
           break;
        case 22: echo"<title>level 22</title><div align=\"center\"><h2> <br />Find the 20th term of the series<br /><pre> 2   19   88   282   748   2021 </pre><br />  </div> ";
           break;

	case 23: echo "<title>congrats</title><div align=\"center\"><h1>";
	        die("congratulations you have completed BODMAS");
         break;
	
  }

        echo'<div align="center">';
		
		echo '<form action= "checkans.php" method="post">
		Your Answer  
		<input type="text" name= "ans" onkeyup="setzero()"><br /><br /><br />
		<input type ="submit" value ="Submit Your Answer"></form>
		<br /><span id="wron">';
		
		if(isset($_GET['l'])){
			
			$i=$_GET['l'];
			if($i==1)
			echo"<h3>wrong answer entered</h3>";					
			}
		
		echo '</span><br />
		</div></div>';
				
	}

else
{ header('location:index.php');}

?>
<?php
ob_end_flush();
ob_end_flush();
?>