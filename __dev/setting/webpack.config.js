const path = require("path");

const dirScript = new RegExp(path.join(__dirname,"..","script"));

module.exports = (mode = "development") => {
    
    return {
        mode: mode,
        entry: {
            "js/index": "../script/index.js",
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
                    dirScript
                ]
            }
            ]
        },
        devtool: (mode === "development") ? "inline-source-map" : false
    }
}