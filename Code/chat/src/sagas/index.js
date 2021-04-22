import { takeEvery } from 'redux-saga/effects'
import * as types from '../constants/ActionTypes'
import axios from 'axios'

const handleNewMessage = function* handleNewMessage(params) {
  yield takeEvery(types.ADD_MESSAGE, (action) => {
    action.author = params.author
    params.socket.send(JSON.stringify(action));
    axios.put(`http://localhost:9000/user/${action.author}/messages/${action.userFrom}/${action.message}`);
  })
}


export default handleNewMessage