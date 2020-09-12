if(document.documentElement.clientWidth >= 768) {
	
	var options = {
		root: null,
		rootMargin: '250px',
		threshold: 0.0
	}

	let observer = new IntersectionObserver(function(entries, observer) {
		entries.forEach(function(entry) {
			if (entry.isIntersecting) {
				document.addEventListener('scroll', watchScrollPosition)
			} else {
				document.removeEventListener('scroll', watchScrollPosition)
			}
		})
	}, options)

	let items = document.querySelectorAll('#parallax.bckg');
	items.forEach(function( item ) {
		observer.observe(item)
	})

	function watchScrollPosition(e) {
		const scrollPosition = (window.scrollY + window.innerHeight); // viewport bottom
		const parallax = document.querySelector('#parallax')
		const speed = 4;
		const offsetTop = parallax.offsetTop;
		const bgPositionY = (parallax.offsetHeight / 2 * 100) / parallax.offsetHeight;
		parallax.style.backgroundPosition = "center " + (bgPositionY + ((offsetTop - scrollPosition) / 100 * speed) + "%");
	}
}
