const path = require('path');
module.exports = {
	entry: './js/index.js',
	mode: "production",
	output: {
		filename: 'bundle.js',
		path: path.resolve(__dirname, 'web'),
	},
	module: {
		rules: [
			{
				test: /\.js$/,
				exclude: /node_modules/,
				use: {
					loader: "babel-loader"
				}
			},
			{
				test: /\.(s*)css$/,
				use: ['style-loader', 'css-loader', 'resolve-url-loader', 'sass-loader']
			}
		]
	}
}