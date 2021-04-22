import * as types from '../constants/ActionTypes'

let nextMessageId = 0
let nextUserId = 0

export const addMessage = (message, author, userFrom) => ({
  type: types.ADD_MESSAGE,
  id: nextMessageId++,
  message,
  author,
  userFrom
});

export const fetchMessages = (userFrom) => ({
  type: types.FETCH_MESSAGES,
  userFrom
});

export const populateMessagesList = (messages, author) => ({
  type: types.POPULATE_MESSAGES,
  messages,
  author
});


export const addUser = name => ({
  type: types.ADD_USER,
  id: nextUserId++,
  name
});

export const setUser = (id, name) => ({
  type: types.SET_CURRENT_USER,
  id,
  name
});



export const messageReceived = (message, author, userFrom) => ({
  type: types.MESSAGE_RECEIVED,
  id: nextMessageId++,
  message,
  author,
  userFrom
})

export const populateUsersList = users => ({
  type: types.USERS_LIST,
  users
})