$('.al_clt').owlCarousel({
	items:6,
	loop:true,
	margin:30,
	nav:true,
	autoplay:true,
	smartSpeed:3000,
	navText: ["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
	responsive:{
		0:{
		items:1
		},
		600:{
			items:6
		},
		1000:{
			items:6
		}
	}
})


/*----------------------------------------------------*/
/* Testimonial crousel
/*----------------------------------------------------*/
	$('.all_tstm').owlCarousel({
		items:1,
		loop:true,
		margin:10,
		nav:true,
		autoplay:true,
		smartSpeed:3000,
		navText: ["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
		responsive:{
			0:{
				items:1
			},
			600:{
				items:1
			},
			1000:{
				items:1
			}
		}
	})
