<h3 class="subheader"> Users </h3>

<ul>
<?php 
foreach($names as $key => $name) {
    echo "<a href=" . $this->Url->build(['controller' => 'Users', 'action' => 'view', $key]) . ">";
    echo "<li><i class=\"fa fa-user fa-fw\"></i>"  . $name . "</li>";
    echo "</a>";
}
?>
</ul>