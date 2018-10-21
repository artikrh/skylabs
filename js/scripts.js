function getlaunches() {

}

function picofday() {
    $.get("https://api.nasa.gov/planetary/apod?api_key=DEMO_KEY", function (data) {
        var header = $('#home-bg-img')[0];
        $(header).css('background-image', 'url(' + data.url + ')');

    });

}

picofday();