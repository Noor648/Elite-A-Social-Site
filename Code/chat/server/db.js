// old file


// const mysql = require('mysql');

// const con = mysql.createConnection({
//     host: "localhost",
//     user: "nomi",
//     database: "we_esp",
//     password: ""
// });

// const ACTIVE_USER = 12;
// let userData;


// userData = new Promise(resolve => {
//     con.connect(function(err) {
//         if (err) throw err;
        
//         let sql;
//         sql = "SELECT * FROM login WHERE user_id=?";
        
//         con.query(sql, [ACTIVE_USER], (err, result) => {
//             if(err) throw err;
//             resolve(result);
//         });
    
//     });
// });

// module.exports.userData = userData;