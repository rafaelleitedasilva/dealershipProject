const mongoose = require('mongoose')
const classificados = mongoose.model('ambiente', {
    Modelo: Boolean,
    Preco: Float64Array
})

module.exports = classificados