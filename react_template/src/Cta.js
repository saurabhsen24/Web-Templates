import React, { Component } from 'react';
import './css/Cta.css'

class Cta extends Component{
  render(){
    return(
      <section id = "cta">
      <div className = "overlay">
      <div className = "container">
        <div className = "col-md-12">
            <div classname = "mycta">
               <h3 className = "content1">Stop waiting.<br/>
                    Start building.</h3>
              <div className = "myBtn-1">
                 <button type = "button" className = "btn btn-default btn-xl mybtn">let's get started !</button>
              </div>
            </div>
            </div>
        </div>
      </div>
      </section>
    );
  }
}

export default Cta;
