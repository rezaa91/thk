module.exports = {
    entry: "./src/js/app.js",
    output: {
        path: __dirname + '/dist',
        filename: 'bundle.js'
    },
    module:{
        rules:[
            {
                test:/\.css$/,
                loader: "style-loader!css-loader"
            },
            {
                test:/\.js$/,
                exclude:/node_modules/,
                loader: 'babel-loader',
                options:{
                    presets:['env']
                }
            }
        ]
    }
}