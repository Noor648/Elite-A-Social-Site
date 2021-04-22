const WebSocket = require('ws')
const data = require('./db');
const wss = new WebSocket.Server({ port: 8989 })


const broadcast = (data, ws) => {
  wss.clients.forEach((client) => {
    if (client.readyState === WebSocket.OPEN && client !== ws) {
      client.send(JSON.stringify(data))
    }
  })
}

wss.on('connection', (ws) => {
  
  ws.on('message', (message) => {
    
    const data = JSON.parse(message)
    switch (data.type) {
    
      case 'ADD_MESSAGE':
        broadcast({
          type: 'ADD_MESSAGE',
          message: data.message,
          author: data.author,
          userFrom: data.userFrom
        }, ws)
        break
      default:
        break
    }
  })

})
