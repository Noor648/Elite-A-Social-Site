import React, {useEffect, useState} from "react"
import PropTypes from "prop-types"
import Message from "./Message"


function MessagesList ({ messages }) {
  let messagesList;
  let val;

  useEffect(()=>{
    messagesList.scrollTop = messagesList.scrollHeight;
  });


  return (
    <section 
    id="messages-list"
    ref={(node) => messagesList=node}
    >
      <ul>
{/* 
        <li>
          {val}
        </li> */}
      {messages[messages.userFrom].map(message => (
        <Message
        key={message.id}
        {...message}
        />
      ))}
      </ul>
    </section>
  );
}

// MessagesList.propTypes = {
//   messages: PropTypes.arrayOf(
//     PropTypes.shape({
//       id: PropTypes.number.isRequired,
//       message: PropTypes.string.isRequired,
//       author: PropTypes.string.isRequired
//     }).isRequired
//   ).isRequired
// }

export default MessagesList