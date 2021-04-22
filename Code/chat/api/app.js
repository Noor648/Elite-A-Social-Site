const express = require('express');
const bodyParser = require('body-parser');
const router = express.Router();
const app = express();
const userRouter = require('./userRouter');
const cookieParser = require('cookie-parser');




const allowCrossDomain = function(req, res, next) {
    res.header('Access-Control-Allow-Origin', 'http://localhost:3000');
    res.header('Access-Control-Allow-Methods', 'GET,PUT,POST,DELETE');
    res.header('Access-Control-Allow-Headers', 'Content-Type');
    
    next();
}


app.use(bodyParser.json());      
app.use(bodyParser.urlencoded({extended: true}));
app.use(allowCrossDomain);
app.use(cookieParser());
app.use(express.static(__dirname + '/views'));


app.use('/', router);
app.use('/user', userRouter);

app.listen(9000,() => {
    console.log(`App Started on PORT ${9000}`);
});