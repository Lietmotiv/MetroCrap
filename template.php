        <div class="page-region">
                <div class="page-region-content tiles">
                    <div class="tile-group">
                        <a  href="http://cbmcpa.com/int/staff-schedules/" class="tile image outline-color-white">
        
                            <div class="tile icon bg-color-orangeDark">
                                <div class="tile-content">
                                    <i class="icon-clock"></i>
                                </div>
                                
                                <div class="brand">
                                    <span class="name">Staff Schedules</span>
                                </div>
                            </div>
                        </a>
                             <a  href="http://cbmcpa.com/int/forms/star-buck/" class="tile image outline-color-white">
                      
                            <div class="tile image">
                                <div class="tile-content">
                                    <img src="/images/starbucks.jpg">
                                </div>
                              
                           </div>
                    </a>
                        
                       <a  href="http://cbmcpa.com/int/phone-list/" class="tile image outline-color-white">
                      
                            <div class="tile icon bg-color-orangeDark">
                            <div class="tile-content">
                                <i class="icon-phone"></i>
                            </div>
                            <div class="brand">
                                <span class="name">Phone List</span>
                            </div>
                        </div>
                    </a>               
            
        
                        <div class="tile double bg-color-red" data-role="tile-slider" data-param-period="5000" data-param-direction="left">
        <?php
		
					$limit = $z;
					
					for($x=0;$x<$limit;$x++) {
						$title = str_replace(' & ', ' &amp; ', $feed[$x]['title']);
						$link = $feed[$x]['link'];
						$description = $feed[$x]['desc'];
						$cat = $feed[$x]['cat'];	
						echo '<div class="tile-content"><h2>'.$title.'</h2>';
						echo '<h5>'.$cat.'</h5>';
						echo '<p>'.$description.'</p></div>';
					}
							
                       
        ?>
                            
                           
                            <div class="brand">
                                <div class="badge bg-color-blue"><?php echo $x; ?></div>
                                <i class="icon-comments-5"></i>
                            </div>
                        </div>
                              
                       <a  id="outlookweb" href="https://mail.cbmcpa.com/owa" class="tile image outline-color-white">
                                    <div class="tile icon bg-color-orangeDark" >
                                        <div class="tile-content">
                                            <img src="/images/Mail128.png"/>
                                        </div>
                                        <div class="brand">
                                            <div class="name">Outlook Web</div>
                                        </div>
                                    </div>
                            </a>            
                    <a  href="http://cbmcpa.com/int/calendar/" class="tile image outline-color-white">
                      
                            <div class="tile icon bg-color-orangeDark">
                            <div class="tile-content">
                                <i class="icon-calendar"></i>
                            </div>
                            <div class="brand">
                                <span class="name">CBM Events</span>
                            </div>
                        </div>
                    </a>
                              <a  href="http://cbmcpa.com/int/go-to-list-2/" class="tile image outline-color-white">
                      
                            <div class="tile icon bg-color-red">
                                <div class="tile-content">
                                    <i class="icon-help"></i>
                                </div>
                                <div class="brand">
                                    <span class="name">Go to List</span>
                                </div>
                           </div>
                    </a>  
                    <a  href="http://cbmcpa.com/int/it-tech-support/" class="tile image outline-color-white">
                      
                            <div class="tile icon bg-color-red">
                            <div class="tile-content">
                                <i class="icon-laptop"></i>
                            </div>
                            <div class="brand">
                                <span class="name">IT Tech Support</span>
                            </div>
                        </div>
                    </a>
        
        
                    </div>
        
        
                
        <div class="tile-group">
        <div class="tile double image">
                            <div class="tile-content">
                                <img src="/images/comm.jpg" alt="" />
                            </div>
                            <div class="brand bg-color-darken">
                                <img class="icon" src="/images/Rss128.png" style="display:none;"/>
                                <p class="text">Committees</p>
                            </div>
                        </div>
            <a  href="http://cbmcpa.com/int/automotive-committee/" class="tile image outline-color-orange">
                      
                            <div class="tile icon bg-color-darken">
                            <div class="tile-content">
                                <i class="icon-cars"></i>
                            </div>
                            <div class="brand">
                                <span class="name">Auto</span>
                            </div>
                        </div>
                    </a>
                <a  href="http://cbmcpa.com/int/construction-committee/" class="tile image outline-color-orange">
                      
                            <div class="tile icon bg-color-darken">
                            <div class="tile-content">
                                <i class="icon-wrench"></i>
                            </div>
                            <div class="brand">
                                <span class="name">Construction</span>
                            </div>
                        </div>
                    </a>
                    
                    <a  href="http://cbmcpa.com/int/tax-committee/" class="tile image outline-color-orange">
                      
                            <div class="tile icon bg-color-darken">
                            <div class="tile-content">
                                <i class="icon-pie"></i>
                            </div>
                            <div class="brand">
                                <span class="name">Tax</span>
                            </div>
                        </div>
                    </a>
                    
                    <a  href="http://cbmcpa.com/int/not-for-profit-commitee/"  class="tile image outline-color-orange">
                      
                            <div class="tile icon bg-color-darken">
                            <div class="tile-content">
                                <i class="icon-accessibility"></i>
                            </div>
                            <div class="brand">
                                <span class="name">NFP</span>
                            </div>
                        </div>
                    </a>
                     <a  href="http://cbmcpa.com/int/internal-committees/" class="tile image outline-color-orange">
                      
                            <div class="tile icon bg-color-darken">
                            <div class="tile-content">
                                <i class="icon-enter"></i>
                            </div>
                            <div class="brand">
                                <span class="name">Internal</span>
                            </div>
                        </div>
                    </a>
        </div>
        
        <div class="tile-group">
                      
                        <div class="tile triple image">
                            <div class="tile-content">
                            <a href="http://cbmcpa.com/int/forums/forum/myplace-discussions/" >
                                <img src="/images/networks.jpg" alt="" />
                                </a>
                            </div>
                            <div class="brand bg-color-blue">
                                <img class="icon" src="/images/Rss128.png" style="display:none;"/>
                                <p class="text">Discussion Board</p>
                            </div>
                        </div>
                    
                       <a  href="http://www.employeenavigator.com" target="_blank" class="tile image outline-color-white">
                      
                            <div class="tile icon bg-color-blue">
                                <div class="tile-content">
                                    <i class="icon-compass"></i>
                                </div>
                                <div class="brand">
                                    <span class="name">Employee Navigator</span>
                                </div>
                           </div>
                    </a>
                   <a  href="http://cbmcpa.com/int/forms/"  class="tile image outline-color-white">
                      
                            <div class="tile icon bg-color-blue">
                                <div class="tile-content">
                                    <i class="icon-cabinet"></i>
                                </div>
                                <div class="brand">
                                    <span class="name">Forms</span>
                                </div>
                           </div>
                    </a>    
                  <a  href="http://cbmcpa.com/int/forms/vacation-excused-time-request-form/"  class="tile image outline-color-white">
                      
                            <div class="tile icon bg-color-blue">
                                <div class="tile-content">
                                    <i class="icon-smiley"></i>
                                </div>
                                <div class="brand">
                                    <span class="name">Vacation Request</span>
                                </div>
                           </div>
                    </a>   
        
                                 <a  href="http://www.principal.com" target="_blank" class="tile image outline-color-white">
                      
                            <div class="tile icon bg-color-purple">
                            <div class="tile-content">
                                <i class="icon-stats-up"></i>
                            </div>
                            <div class="brand">
                                <span class="name">401K</span>
                            </div>
                        </div>
                    </a>
                    
                   <a  href="http://cbmcpa.com/int/forms/758-2/"  class="tile image outline-color-white">
                      
                            <div class="tile image bg-color-purple">
                            <div class="tile-content">
                                    <img src="/images/dollar.png" width="34" height="67" style="margin-top: 37px;margin-left: 57px; max-height:67px;max-width:34px;min-height:34px;">
                            </div>
                            <div class="brand">
                                <span class="name">Expense Reports</span>
                            </div>
                        </div>
                    </a> 
        
                  <a  href="#" target="_blank" class="tile image outline-color-white">
                      
                            <div class="tile icon bg-color-blue">
                                <div class="tile-content">
                                    <i class="icon-grid-view"></i>
                                </div>
                                <div class="brand">
                                    <span class="name">Org Chart</span>
                                </div>
                           </div>
                    </a>  
                        <a  href="http://cbmcpa.com/int/resource-library/" class="tile image outline-color-white">  
                            <div class="tile icon bg-color-blueDark">
                            <div class="tile-content">
                                <i class="icon-bookmark-4"></i>
                            </div>
                            <div class="brand">
                                <span class="name">Resource Library</span>
                            </div>
                        </div>
                        </a>
                        <a  href="http://cbmcpa.com/int/marketing-materials/" class="tile image outline-color-white">
                      
                            <div class="tile icon bg-color-blue">
                            <div class="tile-content">
                                <i class="icon-cart"></i>
                            </div>
                            <div class="brand">
                                <span class="name">Marketing Materials</span>
                            </div>
                        </div>
                    </a>
                                   <a  href="http://cbmcpa.com/int/production/" class="tile image outline-color-white">
                      
                            <div class="tile icon bg-color-red">
                            <div class="tile-content">
                                <i class="icon-attachment"></i>
                            </div>
                            <div class="brand">
                                <span class="name">Production</span>
                            </div>
                        </div>
                    </a>
                          
                    
        
                    </div>
        
        
        
                   
        <div class="tile-group">
        <a  href="http://cbmcpa.com/int/hr-information/"  class="tile image outline-color-orange">
                      
                            <div class="tile icon bg-color-darken">
                            <div class="tile-content">
                                <i class=" icon-folder-2"></i>
                            </div>
                            <div class="brand">
                                <span class="name">HR Information</span>
                            </div>
                        </div>
                    </a>
                <a  href="http://cbmcpa.com/int/cbm-bonus-program/"  class="tile image outline-color-white">
                      
                            <div class="tile icon bg-color-purple">
                            <div class="tile-content">
                                <i class="icon-trophy"></i>
                            </div>
                            <div class="brand">
                                <span class="name">CBM Bonus Program</span>
                            </div>
                        </div>
                    </a>
                    
                    <a  href="http://cbmcpa.com/int/training-info/"  class="tile image outline-color-white">
                      
                            <div class="tile icon bg-color-purple">
                            <div class="tile-content">
                                <i class="icon-keyboard"></i>
                            </div>
                            <div class="brand">
                                <span class="name">Training Info</span>
                            </div>
                        </div>
                    </a>
                    
                    <a  href="http://cbmcpa.com/int/careers/"  class="tile image outline-color-white">
                      
                            <div class="tile icon bg-color-purple">
                            <div class="tile-content">
                                <i class="icon-briefcase"></i>
                            </div>
                            <div class="brand">
                                <span class="name">Careers</span>
                            </div>
                        </div>
                    </a>
        </div>
                    <div class="tile-group">
                   <a  href="http://www.cbmcpa.com"  class="tile image outline-color-white">
                      
                            <div class="tile icon bg-color-red">
                                <div class="tile-content">
                                    <i class="icon-bookmark-4"></i>
                                </div>
                                <div class="brand">
                                    <span class="name">CBM Website</span>
                                </div>
                           </div>
                    </a>     
        
                        <a  href="http://www.google.com" target="_blank" class="tile image outline-color-white">
                      
                            <div class="tile icon bg-color-darken">
                                <div class="tile-content">
                                    <i class="icon-google"></i>
                                </div>
                                <div class="brand">
                                    <span class="name">Google</span>
                                </div>
                           </div>
                    </a>
                        <a  href="http://maps.google.com" target="_blank" class="tile image outline-color-white">
                      
                            <div class="tile icon bg-color-darken">
                                <div class="tile-content">
                                    <i class="icon-earth"></i>
                                </div>
                                <div class="brand">
                                    <span class="name">Google Maps</span>
                                </div>
                           </div>
                    </a>
                    
                        <a  href="http://www.linkedin.com/company/councilor-buchanan-&-mitchell-pc" target="_blank" class="tile image outline-color-white">
                      
                            <div class="tile icon bg-color-darken">
                                <div class="tile-content">
                                    <i class="icon-linkedin"></i>
                                </div>
                                <div class="brand">
                                    <span class="name">Linked In</span>
                                </div>
                           </div>
                    </a>
                <a  href="http://www.weather.com/weather/tenday/Bethesda+MD+USMD0034:1:US" class="tile image outline-color-white" target="_blank">
                      
                            <div class="tile icon bg-color-green">
                            <div class="tile-content">
                                <i class="icon-rainy-4"></i>
                            </div>
                            <div class="brand">
                               <div class="badge">--</div>
                                <span class="name">Weather</span>
                            </div>
                        </div>
                    </a>
                    <a  href="http://cnn.com" target="_blank" class="tile image outline-color-white">
                      
                            <div class="tile icon bg-color-green">
                                <div class="tile-content">
                                    <i class="icon-newspaper"></i>
                                </div>
                                <div class="brand">
                                    <span class="name">News</span>
                                </div>
                           </div>
                    </a>
                    
                        <a  href="http://wtop.com/?sid=&nid=871" target="_blank" class="tile image outline-color-white">
                      
                            <div class="tile icon bg-color-green">
                                <div class="tile-content">
                                    <i class="icon-bus"></i>
                                </div>
                                <div class="brand">
                                    <span class="name">Traffic</span>
                                </div>
                           </div>
                    </a>
                    <a  href="http://cbmcpa.com/int/suggestion-box/"  class="tile image outline-color-blueDark">
                      
                            <div class="tile icon bg-color-blueDark">
                            <div class="tile-content">
                                <i class="icon-comments"></i>
                            </div>
                            <div class="brand">
                                <span class="name">Suggestion Box</span>
                            </div>
                        </div>
                    </a>
                    
                     </div>
        
        
        
                    
        
                    
                </div>
            </div>