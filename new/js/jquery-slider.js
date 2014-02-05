jQuery(document).ready(function($) {
    $('#banner-fade').bjqs({
        'height' : 320,
        'width' : 620,
        'responsive' : true
    });
});

// width and height need to be provided to enforce consistency
// if responsive is set to true, these values act as maximum dimensions
width : 700,
height : 300,

// animation values
animtype : 'fade', // accepts 'fade' or 'slide'
animduration : 450, // how fast the animation are
animspeed : 4000, // the delay between each slide
automatic : true, // automatic

// control and marker configuration
showcontrols : true, // show next and prev controls
centercontrols : true, // center controls verically
nexttext : 'Next', // Text for 'next' button (can use HTML)
prevtext : 'Prev', // Text for 'previous' button (can use HTML)
showmarkers : true, // Show individual slide markers
centermarkers : true, // Center markers horizontally

// interaction values
keyboardnav : true, // enable keyboard navigation
hoverpause : true, // pause the slider on hover

// presentational options
usecaptions : true, // show captions for images using the image title tag
randomstart : true, // start slider at random slide
responsive : true // enable responsive capabilities (beta)