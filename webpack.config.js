const defaultConfig = require( '@wordpress/scripts/config/webpack.config' );
const path = require( 'path' );

module.exports = {
	...defaultConfig,
	entry: {
		'wp-block-editor': [
			path.resolve( __dirname, 'src/scripts/wp-block-editor.js' ),
		],
		'wp-block-admin': [
			path.resolve( __dirname, 'src/scripts/wp-block-admin.js' ),
		],
	},
};
