_            = require 'lodash'
gulp         = require 'gulp'
gulpWebpack  = require 'gulp-webpack'
gutil        = require 'gulp-util'
rename       = require 'gulp-rename'
sass         = require 'gulp-sass'
uglify       = require 'gulp-uglify'
autoprefixer = require 'gulp-autoprefixer'
webpack 	 = require 'webpack'
replace 	 = require 'gulp-replace'
fs 			 = require 'fs'
compass 	 = require 'gulp-compass'
concat 		 = require 'gulp-concat'
coffee 		 = require 'gulp-coffee'
clean 		 = require 'gulp-clean'
babel 		 = require 'gulp-babel'
filter 		 = require 'gulp-filter'
cached 		 = require 'gulp-cached'

# configure webpack
webpackParams =
	module :
		loaders: [{
			test: /\.coffee$/,
			loader: 'coffee-loader'
		}, {
			test: /\.jsx?$/,
			exclude: /(node_modules|bower_components)/,
			loader: 'babel-loader',
			query: {
				presets: ['es2015-loose','stage-0'],
				plugins: ['transform-proto-to-assign'],
				compact: false
			}
		}]
webpackAppParams = _.extend {}, webpackParams,
	entry: {
		'angular-demo': ['./src/js/angular-demo.js']
	}
	output:
		path: require("path").resolve("./assets/js"),
		filename: '[name].js',
		libraryTarget: 'umd'
webpackDistParams = _.extend {}, webpackParams,
	entry: {
		'drawer': [
			"./src/js/sugar/components/SDrawerElement.js"
			"./src/js/sugar/components/sDrawerManager.js"
		]
		'gooey': ["./src/js/sugar/filters/SGooeyElement.js"]
		'motionblur': ["./src/js/sugar/filters/SMotionblurElement.js"]
		'gradient': ["./src/js/sugar/filters/SGradientElement.js"]
		'transitionstart': ["./src/js/sugar/events/STransitionStartEventDispatcher.js"]
		'localStorageFonts': ["./src/js/sugar/fonts/sLocalStorageFonts.js"]
		'activate' : [
			'./src/js/sugar/components/SActivateElement.js'
			'./src/js/sugar/components/sActivateManager.js'
		]
		#'form' : ['./src/js/sugar/components/s-form.js']
		'sugar' : ['./src/js/sugar/sugar.js']
	},
	output:
		path: require("path").resolve("./dist/js"),
		filename: '[name].js'
		library: '[name]'
		libraryTarget: 'umd'

if process.env.NODE_ENV is 'debug'
	webpackParams.devtool = "#inline-source-map"

# topbar
gulp.task 'tokens', ->
	topbar_content = fs.readFileSync("pages/parts/top-bar.html", "utf8");
	drawers_content = fs.readFileSync("pages/parts/drawers.html", "utf8");
	head_content = fs.readFileSync("pages/parts/head.html", "utf8");
	footer_content = fs.readFileSync("pages/parts/footer.html", "utf8");
	gulp.src [
		'pages/*.html'
	]
	.pipe replace '{HEAD}', head_content
	.pipe replace '{FOOTER}', footer_content
	.pipe replace '{TOPBAR}', topbar_content
	.pipe replace '{DRAWERS}', drawers_content
	.pipe gulp.dest './'

# clean
gulp.task 'clean-js', ->
	gulp.src [
		'dist/js/',
		'assets/js'
	]
	.pipe clean()
gulp.task 'clean-css', ->
	gulp.src [
		'assets/css/'
	]
	.pipe clean()

# coffee
gulp.task 'coffee', ['clean-js'], ->
	gulp.src './src/coffee/*.coffee'
	.pipr cached('coffee')
	.pipe coffee()
	.pipe gulp.dest 'assets/js'

# compass
gulp.task 'compass', ->
	gulp.src './src/sass/**/*.scss'
	.pipe cached('compass')
	.pipe compass
		config_file: './config.rb'
		css: 'assets/css'
		sass: 'src/sass'
	.pipe autoprefixer
		browsers: ['last 5 versions']
	.pipe gulp.dest 'assets/css'

# sass
gulp.task 'sass', ->
	gulp.src './src/sass/**/*.scss'
	# .pipe cached('sass')
	.pipe sass(
		outputStyle: 'expanded'
		precision : 8
	).on 'error', sass.logError
	.pipe autoprefixer
		browsers: ['last 5 versions']
	.pipe gulp.dest 'assets/css'

# build the package
gulp.task 'webpack-dist', ['clean-js'], ->
	gulp.src [
		'./src/js/sugar/**/*.js'
		'./src/coffee/sugar/**/*.coffee'
	]
	.pipe gulpWebpack webpackDistParams
	# .pipe babel
	# 	presets: ['es2015','stage-0']
	# 	compact: false
	
	.pipe gulp.dest 'dist/js'
	.pipe uglify()
	.pipe rename
		extname : '.min.js'
	.pipe gulp.dest 'dist/js'

gulp.task 'webpack-app', ['clean-js'], ->
	gulp.src [
		'./src/js/*.js'
		'./src/coffee/*.coffee'
	]
	.pipe gulpWebpack webpackAppParams
	# .pipe babel
	# 	presets: ['es2015','stage-0']
	# 	#plugins: ['dataset']
	# .pipe uglify()
	.pipe gulp.dest 'assets/js'
	.pipe uglify()
	.pipe rename
		extname : '.min.js'
	.pipe gulp.dest 'assets/js'

# register tasks
gulp.task 'default', ['webpack-app','sass']
gulp.task 'watch', ['default'], ->
	# Recompile on change
	gulp.watch ["src/coffee/**/*.coffee"], ['webpack-app']
	gulp.watch ['src/js/**/*.js'], ['webpack-app']
	gulp.watch ["src/sass/**/*.scss"], ['sass']
	gulp.watch ['pages/**/*.html'], ['tokens']