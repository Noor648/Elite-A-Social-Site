const { User } = require('./model');

exports.set_user_auth = (req,res) => {
    User.getUserByEmail(req.query.email, (err, user) => {
        if(err) throw err;
        res.cookie("user", user.user_id);
        res.end();
    });
};

exports.get_user_by_id = (req,res) => {
    User.getUserById(req.params.id, (err, user) => {
        if(err) throw err;
        res.json(user);
    });
};

exports.get_friends = (req,res) => {
    User.getFriendsById(req.params.id, (err, friends) => {
        if(err) throw err;
        res.json(friends);
    });
};

exports.get_messages = (req,res) => {
    User.getMessages(req.params.id, req.params.from, (err, messages) => {
        if(err) throw err;
        res.json(messages);
    });
};

exports.send_message = (req,res) => {
    User.sendMessage(req.params.id, req.params.from, req.params.message, (err, resp) => {
        if(err) throw err;
        res.json(resp);
    });
};



