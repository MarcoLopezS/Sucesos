(function() {

    // store the slider in a local variable
    var $window = $(window),
        flexslider = { vars:{} };

    // tiny helper function to add breakpoints
    function getGridSize() {
        return (window.innerWidth < 600) ? 1 :
            (window.innerWidth < 900) ? 2 : 4;
    }

    $window.load(function() {
        $('.flexslider').flexslider({
            animation: "slide",
            animationLoop: true,
            controNav: false,
            itemWidth: 210,
            itemMargin: 5,
            minItems: getGridSize(), // use function to pull in initial value
            maxItems: getGridSize() // use function to pull in initial value
        });
    });

    // check grid size on resize event
    $window.resize(function() {
        var gridSize = getGridSize();
        flexslider.vars.minItems = gridSize;
        flexslider.vars.maxItems = gridSize;
    });
}());
//# sourceMappingURL=flexslider.js.map
