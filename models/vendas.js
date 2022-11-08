const mongoose = require('mongoose')
const vendas = mongoose.model('ambiente', {
    Vendido: Boolean,
})

module.exports = vendas