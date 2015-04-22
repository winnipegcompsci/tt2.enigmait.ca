<script>
if (!!window.EventSource) {
    var source = new EventSource('task.php');
     
    source.addEventListener('message', function(e) 
    {
        console.log(e.data);
        //Do whatever with e.data
    }, false);
}
</script>