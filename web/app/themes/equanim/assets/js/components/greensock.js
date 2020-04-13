import { TimelineMax, TweenMax } from "gsap";
import ScrollMagic from 'ScrollMagic'
import 'debug.addIndicators'
import { ScrollMagicPluginGsap } from "scrollmagic-plugin-gsap"

if(document.querySelector(".home")) {
	ScrollMagicPluginGsap(ScrollMagic, TweenMax, TimelineMax);

	// Init controller
	const ctrl = new ScrollMagic.Controller({addIndicators: true});

	// Variables
	const $section0 = document.querySelector('#section__intro .section__content')
	const $shape0 = document.querySelector('#section__intro .shape')
	const $section1 = document.querySelector('#section__carousel .section__content')
	const $section2 = document.querySelector('#section__actu .section__content')

	// Scene
	const scene0 = new ScrollMagic.Scene({
		triggerElement: $section0,
	})
	.on("start", function(e) {
		const timeline0 = new TimelineMax();
		let tween0 = timeline0.from($section0, {y: "200px"}, 0)
		tween0 = timeline0.to($section0, {opacity: 1, visibility: "visible"}, 0)
		tween0 = timeline0.from($shape0, {x: "100%"}, 0)
		tween0 = timeline0.to($shape0, {opacity: 1, visibility: "visible"}, 0)
	})
	.addIndicators({colorStart: "#FF0000", indent: 200})
	.addTo(ctrl)
	.reverse(false)

	const scene1 = new ScrollMagic.Scene({
		triggerElement: $section1,
		offset: -200
	})
	.on("start", function(e) {
		const timeline1 = new TimelineMax();
		let tween1 = timeline1.from($section1, {y: "200px"}, 0)
		tween1 = timeline1.to($section1, {opacity: 1, visibility: "visible"}, 0)
	})
	.addIndicators({colorStart: "#F58C28", indent: 200})
	.addTo(ctrl)
	.reverse(false)

	const scene2 = new ScrollMagic.Scene({
		triggerElement: $section2,
		offset: -200
	})
	.on("start", function(e) {
		const timeline2 = new TimelineMax();
		let tween2 = timeline2.from($section2, {y: "200px"}, 0)
		tween2 = timeline2.to($section2, {opacity: 1, visibility: "visible"}, 0)
	})
	.addTo(ctrl)
	.reverse(false)
}

if(document.querySelector(".blog")) {
	ScrollMagicPluginGsap(ScrollMagic, TweenMax, TimelineMax);

	// Init controller
	const ctrl = new ScrollMagic.Controller({addIndicators: true});

	// Variables
	let articles = document.querySelectorAll('article.tease.tease__post')
	articles = [].slice.call(articles)

	articles.forEach(function(el, index) {
		setTimeout(function() {
			new ScrollMagic.Scene({
				triggerElement: el,
				offset: -100
			})
			.on("start", function(e) {
				const timeline = new TimelineMax();
				let tween = timeline.from(el, {y: "200px"})
				tween = timeline.to(el, {opacity: 1, visibility: "visible"}, "-=1")
			})
			.addIndicators({indent: index * 100})
			.addTo(ctrl)
			.reverse(false)
		}, index * 500)
	})
}

if(document.querySelector(".post-type-archive-mediator")) {
	ScrollMagicPluginGsap(ScrollMagic, TweenMax, TimelineMax);

	// Init controller
	const ctrl = new ScrollMagic.Controller({addIndicators: true});

	// Variables
	let meditors = document.querySelectorAll('article.tease.tease__mediator')
	meditors = [].slice.call(meditors)

	meditors.forEach(function(el, index) {
		setTimeout(function() {
			new ScrollMagic.Scene({
				triggerElement: el
			})
			.on("start", function(e) {
				const timeline = new TimelineMax();
				let tween = timeline.from(el, {y: "200px"})
				tween = timeline.to(el, {opacity: 1, visibility: "visible"}, "-=0.5")
			})
			.addIndicators({indent: index * 100})
			.addTo(ctrl)
			.reverse(false)
		}, index * 250)
	})
}
