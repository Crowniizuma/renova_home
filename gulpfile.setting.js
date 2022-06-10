module.exports = {
	SASS : {
		SOURCE_PATH : 'source',
		SOURCE_FILE : '**/*.scss',
		OUTPUT_PATH : 'public',
		OPTION : {
			outputStyle : 'compressed'
		},
		AUTOPREFIXER : { cascade : false },
	},
	WEBPACK : {
		SOURCE_PATH : 'source',
		SOURCE_FILE : '**/*.js',
		IGNORE_FILE : '**/_*.js',
		OUTPUT_PATH : 'public',
		OPTION : {
			mode : 'development',
			entry : {},
			output : { filename : '[name]' },
			module : {
				rules: [ {
					test : /\.js$/,
					use : [
						{
							loader : 'babel-loader',
							options : { presets : ['@babel/preset-env'] }
						}
					]
				} ]
			},
			devtool : 'source-map',
			target : ["web", "es5"],
		}
	},
	BROWSERSYNC : {
		DOCUMENT_ROOT : 'public',
		STARTPATH : '',
		NOTIFY : false,
		GHOSTMODE : {
			clicks : false,
			forms : false,
			scroll : false
		},
	},
	PHP_CONNECT : {
		PORT : 8003,
	},
};