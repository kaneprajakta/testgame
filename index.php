<?php

echo "Welcome to Lucky 7 Game<br>";
// roll the dice
// choose the bet
// update balance
echo "Place your bet(Rs 10):<br>";
echo "b: below 7, 7 for 7 , a:Above 7";
?>
<form name="frmGame" id="frmGame" action="./place.php" method="POST">
<input type="text" id="bet_id" name="bet_id">
Is Reset? (Y/N) <input type="text" id="isReset" name="isReset">
<input type="submit" id="btnPlace" value="Place">
</form>
