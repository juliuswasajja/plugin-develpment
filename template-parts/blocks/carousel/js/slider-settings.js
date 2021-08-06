var glide = new Splide( '.splide', {
	perPage: 4,
	rewind : true,
	autoplay: true,
	keyboard: true,
	direction: 'ltr',
	// accessibility: true,
	cover: false,
	pauseOnHover: true,
	interval: 2000,
    arrows : true,
	isNavigation: true,
	pagination : true,
	breakpoints : {
		'800': {
			perPage: 3,
		},
		'480': {
			perPage: 2,
		}
	},

} );

glide.mount();