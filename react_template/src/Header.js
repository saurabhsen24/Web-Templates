import React, { Component } from 'react';
import './css/Header.css'
import mobile from './img/demo-screen-1.jpg'

class Header extends Component{
  render(){
    return (
      <section id = "header">
      <nav className="navbar navbar-default">
          <div className="container">
             <div className="navbar-headert">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
                </button>
              <a className="navbar-brand" href="#">Start Bootstrap</a>
           </div>
           <div class="collapse navbar-collapse" id="myNavbar">
           <ul className="nav navbar-nav navbar-right">
               <li><a href="#">DOWNLOAD</a></li>
               <li><a href="#">FEATURES</a></li>
               <li><a href="#">CONTACTS</a></li>
           </ul>
           </div>
        </div>
     </nav>
     <div className = "container">
        <div className = "col-md-12">
            <div className = "col-md-6">
             <h3 className = "content">New Age is an app landing page that will help you beautifully showcase your new mobile app, or anything else!</h3>
             <div className = "myBtn">
             <button type = "button" className = "btn btn-default btn-xl mybtn">start now for free !</button>
             </div>
            </div>
            <div className = "col-md-6">
              <div className = "iphone">
                <img src = {mobile} width = "88%" height = "79%" className = "mobileImg"/>
              </div>
            </div>
        </div>
     </div>
     </section>
    );
  }
}

export default Header;
