const express = require('express');
const app = express();
const router = express.Router();
const http = require('http');


const path = __dirname + '/views/';
const port = 4040;

console.log('ww')

router.get('/index', function(req,res){


    console.log("are you seeing this shit ")
})    