import React, { Component } from 'react';
import './App.css';

import logo from './media/logo.png';


import Menu from './components/menu';
import CenterContent from './components/CenterContent';


class App extends Component {
  render() {
    return (
    <div className="App">  
      <Menu/>
      <div className="container">
        <div className="row">
          <div className="col-md-4">
            <img src={logo} className="App-logo" alt="logo" />
            <CenterContent/>
          </div>
          <div className="col-md-8"></div>
        </div>
      </div>
    </div>
    );
  }
}

export default App;
