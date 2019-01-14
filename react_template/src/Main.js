import React, { Component } from 'react';
import './css/Main.css';
import badge1 from './img/google-play-badge.svg'
import badge2 from './img/app-store-badge.svg'


class Main extends Component{
  render(){
    return(
      <section id = "main">
        <div className = "container text-center">
           <div className = "col-md-12">
             <div className = "myMain">
              <h2>Discover what all the buzz is about!</h2>
              <p>Our app is available on any mobile device! Download now to get started!</p>
              <div className = "badge">
                 <img src = {badge1} width = "100%" height = "100%"/>
              </div>
              <div className = "badge">
                 <img src = {badge1} width = "100%" height = "100%"/>
              </div>              
              </div>
           </div>
        </div>
      </section>
    );
  }
}

export default Main;
