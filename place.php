<?php
session_start();
$_SESSION['dice1'] = roll_dice();
$_SESSION['dice2'] = roll_dice();
$_SESSION['total'] = $_SESSION['dice1'] + $_SESSION['dice2'];
 
$inpBet = $_POST['bet_id'];
$isReset = $_POST['isReset'];
if($isReset =='Y'){
    $start = 100;
}else if($isReset == 'N'){
    $start = $_SESSION['balance'];
}

$_SESSION['start'] = 100;

if($inpBet == 7){
    if($_SESSION['total'] == 7){
        $_SESSION['msg'] = "Congratulations ! You won the game! Balance :". $start +20;
        $_SESSION['balance'] = $start +20;
    }else{
        $_SESSION['msg'] = "Sorry! Balance". $start -10;
        $_SESSION['balance'] = $start -10;
    }
}else if($inpBet == 'a'){
    if($_SESSION['total'] > 7){
        $_SESSION['msg'] = "Congratulations ! You won the game!Balance :". $start +10;
        $_SESSION['balance'] = $start +10;
    }else{
        $_SESSION['msg'] = "Sorry ! Balance". $start -10;
        $_SESSION['balance'] = $start -10;
    }
}else if ($inpBet == 'b'){
    if($_SESSION['total'] < 7){
       $_SESSION['msg'] = "Congratulations ! You won the game!Balance : ". $start+10;
       $_SESSION['balance'] = $start +10;
    }else{
        $_SESSION['msg'] = "Sorry ! Balance". $start -10;
        $_SESSION['balance'] = $start -10;
    }
}else{
    echo "Invalid input";
}

function roll_dice(){
    return rand(1,6);
}

?>

<div id="result" name="result">
    Game Results <br>
    Dice1: <div id="dice1"> <?php echo $_SESSION['dice1'];?> </div> 
    Dice2: <div id="dice2"> <?php echo $_SESSION['dice2'];?></div> 
    Total: <div id="total"> <?php echo $_SESSION['total'];?></div> 
    <?php echo $_SESSION['msg'];?>
</div>

