// JavaScript Document
$(document).ready(function(e) {
	var apikey = 'a849ef2711893821f90d4dced5e9a0d3';
    var userid = '127040723@N04';
    var url = 'https://api.flickr.com/services/rest/?method=flickr.people.getPublicPhotos&api_key=' + apikey + '&user_id='+userid+'&format=json&nojsoncallback=1';
	$.getJSON(url,

    function (data) {
        $.each(data.photos.photo, function (i, item) {
            var purl = 'http://farm' + item.farm + '.static.flickr.com/' + item.server + '/' + item.id + '_' + item.secret + '_m.jpg';
            var pid = item.id;
            var container = '<li><img class="span4" alt="' + item.title + '" src="' + purl + '"/> </li>';
            $(container).appendTo('#flickr');
        });
    });
});