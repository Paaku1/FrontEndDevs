const http = require('http');
const express = require('express');

const app = express();

const server = http.createServer((req, res) => {
    if(req.url === '/') {
        res.write(`hello user`);
        console.log('new connection');
        setTimeout(() => {
            res.write('hello hello');
        }, 100);
        res.end();
    }
});

app.get('/', (req, res) => {
    console.log('new connection');
    res.write('Welcome to MongoDB');
    res.end();
});



server.listen(3000);
console.log(`listening to port 3000`);


