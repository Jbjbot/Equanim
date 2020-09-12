import lozad from 'lozad'

const thumbnail = lozad('.thumbnail', {
	load: function(el) {
		el.src = el.getAttribute('data-src');
		el.srcset = el.getAttribute('data-srcset');
		el.sizes = el.getAttribute('data-sizes');
	},
	loaded: function(el) {
		el.classList.add('loaded');
	},
	rootMargin: '10px 0px',
	threshold: 0.1
});

const bckg = lozad('.bckg', {
	rootMargin: '10px 0px',
	threshold: 0.1
})

thumbnail.observe();
bckg.observe();
