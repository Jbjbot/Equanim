const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your WordPlate application. By default, we are compiling the Sass
 | file for your application, as well as bundling up your JavaScript files.
 |
 */

const theme = 'equanim'
const public_dir = '/'

// Remove notification (pain on the ass)
mix.disableNotifications();

// Set the public map to compile vendors to the right place
mix.setPublicPath(public_dir);

mix.js('assets/js/app.js', 'dist/')
	.sass('assets/sass/app.scss', 'dist/')
	.sass('./style-editor.scss', './')
	.copy('assets/images', 'dist/images', false)
	.copy('assets/fonts', 'dist/fonts', false)
	.options({
		fileLoaderDirs: {
			images:`dist/images`,
			fonts: `dist/fonts`
		}
	})
	.sourceMaps()
	.version();

mix.webpackConfig({
	resolve: {
		alias: {
			"ScrollMagic": path.resolve("node_modules", "scrollmagic/scrollmagic/uncompressed/ScrollMagic.js"),
			"animation.gsap": path.resolve("node_modules", "scrollmagic/scrollmagic/uncompressed/plugins/animation.gsap.js"),
			"debug.addIndicators": path.resolve("node_modules", "scrollmagic/scrollmagic/uncompressed/plugins/debug.addIndicators.js")
		}
	}
})

// Setup browserSync
// (important to specify which files to watch or else it doesn't work)
mix.browserSync({
	proxy: 'localhost:8080',
	files: [
	  'assets/sass/**/*.scss',
	  'assets/js/**/*.js',
	  'templates/*.twig',
	  'templates/**/*.twig'
	],
	notify: false,
	open: false
});