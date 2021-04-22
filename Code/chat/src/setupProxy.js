const {createProxyMiddleware} = require('http-proxy-middleware')

module.exports = function(app) {
    app.use(createProxyMiddleware('/query/*', { target: 'http://localhost:8080/we-esp/' }))
}
