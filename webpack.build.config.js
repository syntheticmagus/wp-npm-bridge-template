const path = require("path");

module.exports = {
    entry: "./src/index.js",
    mode: "production",
    output: {
        path: path.resolve(__dirname, "./wp/wp-npm-bridge-template/assets/js"),
        filename: "wp-npm-bridge-template.js"
    },
    module: {
        rules: [
            {
                test: /\.m?js/,
                resolve: {
                    fullySpecified: false
                }
            }
        ]
    }
};
