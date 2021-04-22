import { connect } from 'react-redux'
import AddMessageComponent from '../components/AddMessage'
import { addMessage } from '../actions'

const mapDispatchToProps = dispatch => ({
  dispatch: (message, author, userFrom) => {
    dispatch(addMessage(message, author, userFrom));
  }
})

export const AddMessage = connect(() => ({}), mapDispatchToProps)(AddMessageComponent)