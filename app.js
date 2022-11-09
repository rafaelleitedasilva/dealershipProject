const express = require('express');
const mongoose = require('mongoose')
const path = require('path')
const app = express();

app.use(
    express.urlencoded({ //faz a criptografia da url quando mandamos o form com POST
        extended: true,
    }),
)

app.set('view engine', 'ejs');
app.use(express.json()); 
app.set('views', './views');
app.use(express.static(__dirname + '/public'));

const index = require('./routes/index')
app.use('/', index)

const carros = require('./routes/carros')
app.use('/', carros)


const DB_PASSWORD = 'O1VmaOAmmRzGrra4'

mongoose
    .connect(`mongodb+srv://CARROS:O1VmaOAmmRzGrra4@cluster0.wn5bpid.mongodb.net/salas?retryWrites=true&w=majority`)
    .then(() => {
        console.log("Conectamos ao MongoDB!")
        //entregar uma porta
        app.listen(1500, () => {
            console.log("Servidor inicial na porta 1500 http://localhost:1500")
        })
    })
    .catch((err) => console.log(err))
