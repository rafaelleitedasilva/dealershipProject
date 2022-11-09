const mongoose = require('mongoose')
const salas = mongoose.model('salas', {
    NumeroDeCarros: String,
    NomeDaSala: String
})

module.exports = salas