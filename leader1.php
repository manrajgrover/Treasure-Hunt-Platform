<?php 
include 'php/header.php';
include 'connection.php';
?>
<div id="leaderwrap">
<button onclick="window.open('https://www.facebook.com/sharer/sharer.php?u='+encodeURIComponent('http://nsit-innovision.com/enigmata/leader.php'),'facebook-share-dialog', 'width=626,height=436');">Share Your Stats</button>
<div id="huge">Leaderboard
<?php if(isset($_GET['w']) && $_GET['w'] == 1) echo '<br>Congrats!'; ?></div>
<?php
$connection=connect();
$query="select * from users ORDER BY level DESC,timestampcl ASC";
$check=mysqli_query($connection,$query) ;
echo '<table style="color:white;border-collapse:collapse" border="1" align="center"><thead><tr><th>Rank</th><th>Name</th><th>College</th><th>Level</th></tr></thead><tbody>';
$i=1;
while($result=mysqli_fetch_array($check,MYSQLI_ASSOC)) {
 echo '<tr><td>'.$i.'</td><td>'.htmlspecialchars($result['name']).'</td><td>'.htmlspecialchars($result['college']).'</td><td>'.htmlspecialchars($result['level']).'';
	$i++;
}
echo '</tbody></table>';
?>
</div>
</body>
</html>

