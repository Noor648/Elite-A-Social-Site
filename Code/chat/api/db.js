const mysql = require('mysql');

const con = mysql.createConnection({
    host: "localhost",
    user: "nomi",
    database: "cs344_project",
    password: ""
});

con.connect(function(err) {
    if (err) throw err;
});

module.exports = con;