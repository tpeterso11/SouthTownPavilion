<?php
$background = "Images/test-back.png";

?>
<div id="calendar" class="new-page">
<h1 class="month"><?php echo date('F Y'); ?></h1>
<ul id="events">
<?php foreach($eventPost as $event){
	if ($event['date'] === date('F Y')){
	echo "<li class='event'>";
	echo "<span class='event-name buzz-out'>";
	echo $event['name'];
	echo "</span>";
	echo "<span class='event-info'>";
	echo $event['event-info'];
	echo "</span>";
	echo "</li>";
};
};
?>

</ul>
<p id="clicker">For more information, hover mouse over event.
</div>