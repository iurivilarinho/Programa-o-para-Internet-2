const express = require('express')
const app = express()
const path = require('path')

const port = 3000

app.use(express.static(path.join(__dirname, 'public')))

app.get('/', (req, res) => {
    res.sendFile(path.join(__dirname, 'public', '404.html'));
})

app.get('/home', (req, res) => {
    res.sendFile(path.join(__dirname, 'public', 'home.html'));
})

app.get('/about', (req, res) => {
    res.sendFile(path.join(__dirname, 'public', 'demais.html'));
})

app.get('/user', (req, res) => {
    res.sendFile(path.join(__dirname, 'public', 'demais.html'));
})

app.use('/login', (req, res) => {
    res.sendFile(path.join(__dirname, 'public', 'demais.html'));
})

app.listen(port, () => {
    console.log(`Server rodando na porta ${port}...`)
    console.log(__dirname)
})