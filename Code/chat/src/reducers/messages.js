import {ACTIVE_USER} from '../utils/user';

const messages = (state = {}, action) => {
    switch (action.type) {
      case 'POPULATE_MESSAGES':
        return {...state, userFrom: action.author, [action.author]: action.messages }
      
      case 'ADD_MESSAGE':
      case 'MESSAGE_RECEIVED':
        // let channel = message.userFrom == action.userFrom ? action.userFrom : action.author;
        let channel = action.userFrom == ACTIVE_USER ? action.author : action.userFrom;
        console.log(action);
        console.log(channel)
        if(!state[channel]){
          state[channel] = [];
        }

        return {...state, [channel]: state[channel].concat([
          {
            message: action.message,
            author: action.author,
            id: action.id
          }
        ])}
        
      default:
        return state
    }
  }
  
  export default messages