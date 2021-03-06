jQuery(document).foundation()
/*
These functions make sure WordPress
and Foundation play nice together.
*/
jQuery(document).ready(function(){// Remove empty P tags created by WP inside of Accordion and Orbit
jQuery('.accordion p:empty, .orbit p:empty').remove()// Adds Flex Video to YouTube and Vimeo Embeds
jQuery('iframe[src*="youtube.com"], iframe[src*="vimeo.com"]').each(function(){if(jQuery(this).innerWidth()/jQuery(this).innerHeight()>1.5){jQuery(this).wrap("<div class='widescreen responsive-embed'/>")}else{jQuery(this).wrap("<div class='responsive-embed'/>")}})})
jQuery('main table:not(.variations)').wrap('<div class="table-scroll" />')

$=jQuery

//////////////////////////////////////////////////////////
//      					isAfter function

$(function(){
	$.fn.isBefore= function(sel){
		return this.nextAll().filter(sel).length !== 0
	}
	$.fn.isAfter = function(sel){
		return this.prevAll().filter(sel).length !== 0
	}
})

//////////////////////////////////////////////////////////
//      		State for mobile menu button

$(function(){
	$('#mobile-menu-button').click(function(){
		$(this).children().toggleClass('hide')
		$(this).children().removeClass('show-for-sr')
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
	setupGal()
	window.onresize = function(event) {
		setupGal()
	}
	function setupGal(){
		$('.lightbox-link').removeClass('lightbox-link')
		$('.woo-product .woocommerce-product-gallery__image').addClass('wp-block-image')
		if($('.wp-block-gallery a, .wp-block-image a').length){
			var modal = '<div class="reveal full" id="gallery-modal" data-reveal> \
										<figure></figure>\
										<button class="arrows prev" aria-label="Previous image"><i class="fas fa-chevron-left"></i></button>\
										<button class="arrows next" aria-label="Next image"><i class="fas fa-chevron-right"></i></button>\
										<button class="close-button" data-close aria-label="Close modal" type="button"> \
											<span aria-hidden="true">&times;</span> \
										</button> \
									</div>'
			var reveal = new Foundation.Reveal($(modal))
			$('.wp-block-gallery a, .wp-block-image a').each(function(){
				var img = $(this).find('img').attr('src')
				if($(this).attr('href', img)){
					$(this).addClass('lightbox-link')
					// Above is the class which disables the system for mobile,
					// remove if not wanted, or check the corresponding css rule to adjust.

					// Below is the width check, which can be edited or removed.
					// By default the lightbox works for tablets up.
					if($(window).width() >= 768){
						$(this).click(function(event){
							doGal(this)
						})
					}
				}
			})
		}
	}
	function doGal(elem){
		event.preventDefault()
		$('#gallery-modal').foundation('close')
		var img = $(elem).find('img').clone()
		var cap = $(elem).parent().find('figcaption').clone()
		$('#gallery-modal figure figcaption').remove()
		if(cap.length){
			$('#gallery-modal figure').prepend(cap)
		}
		$('#gallery-modal figure img').remove()
		$('#gallery-modal figure').prepend(img)
		$('#gallery-modal').foundation('open')
		if(!$(elem).parents('.wp-block-image').length){
			if($(elem).parentsUntil('.blocks-gallery-grid').prev().length){
				$('#gallery-modal .prev').removeClass('hide')
			} else {
				$('#gallery-modal .prev').addClass('hide')
			}
			if($(elem).parentsUntil('.blocks-gallery-grid').next().length){
				$('#gallery-modal .next').removeClass('hide')
			} else {
				$('#gallery-modal .next').addClass('hide')
			}
		} else{
			$('#gallery-modal .prev, #gallery-modal .next').addClass('hide')
		}
	}
	$('#gallery-modal .prev').click(function(elem){
		doGal($('.blocks-gallery-grid img[src="'+$('#gallery-modal img').attr('src')+'"]').parentsUntil('.blocks-gallery-grid').prev().find('a'))
	})
	$('#gallery-modal .next').click(function(elem){
		doGal($('.blocks-gallery-grid img[src="'+$('#gallery-modal img').attr('src')+'"]').parentsUntil('.blocks-gallery-grid').next().find('a'))
	})
	$(document).keydown(function (e){
		if($('#gallery-modal').attr('aria-hidden') == 'false'){
			if(e.which == 37){ // left arrow
				if(!$('#gallery-modal .prev').hasClass('hide')){
					doGal($('.blocks-gallery-grid img[src="'+$('#gallery-modal img').attr('src')+'"]').parentsUntil('.blocks-gallery-grid').prev().find('a'))
				}
			}
			else if(e.which == 39){    // right arrow
				if(!$('#gallery-modal .next').hasClass('hide')){
					doGal($('.blocks-gallery-grid img[src="'+$('#gallery-modal img').attr('src')+'"]').parentsUntil('.blocks-gallery-grid').next().find('a'))
				}
			}
		}
	})
	$('#gallery-modal figure').click(function(event){
		$('#gallery-modal').foundation('close')
		event.stopPropagation()
	})
})

//////////////////////////////////////////////////////////
//   		Accessibility stylesheet cookie machine

$(function(){

	// Contrast cookie
	if (Cookies.get('contrast')){
		$('body').attr('data-cookie-contrast', Cookies.get('contrast'))
	} else{
		Cookies.set('contrast','standard')
		$('body').attr('data-cookie-contrast', Cookies.get('contrast'))
	}

	// Text cookie
	if (Cookies.get('text')){
		$('body').attr('data-cookie-text', Cookies.get('text'))
	} else{
		Cookies.set('text','standard')
		$('body').attr('data-cookie-text', Cookies.get('text'))
	}

	// Contrast function
	$('#contrast').find($('[value="' + Cookies.get('contrast') + '"]')).attr('checked', 'checked')

	$('#contrast input').click(function(){
		var value = $(this).val()
		Cookies.set('contrast', value)
		$('body').attr('data-cookie-contrast', Cookies.get('contrast'))
	})

	// Text function
	$('#text').find($('[value="' + Cookies.get('text') + '"]')).attr('checked', 'checked')

	$('#text input').click(function(){
		var value = $(this).val()
		Cookies.set('text', value)
		$('body').attr('data-cookie-text', Cookies.get('text'))
	})
})

//////////////////////////////////////////////////////////
//								Show more

$(function(){
	if($('span[id^=more-]').length){
		$('span[id^=more-]').each(function(){
			var readMore = $(this)
			var list = readMore.parent('div')
			list.children().each(function(){
				if($(this).isAfter(readMore)){
					$(this).addClass('show-for-sr')
				}
			})
			$('<span class="show-more-wrap"><span class="show-more" data-toggle>Show more &nbsp;&nbsp;<i class="fas fa-chevron-down"></i></span></span>').insertAfter($(this))
			$(this).next('.show-more-wrap').children('.show-more').click(function(e){
				e.preventDefault()
				$(this).parents().nextAll().removeClass('show-for-sr')
				$(this).addClass('show-for-sr')
			})
		})
	}
})

//////////////////////////////////////////////////////////
//							Main nav drop-down

$(function(){
	function doMenu(){
		$('#mainnav .menu-toggle').remove()
		$('#mainnav').css('padding-bottom', 1)
		if($(window).width() > 640){
			function menuShow(elem){
				var li = elem.parent()
				$('#mainnav > li').not(li).removeClass('show')
				$('#mainnav .menu-toggle').not(elem).removeClass('show')
				$(elem).toggleClass('show')
				var x = li.position().left
				var w = $('#mainnav').innerWidth()
				var ul = $(elem).siblings('ul')
				$('#mainnav > li > ul').not(ul).addClass('show-for-sr')
				$(elem).siblings('ul').css({
					'left': 0,
					'width': 0
				})
				$(elem).siblings('ul').toggleClass('show-for-sr').css({
					'left': '-'+x+'px',
					'width': w
				})
				if($(elem).hasClass('show')){
					var h = li.children('ul').innerHeight()
					$('#mainnav').css('padding-bottom', h)
				} else {
					$('#mainnav').css('padding-bottom', 1)
				}
				//if(li.is('.active, .current-menu-ancestor, .current-page-ancestor')){
					li.toggleClass('show')
				//}
			}
			$('#mainnav > li > ul').addClass('show-for-sr')
			$('<span class="menu-toggle"><i class="fas fa-chevron-down"></i></span>').insertBefore('#mainnav > li > ul')
			$('#mainnav > li .menu-toggle').click(function(event){
				event.stopPropagation()
				menuShow($(this))
			})
			$('#mainnav li a').click(function(event){
				event.stopPropagation()
			})
			$('.off-canvas-content').click(function(){
				if($('#mainnav li.show').length){
					menuShow($('#mainnav .show'))
					$('#mainnav .show').removeClass('show')
				}
			})
			// For tabbing through links
			// Would be nice to make this work properly when you shift+tab (go backwards)
			// Do it as a function? https://stackoverflow.com/questions/1359018/how-do-i-attach-events-to-dynamic-html-elements-with-jquery
			var down = false
			$(document).mousedown(function() {
				down = true
			}).mouseup(function() {
				down = false
			})
			$('#mainnav > li.menu-item-has-children > a').focusin(function(){
				if(!down){
					menuShow($(this).parent().children('.menu-toggle'))
				}
			})
		} else{
			$('#mainnav .show-for-sr').removeClass('show-for-sr')
			$('#mainnav ul').attr('style', '')
		}
	}
	doMenu()
	window.onresize = function(event) {
		doMenu()
	}
	// Couple of solutions for fixing hierarchy problems
	//if(window.location.pathname.includes('search-the-archive')) $('#mainnav a:contains(Search the archive)').parent().addClass('active').parent().parent().addClass('current-menu-ancestor')
	//if(window.location.pathname.includes('/news/')) $('#mainnav a:contains(News)').parent().addClass('active')
})

//////////////////////////////////////////////////////////
//      		Nav here state fixer

$(function(){
	if(!$('#mainnav li.current-menu-item').length){
		var match = false
		var path = window.location.pathname
		$('#mainnav li > a[href]').each(function(){
			if(!$(this).attr('href').startsWith('h')){
				$(this).attr('href', window.location.origin+$(this).attr('href'))
			}
			var link = new URL($(this).attr('href'))
			if(link.pathname == path && match == false){
				match = true
				$(this).parent().addClass('current-menu-item').parents('li').addClass('current-menu-ancestor')
			}
		})
		if(match == false){
			$('#mainnav li > a[href]').each(function(){
				var link = new URL($(this).attr('href'))
				if(~path.indexOf(link.pathname)){
					$(this).parent().addClass('current-menu-item').parents('li').addClass('current-menu-ancestor')
				}
			})
		}
	}
})

//////////////////////////////////////////////////////////
//      		Masonry + FacetWP integration

$(function(){
	if($('[data-msnry]').length){
		var msnry = new Masonry('[data-msnry]', {
			transitionDuration: 0,
			itemSelector: 'article',
			percentPosition: true
		})
		$(window).load(function(){
			msnry.layout()
		})
		$(document).on('facetwp-loaded', function(){
			msnry.reloadItems()
			msnry.layout()
		})
	}
})

//////////////////////////////////////////////////////////
//      		iframe title generator

$(function(){
	$('iframe').each(function(){
		if(!$(this).attr('title')){
			var src = document.createElement('a')
			src.href = $(this).attr('src')
			$(this).attr('title', 'Embeded media from '+src.hostname)
			src.remove()
		}
	})
})

//////////////////////////////////////////////////////////
//      		Stop media on modal close

// Needs rewriting to work in IE!!
// $(function(){
// 	const stopMedia = () => {
// 		document.querySelectorAll('iframe').forEach(v => { v.src = v.src })
// 		document.querySelectorAll('video').forEach(v => { v.pause() })
// 		document.querySelectorAll('audio').forEach(v => { v.pause() })
// 	}
// 	$('.reveal').on('closed.zf.reveal', function(){
// 		stopMedia()
// 	})
// })

//////////////////////////////////////////////////////////
//      		General

$(function(){

})
