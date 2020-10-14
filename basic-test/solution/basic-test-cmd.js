const fs = require('fs');

const applyInstructions = require("./basic-test");

if ( process.argv && Array.isArray(process.argv) && process.argv.length === 3 ) {
    if ( fs.existsSync(process.argv[2]) ) {
        applyInstructions(process.argv[2]).then(console.log).catch(console.log);
    } else {
        console.log("\n Instructions file you have provided \"" + process.argv[2] + "\" doesn't exist. Please check and retry. \n" );
    }
} else {
    console.log("\n Usage: node basic-test.js <instructions.txt> \n" );
}
