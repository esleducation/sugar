###
# Sugar-webfonts.js
#
# This little js file allow you to use webfonts based64 encoded and loaded from localstorage
#
# @author   Olivier Bossel <olivier.bossel@gmail.com>
# @created  23.11.15
# @updated  23.11.15
# @version  1.0.0
###
((factory) ->
	if typeof define == 'function' and define.amd
		# AMD. Register as an anonymous module.
		define [ ], factory
	else if typeof exports == 'object'
		# Node/CommonJS
		factory()
	else
		# Browser globals
		factory()
	return
) () ->

	window.SugarWebfonts =

		# variables
		_key : 'sugar-webfonts'
		_cache : null

		# track if already inited
		_inited : false

		# default settings that can be overrided on init
		_settings :
			version : '581fea09a1e08e3770d777ca504608ee'
			json_path : '/fonts/fonts.json'
			debug : false
		
		###
		Init
		###
		init : (settings) ->

			# extend settings
			@_settings = @_extend @_settings, settings

			# update inited state
			@_inited = true

			try
				@_cache = window.localStorage.getItem(@_key)
				if @_cache
					@_cache = JSON.parse @_cache
					if @_cache.version == @_settings.version
						@_insertFont @_cache.value
					else
						# Busting cache when version doesn't match
						window.localStorage.removeItem @_key
						@_cache = null
			catch e
				# Most likely LocalStorage disabled

			if not @_cache
				# Fonts not in LocalStorage or version did not match
				window.addEventListener 'load', =>
					request = new XMLHttpRequest
					response = undefined
					request.open 'GET', @_settings.json_path, true
					_this = @
					request.onload = ->
						if @status == 200
							try
								response = JSON.parse @responseText
								fontface = '';
								for index, font of response.fonts
									fontface += '@font-face{'
									for prop, value of font
										value = '"'+value+'"' if prop == 'font-family'
										fontface += prop + ':' + value + ';'
									fontface += '}';
								_this._insertFont fontface
								window.localStorage.setItem _this._key, JSON.stringify
									version : _this._settings.version
									value : fontface
							catch e
								# LocalStorage is probably full
					request.send()

		###
		Extend settingd
		###
		_extend : (obj, mixin) ->
			obj[name] = method for name, method of mixin
			obj

		###
		Insert font
		###
		_insertFont : (value) ->
			style = document.createElement('style')
			style.innerHTML = value
			document.head.appendChild style

		###
		Debug
		###
		_debug : ->
			console.log 'SUGAR-WEBFONTS', arguments if @_settings.debug


	# support AMD
	if typeof window.define is 'function' && window.define.amd
		window.define [], -> window.SugarWebfonts

	# return the Sugar object
	SugarWebfonts