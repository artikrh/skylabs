function picofday() {
    var url = "https://api.nasa.gov/planetary/apod?api_key=6MvORAOImaQOhDlAKGMyviZGDYqvtBRet5YRWZBq";

    $.ajax({
        url: url,
        success: function(data) {
                var header = $('#home-bg-img')[0];
                $(header).css('background-image', 'url(' + data.url + ')');
        },
        error: function () {
            $(header).css('background-image', 'url("img/home-bg.jpg")');
        }
    });

}

