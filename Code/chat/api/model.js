const con = require('./db');


const User = {};

User.getUserByEmail = (email, result) => {
    let sql = "SELECT * FROM login WHERE e_mail=?";
    con.query(sql, [email], (err, res) => {
        result(err, res[0]);
    });
}

User.getUserById = (id, result) => {
    let sql = "SELECT * FROM login WHERE user_id=?";
    con.query(sql, [id], (err, res) => {
        result(err, res[0]);
    });
}

User.getFriendsById = (id, result) => {
    let sql = "SELECT friends FROM friends WHERE user_id=?";
    con.query(sql, [id], (err, res) => {
        
        let friends = [];

        res.forEach((id, i) => {
            id = id["friends"];
            User.getUserById(id, (err, friend) => {
                friends.push(friend);
                if( i === res.length-1) result(err, friends);
            });
        });

        
    });
}

User.getMessages = (id, from, result) => {
    let sql = "SELECT id, author, message FROM chat WHERE (author=? AND user_to=?) OR (author=? AND user_to=?) ORDER BY time ASC";
    con.query(sql, [id, from, from, id], result);
}

User.sendMessage = (author, to, message, result) => {
    let sql = "INSERT INTO chat (author, user_to, message) VALUES (?, ?, ?)";
    con.query(sql, [author, to, message], result);
}




module.exports = { User };