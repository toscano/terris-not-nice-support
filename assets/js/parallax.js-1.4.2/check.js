//THIS SECTION IS FOR COUNTER
$(document).ready(function () {
    var x= $('.counter').counterUp({
        offset: 200,
        delay: 10,
        time: 1000
    });
    withinviewport(x);
});
