import React, { Component } from 'react';
import './../css/home.css';

class Menu extends Component {
  render() {
    return (
      <div className="Navigation"> 
         <ul className="navigation">
            <li>Home</li>
            <li>About</li>
            <li>Recipies</li>
         </ul>
      </div>
    );
  }
}

export default Menu;


