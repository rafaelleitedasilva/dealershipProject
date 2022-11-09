const router = require('express').Router()
const salas = require('../models/salas')
const classificados = require('../models/classificados')

router.get("/home", async(req, res) => {
    //extrair dados da requisição

    let SalasCot = await salas.find()
    let class2 = await classificados.find()

    try{
        res.render('home', {SalasCot, class2});
    }catch(error){
        res.status(500).json({error:error})
    }
})

module.exports = router