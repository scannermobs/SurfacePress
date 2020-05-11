jQuery(document).foundation()
/*
These functions make sure WordPress
and Foundation play nice together.
*/
jQuery(document).ready(function(){// Remove empty P tags created by WP inside of Accordion and Orbit
jQuery('.accordion p:empty, .orbit p:empty').remove()// Adds Flex Video to YouTube and Vimeo Embeds
jQuery('iframe[src*="youtube.com"], iframe[src*="vimeo.com"]').each(function(){if(jQuery(this).innerWidth()/jQuery(this).innerHeight()>1.5){jQuery(this).wrap("<div class='widescreen responsive-embed'/>")}else{jQuery(this).wrap("<div class='responsive-embed'/>")}})})
jQuery('main table').wrap('<div class="table-scroll" />')

$=jQuery

//////////////////////////////////////////////////////////
//      		State for mobile menu button

$(function(){
	$('#mobile-menu-button').click(function(){
		$(this).children().toggleClass('hide')
	})
})

//////////////////////////////////////////////////////////
//      		Adds clear buttons to search fields

$(function(){
	$('input[type=search]').wrap('<span class="deleteicon" />').after($('<span/>').click(function() {
    $(this).prev('input[type=search]').val('')
	}))
})

//////////////////////////////////////////////////////////
//							Lightbox

$(function(){
	if($('.wp-block-gallery').length){
		var modal = '<div class="reveal full" id="gallery-modal" data-reveal> \
									<figure></figure>\
									<button class="close-button" data-close aria-label="Close modal" type="button"> \
										<span aria-hidden="true">&times;</span> \
									</button> \
								</div>'
		var reveal = new Foundation.Reveal($(modal))
		$('.wp-block-gallery a').click(function(event){
			event.preventDefault()
			var img = $(this).find('img').clone()
			$('#gallery-modal figure img').remove()
			$('#gallery-modal figure').prepend(img)
			$('#gallery-modal').foundation('open')
		})
	}
})

//////////////////////////////////////////////////////////
//      		Template to copy and edit

$(function(){

})
