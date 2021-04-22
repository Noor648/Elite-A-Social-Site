import * as types from '../constants/ActionTypes'

const initialState = {
  currentUser: {},
  list: []
}

const users = (state = initialState, action) => {
  switch (action.type) {
    case types.SET_CURRENT_USER:
      return { ...state, currentUser: { name: action.name, id: action.id } };
    case types.ADD_USER:
      return { ...state, list: state.list.concat([{ name: action.name, id: action.id }]) }
    case types.USERS_LIST:
      return { ...state, list: action.users}
    default:
      return state
  }
}

export default users