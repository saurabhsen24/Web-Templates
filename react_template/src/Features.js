import React, { Component } from 'react';
import './css/Features.css'
import mobile from './img/demo-screen-1.jpg'

class Features extends Component{
  render(){
    return(
      <section id = "features">
        <div className = "container text-center">
            <div className = "col-md-12">
              <div className = "myFeature">
                  <h2>Unlimited Features, Unlimited Fun</h2>
                  <p>Check out what you can do with this app theme!</p>
               </div>
               <div className = "col-md-4">
                  <div className = "iphone">
                    <img src = {mobile} width = "88%" height = "79%" className = "mobileImg1"/>
                  </div>
               </div>
               <div className = "col-md-8">
                  <div className = "logos">
                      <div className = "col-md-6">
                          <div className = "logo">
                             <i class="fa fa-mobile fa-9x" aria-hidden="true"></i>
                             <h3>Device Mockups</h3>
                             <p>Ready to use HTML/CSS device mockups, no Photoshop required!</p>
                          </div>
                      </div>
                      <div className = "col-md-6">
                         <div className = "logo">
                           <i class="fa fa-camera fa-9x" aria-hidden="true"></i>
                           <h3>Flexible Use</h3>
                           <p>Put an image, video, animation, or anything else in the screen!</p>
                        </div>
                      </div>
                      <div className = "col-md-6">
                         <div className = "logo">
                           <i class="fa fa-gift fa-9x" aria-hidden="true"></i>
                           <h3>Free to Use</h3>
                           <p>As always, this theme is free to download and use for any purpose!</p>
                        </div>
                      </div>
                      <div className = "col-md-6">
                         <div className = "logo">
                           <i class="fa fa-lock fa-9x" aria-hidden="true"></i>
                           <h3>Open Source</h3>
                           <p>Since this theme is MIT licensed, you can use it commercially!!</p>
                        </div>
                      </div>
                  </div>
               </div>
            </div>
        </div>
      </section>
    );
  }
}

export default Features;
