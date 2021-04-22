
const fetch = require('node-fetch')

// var httpProxy = require('http-proxy')

// var server = httpProxy.createServer(function (req, res, proxy) {
//   proxy.proxyRequest(req, res, {
//     host: 'localhost',
//     port: 8080
//   });
// });

// server.listen(200);


const express = require('express');
const session = require('express-session');
const bodyParser = require('body-parser');
const router = express.Router();
const app = express();

app.use(session({secret: 'ssshhhhh',saveUninitialized: true,resave: true}));
app.use(bodyParser.json());      
app.use(bodyParser.urlencoded({extended: true}));
app.use(express.static(__dirname + '/views'));

var sess; // global session, NOT recommended

router.get('/', async (req,res) => {
    
    fetch("http://localhost:8080/we-esp/user.php").then(body => {

        return body.text();

    }).then(body => {
        res.send(body);
        res.end;
    })

});

app.use('/', router);

app.listen(process.env.PORT || 3000,() => {
    console.log(`App Started on PORT ${process.env.PORT || 3000}`);
});