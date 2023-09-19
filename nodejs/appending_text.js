const fs = require("fs");

fs.appendFile('dummy.txt','welcome to nodeJs', (err) => {
    if(err) throw err;

    console.log('Append success');
});