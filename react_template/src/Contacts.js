import React, { Component } from 'react';
import './css/Contacts.css';

class Contacts extends Component{
  render(){
    return(
      <section id = "contact">
          <div className = "container text-center">
               <div className = "col-md-12">
                   <div className = "mycontact">
                     <h2>We <i class = "fa fa-heart"></i> new friends!</h2>
                   </div>
                   <ul className = "social-media">
                      <li className = "tw"><i class="fa fa-twitter"></i></li>
                      <li className = "fb"><i class="fa fa-facebook"></i></li>
                      <li className = "gp"><i class="fa fa-google-plus"></i></li>
                   </ul>
               </div>
          </div>
      </section>
    );
  }
}

export default Contacts;
