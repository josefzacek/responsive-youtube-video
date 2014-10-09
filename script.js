jQuery( document ).ready(function($) {

		// wrap ifame in div
		$( "iframe" ).wrap( "<div class='youtube-video'></div>" );

		//resize youtube video
		$(".youtube-video").fitVids();
});
