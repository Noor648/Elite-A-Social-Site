import React, { useEffect, useState } from "react"
import { fetchMessages } from '../actions'

const Sidebar = ({ users, messages, dispatch }) => {

  
  return (
    <aside id="sidebar" className="sidebar">
    
    <div className='ActiveUser'>
      <h4>{users.currentUser.name}</h4>
    </div>
    <ul>
      {users.list.map( (user, i) => (
        <li 
        className={ user.id==messages.userFrom ? 'active' : ''} 
        key={user.id}
        onClick={() => {
          dispatch(fetchMessages(user.id));
        }}
        > 
        {user.name} 
        </li>
      ))}
    </ul>
  </aside>
  )
}

export default Sidebar