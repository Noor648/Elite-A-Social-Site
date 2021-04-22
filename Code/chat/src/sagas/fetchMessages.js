import * as types from '../constants/ActionTypes'
import { ACTIVE_USER } from "../utils/user";
import { put, takeLatest, all } from 'redux-saga/effects';

function* fetchMessages(action) {
  const messages = yield fetch(`user/${ACTIVE_USER}/messages/${action.userFrom}`)
        .then(response => response.json(), );

  yield put({ type: types.POPULATE_MESSAGES, messages, author: action.userFrom });
}

function* actionWatcher() {
     yield takeLatest(types.FETCH_MESSAGES, fetchMessages)
}

export default function* fetchMessagesSaga() {
   yield all([
    actionWatcher(),
   ]);
}
