/* 
	Hey guys ! I'm really greatful seeing you here.
	So there's only one question, if you are here, it just means that you at least appreciated 
	the website right ? Thank you bro ! This is your gorgeous friend Marcel Senga,
	I'm proud to build up this amazing website with you
	guys ! So what are we waiting for ? Let's just dive right into it !
*/

// ALL ABOUT GLOBAL VARIABLES



// ALL ABOUT EVENT LISTENERS

// handling navbar
$(window).on("scroll", () => {
  if ($(window).scrollTop()) {
    $(".top-header").addClass("white");
	if ($('.brand').hasClass('light')) {
		$('.brand').removeClass('light')
	}
  } else {
    $(".top-header").removeClass("white");
	if ($('.brand').hasClass('keep-logo')) {
		$('.brand').removeClass('light')
	} else if (!$('.brand').hasClass('light')) {
		$('.brand').addClass('light')
	}
  }
});

$('a.bi-hand-thumbs-up').on('click', function(e) {
	e.preventDefault()

	if ($(this).hasClass('bi-hand-thumbs-up')) {
		$(this).removeClass('bi-hand-thumbs-up')
		$(this).addClass('bi-hand-thumbs-up-fill')
	} else if ($(this).hasClass('bi-hand-thumbs-up-fill')) {
		$(this).removeClass('bi-hand-thumbs-up-fill')
		$(this).addClass('bi-hand-thumbs-up')
	}
	
})

$('a.bi-hand-thumbs-down').on('click', function(e) {
	e.preventDefault()
	
	if ($(this).hasClass('bi-hand-thumbs-down')) {
		$(this).removeClass('bi-hand-thumbs-down')
		$(this).addClass('bi-hand-thumbs-down-fill')
	} else if ($(this).hasClass('bi-hand-thumbs-down-fill')) {
		$(this).removeClass('bi-hand-thumbs-down-fill')
		$(this).addClass('bi-hand-thumbs-down')
	}
})

// handling cookies box 
$(window).on('scroll', () => {
	if ($(window).scrollTop() > 500) {
		if (!$('.cookies-box').hasClass('already-clicked')) {
			$('.cookies-box').addClass('active')
		}
	} else {
		$('.cookies-box').removeClass('active')
	}
})

$('.cookies-box button.btn-core').on('click', () => {
	$('.cookies-box').removeClass('active')
	$('.cookies-box').addClass('already-clicked')
})

document.querySelector('.menu-link').addEventListener('click', () => {
	document.querySelector('.top-header').classList.toggle('toggled')
	document.querySelector('.mainAndNav').classList.toggle('toggled')
	document.querySelector('.navigationLinksMobile').classList.toggle('toggled')
})

document.querySelector('.expertise-nav').addEventListener('click', function(e) {
	let expertiseContent = document.querySelectorAll('.expertise-content div')

	if (!(e.target.classList.contains('active'))) {
		document.querySelector('.expertise-link.active').classList.remove('active')
		e.target.classList.add('active')
	}

	expertiseContent.forEach(content => {
		if (content.classList.contains(e.target.classList[1])) {
			document.querySelector('.expertise-content div.active').classList.remove('active')
			content.classList.add('active')
		}
	})
})

