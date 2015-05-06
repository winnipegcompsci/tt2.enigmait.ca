<?php

echo "Listing Product on Amazon";
<a href="#" data-toggle="modal" data-target="#modal"><i class="fa fa-info-circle fa-fw"></i> About </a>


echo $this->element('modal', [
    'title' => $title,
    'body' => $body,
]);