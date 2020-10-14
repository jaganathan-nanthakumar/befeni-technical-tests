const applyInstructions = require("../basic-test");

test('Check if result is 100', done => {
    return applyInstructions('100.txt').then(answer => {
        done();
        expect(answer).toBe(100);
    });
});

test('Test Divide by Zero', done => {
    return applyInstructions('DivideByZero.txt').catch(answer => {
        done();
        expect(answer).toBe("Error: Divide by Zero");
    });
});

test('Test invalid instruction', done => {
    return applyInstructions('InvalidInstruction.txt').catch(answer => {
        done();
        expect(answer).toBe("Error: Unknown Instruction");
    });
});