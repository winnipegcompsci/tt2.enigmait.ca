<?php

echo "Listing Product on Amazon";



echo $this->element('modal', [
    'title' => $title,
    'body' => $body,
]);

?>


<a href="#" data-toggle="modal" data-target="#help"><i class="fa fa-info-circle fa-fw"></i> About </a>
