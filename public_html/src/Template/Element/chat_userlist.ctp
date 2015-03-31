<h3 class="subheader"> Users </h3>

<ul>
<?php 
foreach($names as $key => $name) {
    error_log("Key:: " . $key); 

    echo "<a href=" . $this->Url->build(['controller' => 'Users', 'action' => 'view', ]) . ">";
    echo "<li><i class=\"fa fa-user fa-fw\"></i>"  . $name . "</li>";
    echo "</a>";
}
?>
</ul>