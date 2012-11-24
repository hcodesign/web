<h1> Hello PHP! </h1>

<?php
$message = "<p>I'm getting good with PHP  .</p>";
echo $message;?>

<?php
$friends = array("Watson", "Mycroft", "Sherlock", "Lestrade");
echo "<ul>";
for ($i = 0, $length = count($friends); $i < $length; $i++) {
echo "<li> $friends[$i] </li>";
}
echo "</ul>";

?>

<?php
$person = array(
"name" => "Sherlock Holmes",
"job" => "Private Detective",
"birthdate" => "January 6, 1854"
);
echo "<ul>";
foreach($person as $value) {
echo "<li>$value</li>";
}
echo "</ul>";
?>

<?php
include "friends.php";
echo $friend; # or, you can put the switch statement from above here.
?>




<?php
$friend = "Mycroft";
if ($friend === "Watson"): ?>
<p>Hello, Watson.</p>
<?php elseif ($friend === "Mycroft"): ?>
<p>Hey, Mycroft! How are you?</p>
<?php else: ?>
<p>Hi!</p>
<?php endif; ?>


<?php  
$person = array("name" => "Sherlock Holmes", "job" =>
"detective");
echo "<pre>";
print_r($person);
echo "</pre>";
?>