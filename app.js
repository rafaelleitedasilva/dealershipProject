const express = require('express');
const mongoose = require('mongoose')

const app = express();

app.set('view engine', 'ejs');
app.set('views', './views');
app.use(express.static(__dirname + '/public'));

app.get('/', (req, res) => {
    res.render('home');
});


const DB_PASSWORD = encodeURIComponent('O1VmaOAmmRzGrra4')

mongoose
    .connect(`mongodb+srv://CARROS:${DB_PASSWORD}@cluster0.wn5bpid.mongodb.net/?retryWrites=true&w=majority`)
    .then(() => {
        console.log("Conectamos ao MongoDB!")
        //entregar uma porta
        app.listen(1500, () => {
            console.log("Servidor inicial na porta 1500 http://localhost:1500")
        })
    })
    .catch((err) => console.log(err))