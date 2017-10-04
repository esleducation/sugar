module.exports = (grunt) ->

	# Configuration
	# =============
	grunt.initConfig

		pkg: grunt.file.readJSON 'package.json'

		copy:
			sassyjson:
				expand: true,
				cwd: 'node_modules/sassyjson/stylesheets/',
				src: '**',
				dest: 'src/sass/vendors/sassyjson/',
				filter: 'isFile'
			modularscale:
				expand: true,
				cwd: 'node_modules/modular-scale/stylesheets/',
				src: '**',
				dest: 'src/sass/vendors/modularscale/',
				filter: 'isFile'
			sassdash:
				expand: true,
				cwd: 'node_modules/sassdash/scss/',
				src: '**',
				dest: 'src/sass/vendors/sassdash/',
				filter: 'isFile'

		replace:
			animate:
				options:
					patterns: [{
			  			match: /(\.)([a-zA-Z]+)/gi
			  			replacement: '%$2'
					}]
				files: [{
					expand: true
					flatten: true
					src: ['src/sass/vendors/animatecss/animate.scss'],
					dest: 'src/sass/vendors/animatecss/'
				}]

		clean: [
			'src/sass/vendors/modularscale/',
			'src/sass/vendors/sassdash/',
			'src/sass/vendors/sassyjson/'
		]

		notify:
			default:
				options:
					title:'Grunt'
					message: 'All tasks where processed'
			compass:
				options:
					title:'Grunt watcher'
					message: 'SASS files where processed'
			coffee:
				options:
					title:'Grunt watcher'
					message: 'Coffee files where processed'


	grunt.loadNpmTasks 'grunt-notify'
	grunt.loadNpmTasks 'grunt-contrib-concat'
	grunt.loadNpmTasks 'grunt-contrib-clean'
	grunt.loadNpmTasks 'grunt-contrib-copy'
	grunt.loadNpmTasks 'grunt-replace'

	grunt.registerTask 'default', [
		'clean'
		'copy:modularscale'
		'copy:sassdash'
		'copy:sassyjson'
		'notify:default'
	]
