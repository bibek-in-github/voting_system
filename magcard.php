<html>
<head><link rel="stylesheet" type="text/css" href="msgCard.css"></head>
<div class="MsgCard <?php if(isset($_SESSION['addedMsg'])) echo "showCard"?>">
    <p class="msg"><?php echo $_SESSION['addedMsg']; session_unset();?></p>
    <button class="crossBtn">X</button>
</div>
</html>