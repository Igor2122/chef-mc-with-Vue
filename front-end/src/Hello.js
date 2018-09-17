import React, { Component } from 'react';

// should be named same as class 
import './Hello.css';

function formatHi(stmt) {
   return stmt.firstWord + ' ' + stmt.lastWord + '!';
}



const stmt = {
   firstWord: 'New Element',
   lastWord: 'React JS'
};

const Myelement = (
   <header className="Hello-header">
       <h1 className="Hello-title">
         {formatHi(stmt)}!
       </h1>
   </header>
);


// New Elements



function formatDate(date) {
   return date.toLocaleDateString();
 }

function Avatar(props) {
   return (
     <img className="Avatar"
          src={props.user.avatarUrl}
          alt={props.user.name} />
   );
}

function UserInfo(props) {
   return (
     <div className="UserInfo">
       <Avatar user={props.user} />
       <div className="UserInfo-name">
         {props.user.name}
       </div>
     </div>
   );
}

function Comment(props) {
   return (
     <div className="Comment">
       <UserInfo user={props.author} />
       <div className="Comment-text">
         {props.text}
       </div>
       <div className="Comment-date">
         {formatDate(props.date)}
       </div>
     </div>
   );
}

const comment = {
   date: new Date(),
   text: 'I hope you enjoy learning React over and over!',
   author: {
     name: 'Hello Cool Kitty',
     avatarUrl: 'https://images.pexels.com/photos/20787/pexels-photo.jpg?auto=compress&cs=tinysrgb&h=350'
   }
};









class Hello extends Component {
  render() {
    return (
      <div className="App">
        <header className="App-header">
          
          <h1 className="App-title">Hello World</h1>
        <p className="App-intro">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis molestiae quisquam laborum neque deleniti temporibus nemo inventore nulla accusamus ipsum.
        </p>
        <h2>{this.props.message}</h2>
        </header>
        {Myelement}
        <Comment
           date={comment.date}
           text={comment.text}
           author={comment.author} />
      </div>
    );
  }
}





export default Hello;
