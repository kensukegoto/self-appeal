module.exports = (mode = "development") => {
    
    return {
        mode: mode,
        entry: {
            "js/index": "./script/index.js",
        },
        output:{
            filename: "[name].bundle.js",
        },
        module: {
            rules: [
            { 
                test: /\.js$/, 
                loader: "babel-loader", 
                include: [
                  /script/
                ]
            }
            ]
        },
        devtool: (mode === "development") ? "inline-source-map" : false
    }
}