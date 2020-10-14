const fs = require('fs');

const readline = require('readline');

const symbols= {
    "add" : "+",
    "subtract" : "-",
    "multiply" : "*",
    "divide" : "/"
}

const applyInstructions = (instructionsFileName) => {
    return new Promise ( (resolve, reject ) => {
        const file = readline.createInterface({
            input: fs.createReadStream(instructionsFileName),
            output: process.stdout,
            terminal: false
        });
        let operations = [];
        let output=0;
        file.on( 'line', (line) => {
            if (line.startsWith("apply")) {
                output = line.split(" ")[1];
                operations.forEach( (operation) => {
                    output = eval(output + operation);
                });
                resolve(output);
            } else if (symbols[line.split(" ")[0]]) { 
                if (symbols[line.split(" ")[0]] === "/" && line.split(" ")[1] === "0") {
                    reject("Error: Divide by Zero");
                } else {
                    operations.push(symbols[line.split(" ")[0]] + line.split(" ")[1]); 
                }
            } else {
                reject("Error: Unknown Instruction");
            }
        }); 
    });
};

module.exports = applyInstructions;