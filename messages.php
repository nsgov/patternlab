<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>NSGov UI Pattern Library</title>
<link rel="stylesheet" href="global.css">
<link rel="stylesheet" href="css/saltire.css">
<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">

<style>
.pattern {
    clear: both;
    overflow: visible;
    display: block;
    padding-top: 1em;

}
.pattern .display {
    width: 65%;
    float: left;
}
.pattern .source {
    width: 30%;
    float: right;
}
.pattern .source textarea {
    width: 90%;
}

</style>
</head>
<body>

<div class="pattern-container">
<h1>Province of Nova Scotia UI Pattern Library</h1>

<h2>Messages/Feedback</h2>

<p>These blocks are used to provide action based feedback or communicate critical information.</p>

<p>There are four different kinds:</p>

<ul>
  <li>Success (green): if a user action was successful, or if a program or service is now open or available.</li>
  <li>Warning (yellow): if a user action was only partially successful, or if a program or service is now closed.</li>
  <li>Error (red): if a user action has failed</li>
  <li>Information (blue): for basic information related to the user task.</li>
</ul>

<!-- MESSAGES AND FEEDBACK -->

<?php
$feedbacks = array();
$handle=opendir('feedback');
while (false !== ($feedback = readdir($handle))):
    if(stristr($feedback,'.html')):
        $feedbacks[] = $feedback;
    endif;
endwhile;
sort($feedbacks);

?>
<h2 class="section">Messages and feedback patterns</h2>
<?php
foreach ($feedbacks as $feedback):
    echo '<div class="pattern">';
    echo '<div class="display">';
    include('feedback/'.$feedback);
    echo '</div>';
    echo '<div class="source">';
    echo '<textarea rows="6" cols="30">';
    echo htmlspecialchars(file_get_contents('feedback/'.$feedback));
    echo '</textarea>';
    echo '<p><a href="feedback/'.$feedback.'">'.$feedback.'</a></p>';
    echo '</div>';
    echo '</div>';
    echo '<div style="clear:both; margin: 1.5em auto;"><hr /></div>';
endforeach;
?>


</div>


	<script src="js/script.min.js"></script>
</body>
</html>