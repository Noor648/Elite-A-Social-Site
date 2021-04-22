const express = require('express');
const router = express.Router();
const user = require('./userController');

router.post('/auth', user.set_user_auth);
router.get('/:id', user.get_user_by_id);
router.get('/:id/friends', user.get_friends);
router.get('/:id/messages/:from', user.get_messages);
router.put('/:id/messages/:from/:message', user.send_message);



module.exports = router;