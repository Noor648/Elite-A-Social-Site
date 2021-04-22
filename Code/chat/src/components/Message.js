import React from "react"
import PropTypes from "prop-types"
import { ACTIVE_USER } from "../utils/user"

const Message = ({ message, author }) => (
  <div className={`Message ${ author == ACTIVE_USER ? 'me' : 'other'}`} >
    <div className="inner">
      
      <p>
        {message}
      </p>

    </div>
  </div>
)

Message.propTypes = {
  message: PropTypes.string.isRequired,
  author: PropTypes.string.isRequired
}

export default Message