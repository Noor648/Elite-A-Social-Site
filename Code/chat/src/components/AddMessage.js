import React from 'react';
import PropTypes from 'prop-types';
import { ACTIVE_USER } from '../utils/user';

const AddMessage = (props) => {
  let input

  return (
    <section id="new-message">
      <input
        placeholder='Type a message'
        autoFocus
        onKeyPress={(e) => {
        if (e.key === 'Enter') {
          if(input.value.trim() !== ''){
            props.dispatch(input.value, ACTIVE_USER, props.userFrom)
          }
          input.value = ''
        }
      }}
        type="text"
        ref={(node) => {
        input = node
      }}
      />
    </section>
  )
}

AddMessage.propTypes = {
  dispatch: PropTypes.func.isRequired
}

export default AddMessage

