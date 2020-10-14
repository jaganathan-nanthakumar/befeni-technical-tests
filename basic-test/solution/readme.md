
# Befeni Technical Test [Basic] Solution by Jaganathan Nanthakumar


## How to use?

You need to have [NodeJS](https://nodejs.org/en/) installed in your system. Then, you need to create an instructions text file with allowed set of instructions i.e, add, subtract, multiply or divide one per line followed by a space and its value. The last line of this file should contain apply instruction with a space and the initial value to start with. You can refer to the example files present in this directory for more information. If you face any issues, please contact jaganathan.nanthakumar@outlook.com

After installing NodeJS and having an instructions file, say instrcutions.txt you can use the below command

>> node basic-test-cmd.js instructions.txt

## Source Overview

- The source code consists of a primary node module named **basic-test.js** file present in this directory.

- The **basic-test-cmd.js** present in this directory is the command line interface for this module.

- unit-tests directoty consists of unit tests for this module and currently there are three tests in 1 test suite and all of them are passing

<img src="https://jaganathan.online/develop/assignments/bifeni/basic-test-jest-output.png" height="100">

**Note** : If you are a developer and need to contribute to unit tests, install Jest globally using **npm i -g jest**, followed by **npm install** in this directory and run **jest**. Write your tests in **basic-test.spec.js** file.