import React, {useState, useEffect} from 'react';
import ReactDOM from 'react-dom';
import './index.css';
import App from './App';
import * as serviceWorker from './serviceWorker';
import {Provider} from 'react-redux';
import {createStore, applyMiddleware} from 'redux';
import createSagaMiddleware from 'redux-saga';



import chat from './reducers';

import handleNewMessage from './sagas'
import setupSocket from './sockets'
// import username from './utils/name'
import { populateUsersList, populateMessagesList, setUser } from './actions';
import axios from 'axios';
import { ACTIVE_USER } from './utils/user';
import fetchMessagesSaga from './sagas/fetchMessages'

const sagaMiddleware = createSagaMiddleware()

// console.log( );


const store = createStore(
  chat,
  applyMiddleware(sagaMiddleware)
);

sagaMiddleware.run(fetchMessagesSaga);

axios.get(`user/${ACTIVE_USER}`).then(res => {
  let username = res.data.userName;
  store.dispatch(setUser(ACTIVE_USER, username));
  
  const socket = setupSocket(store.dispatch, username)
  sagaMiddleware.run(handleNewMessage, { socket, author: ACTIVE_USER})
});


axios.get(`user/${ACTIVE_USER}/friends`).then(res => {
  let friends = res.data.map(item => {
    return {
      name: item.userName,
      id: item.user_id
    };
  });
  store.dispatch(populateUsersList(friends));
});




ReactDOM.render(
  <React.StrictMode>
    <Provider store={store}>
      <App />
    </Provider>
  </React.StrictMode>,
  document.getElementById('root')
);

// If you want your app to work offline and load faster, you can change
// unregister() to register() below. Note this comes with some pitfalls.
// Learn more about service workers: https://bit.ly/CRA-PWA
serviceWorker.unregister();
