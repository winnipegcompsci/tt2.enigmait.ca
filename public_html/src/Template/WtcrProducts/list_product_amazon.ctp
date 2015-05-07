<?php

echo "Listing Product on Amazon";

$formbody = $this->Form->create();
$formbody .= $this->Form->input('asin');
$formbody .= $this->Form->input('name');
$formbody .= $this->Form->input('price');
$formbody .= $this->Form->end('Submit to Amazon');



echo $this->element('modal', [
    'title' => $title,
    'body' => $formbody,
]);


foreach($productdata as $product) {
    echo "<pre>" . print_r($product->properties, TRUE) . "</pre>";
}

?>

<a href="#" data-toggle="modal" data-target="#help"><i class="fa fa-info-circle fa-fw"></i> Post Listing </a>
