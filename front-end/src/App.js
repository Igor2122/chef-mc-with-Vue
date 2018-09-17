import React, { Component } from 'react';
import logo from './logo.svg';
import './css/Hello.css';




import Hello  from './Hello';
// import HomeDiv from './homeComp/HomeDiv';

class App extends Component {
  render() {
    return (
      <div className="App">
        {/* <HomeDiv></HomeDiv> */}
        <Hello />
      </div>
    );
  }
}

export default App;
