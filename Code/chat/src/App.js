import React from 'react';
import './App.css';

import { Sidebar } from './containers/Sidebar'
import Main from './components/Main'

function App() {
  return (
    <div id="container">
      <Sidebar />
      <Main />
    </div>
  );
}

export default App;
