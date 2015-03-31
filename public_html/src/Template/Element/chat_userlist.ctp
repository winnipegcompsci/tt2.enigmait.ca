<h3 class="subheader"> Users </h3>

<?php 
foreach($names as $user) {
    echo  "<pre>" . print_r($user, TRUE) . "</pre>";
}