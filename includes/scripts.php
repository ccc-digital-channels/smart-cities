<script src="js/jquery-1.11.2.min.js"></script>
<!--<script src="js/jquery.mobile-1.4.5.min.js"></script> -->
<script src="js/moment.js"></script>


<script>
    //Dom ready
    $(window).load( function() {
        updateTFC();
    });

    //disable on click hash jumps
    $($('nav > ul').find('a')).on('click', function() {
        return false;
    })
</script>