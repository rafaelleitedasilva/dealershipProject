const router = require('express').Router()
const classificados = require('../models/classificados')

router.get("/carros", async(req, res) => {
    //extrair dados da requisição

    let class2 = await classificados.find()

    try{
        res.send({class2});
    }catch(error){
        res.status(500).json({error:error})
    }
})

router.post("/carros", async(req, res) => {
    console.log(req.body); // o conteúdo do corpo do formulário

    const {Modelo,NomeDaSala,Preco} = req.body

    const cadastro = {
        Modelo,NomeDaSala,Preco
    }

    try{
        await classificados.create(cadastro)
        res.status(201).json({Cadastro: OK})
    }catch(error){
        res.status(500).json({error: error})
    }
}) 



module.exports = router