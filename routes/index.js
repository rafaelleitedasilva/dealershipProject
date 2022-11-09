const router = require('express').Router()
const salas = require('../models/salas')

router.get("/home", async(req, res) => {
    //extrair dados da requisição

    let salas = await salas.find()

    try{
        res.render('home', {salas}) 
    }catch(error){
        res.status(500).json({error:error})
    }
})

router.post("/home", async(req, res) => {
    console.log(req.body); // o conteúdo do corpo do formulário

    const {NumeroDeCarros,NomeDaSala} = req.body

    const cadastro = {
        NumeroDeCarros,NomeDaSala
    }

    try{
        await salas.create(cadastro)
        res.status(201).json({Cadastro: OK})
    }catch(error){
        res.status(500).json({error: error})
    }
}) 



module.exports = router