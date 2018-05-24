<?php
$this->load->view('header2');
?>
<?php

echo "<h2>".$info['title']."</h2>";
echo "<img src='/uploads/".$info['img']."' />";
echo "<strong>".$info['text']."</strong>";

?>
<?php
$this->load->view('footer2');
?>