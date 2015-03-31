<h3 class="subheader"> Users </h3>

<?php 
foreach($names as $user) {
    echo "<li>" . $user->first_name . " " . $user->last_name . "</li>";
}