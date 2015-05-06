<?php

echo "Listing Product on Amazon";

echo $this->element('modal', [
    'title' => $title,
    'body' => $body,
]);


echo "<pre>" . print_r($productdata, TRUE) . "</pre>";

?>

<a href="#" data-toggle="modal" data-target="#help"><i class="fa fa-info-circle fa-fw"></i> Post Listing </a>
