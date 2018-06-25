var minify = require('html-minifier').minify;
var fs = require("fs");
var result = minify("advanced-smart-contract.html");

fs.writeFile("output.html", result.code, function(err){
    if(err){
        console.log(err);
    }else{
        console.log("File was successfully saved.")
    }
});