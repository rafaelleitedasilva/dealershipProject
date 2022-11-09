const mongoose = require('mongoose')
const classificados = mongoose.model('classificados', {
    Modelo: String,
    NomeDaSala: String,
    Preco: String
})

module.exports = classificados