import React, { Component } from 'react';
import Header from './Header.js';
import Main from './Main.js';
import Features from './Features.js';
import Cta from './Cta.js';
import Contacts from './Contacts.js';

class App extends Component {
  render() {
    return (
      <div className="App">
         <Header/>
         <Main/>
         <Features/>
         <Cta/>
         <Contacts/>
      </div>
    );
  }
}

export default App;
