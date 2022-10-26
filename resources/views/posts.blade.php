<!DOCTYPE html>
<html>
    <head>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&family=Rubik:ital,wght@0,500;0,600;0,700;1,400&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="resources/css/app.css">
        <script
            type="module"
            src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"
        ></script>
        <script
            nomodule
            src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"
        ></script>
        <script defer src="resources/js/script.js"></script>
        <title>ReformsLab</title>
    </head>

    <body>
        <header class='header'> 
            <a href='#'> <img class="logo" alt="logo" src="resources/images/logo.png">
            </a>
            <nav class="main-nav">
                <ul class="main-nav-list">
                    <li><a class="main-nav-link active" href="#">Welcome</a></li>
                    <li><a class="main-nav-link" href="#">Work</a></li>
                    <li><a class="main-nav-link" href="#">Services</a></li>
                    <li><a class="main-nav-link" href="#">About</a></li>
                    <li><a class="main-nav-link" href="#">Contact</a></li>
                </ul>
            </nav>
        </header>
    
    <section class="hero-section"> 
            <div class="background-image">
                <div class="content">
                    <h1>Integral</h1><h2> One Page Theme</h2><p>A simple & elegant theme for professionals, agencies and businesses.
                    Create a stunning website in minutes.</p>   
                </div>
                <div class="buttons">
                    <a href="#" class="btn">VIEW FEATURES</a> <a href="#" class="btn-download">DOWNLOAD NOW</a>
                </div>
            </div>
    </section>

    <section class="feature-section">
        <div class="container">
        <div class="feature-box grid grid--3-cols">
            <div><div class="text-icon-box"><ion-icon name="paper-plane-outline" class="icon"></ion-icon><h2>Launch Your Business</h2></div><p>Quis autem vel eum iure reprehen derit qui in ea voluptate velit esse quam nihil molestiae consequatur.</p></div>
            <div><div class="text-icon-box"><ion-icon name="speedometer" class="icon"></ion-icon><h2>Optimized For Speed</h2></div><p>Quis autem vel eum iure reprehen derit qui in ea voluptate velit esse quam nihil molestiae consequatur.</p></div>
            <div><div class="text-icon-box"><ion-icon name="heart-outline" class="icon"></ion-icon><h2>Loved By Many</h2></div><p>Quis autem vel eum iure reprehen derit qui in ea voluptate velit esse quam nihil molestiae consequatur.</p></div>
            <div><div class="text-icon-box"><ion-icon name="laptop-outline" class="icon"></ion-icon><h2>Smooth Parallax Effect</h2></div><p>Quis autem vel eum iure reprehen derit qui in ea voluptate velit esse quam nihil molestiae consequatur.</p></div>
            <div><div class="text-icon-box"><ion-icon name="cog" class="icon"></ion-icon><h2>Theme Options Panel</h2></div><p>Quis autem vel eum iure reprehen derit qui in ea voluptate velit esse quam nihil molestiae consequatur.</p></div>
            <div><div class="text-icon-box"><ion-icon name="cart" class="icon"></ion-icon><h2>Woocommerce Compatible</h2></div><p>Quis autem vel eum iure reprehen derit qui in ea voluptate velit esse quam nihil molestiae consequatur.</p></div>
        </div>
    </div>
    </section>

    <section class="work-section">
        <div class="container">
            <div class="work-header-box">
                <ion-icon name="leaf" class="work-icon"></ion-icon>
                <h2 class="bigtitle"><span>Work</span></h2>
                <p class="subtitle">Donec nec justo eget felis facilisis fermentum. Aliquam dignissim felis auctor ultrices ut elementum.</p>
            </div>
            <div class="content-text">
                <p><strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam bibendum, libero eu rutrum feugiat.</strong></p>
                <p>Urna orci porta magna, id scelerisque neque nunc sit amet felis. Donec pellentesque tempus mauris, et feugiat magna pellentesque quis. Mauris in ultricies arcu. Vestibulum dolor ipsum, pretium et mollis sed, sollicitudin ac mi. Aliquam euismod erat in nunc suscipit auctor. Sed malesuada ante eu libero molestie ultrices. Duis varius mattis imperdiet. Nunc egestas, leo vel ultricies euismod, dui enim viverra est, ut pharetra quam justo et magna. Sed aliquam, libero pharetra venenatis posuere, justo mi feugiat leo, ut aliquet orci metus in nulla.</p>
                <p>Mauris mollis elementum fermentum. Donec id felis vitae arcu accumsan consequat. Praesent nibh urna, viverra vel volutpat vel, mollis eu magna. Praesent libero magna, volutpat vel ultrices malesuada, rutrum vel elit. In luctus mi id magna tincidunt aliquet. Sed eu tortor nisl, eu viverra mauris. Cras pellentesque ultricies volutpat.</p>
            </div>
        </div>
    </section>

    <section class="project-section">
        <div class="container">
            <div class="project-box">
                <div class="project-title">
                    <h2>Projects</h2>
                    <span></span>
                </div>

                <div class="slider box-shadow">
                    <div class="slide"><img src="resources/images/slide1-1.jpg" alt="inventory"></div>
                    <div class="slide"><img src="resources/images/slide2-1.jpg" alt="inventory"></div>
                    <div class="slide"><img src="resources/images/slide3-1.jpg" alt="inventory"></div>

                    <button class="slider__btn slider__btn--left"><ion-icon name="chevron-back-outline"></ion-icon></button>
                    <button class="slider__btn slider__btn--right"><ion-icon name="chevron-forward-outline"></ion-icon></button>
                    <div class="dots"></div>
                </div>

                <div class="description">
                    <div class="des-left">
                        <p>Date: <span>01/02/2016</span></p><p>Client: <span>ABC Company</span></p><p>Skills: <span>Graphic Design, Photoshop, UX/UI</span></p><p><a target="_blank" href="#">View Project →</a></p>
                    </div>

                    <div class="des-right">
                        <p>Donec sed odio dui. Nulla vitae elit libero, a pharetra augue. Nullam id dolor id ultricies ut vehicula ut id. Integer posuere erat a venenatis dapibus posuere velit aliquet duis mollis. Pellentesque ornare sem lacinia quam venenatis vestibulum. 
                        <br>
                        <br>Aenean lacinia bibendum nulla sed consectetur. Cras mattis consectetur purus sit amet fermentum. Donec id elit non mi porta gravida at eget metus. 
                        <br>
                        <br>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="client-section ">
	    <div class="container">       
			<div class="project-title">			
				<h2 class="smalltitle">Our Clients<span></span></h2>
			</div>
                    <div class="clients">
                        <div class="client"><img src="https://demo.themely.com/integral/wp-content/uploads/2016/02/clients7.png" class="img-responsive center-block" alt=""></div>
                        <div class="client"><img src="https://demo.themely.com/integral/wp-content/uploads/2016/02/clients5.png" class="img-responsive center-block" alt=""></div>
                        <div class="client"><img src="https://demo.themely.com/integral/wp-content/uploads/2016/02/clients6.png" class="img-responsive center-block" alt=""></div>
                        <div class="client"><img src="https://demo.themely.com/integral/wp-content/uploads/2016/02/clients4.png" class="img-responsive center-block" alt=""></div>
                        <div class="client"><img src="https://demo.themely.com/integral/wp-content/uploads/2016/02/clients2.png" class="img-responsive center-block" alt=""></div>
                        <div class="client"><img src="https://demo.themely.com/integral/wp-content/uploads/2016/02/clients1.png" class="img-responsive center-block" alt=""></div>
                    </div>
        </div>
    </section>

    <section class="testimonial-section">
        <div class="testimonial-background">
            <div class="container"> 
                <div class="light-title">			
				    <h2 class="smalltitle">Testimonials<span></span></h2>
			    </div>
                    <div class="slider-2">
                        <div class="slide-2"><blockquote><p>People don't like to be meddled with. We tell that to do,    what to think. Don't run, don't walk. We're in their homes and in their heads and we haven't the right. We're meddlesome.</p>
                        </blockquote><small>River Tam, Sister – The Serenity</small></div>
                        <div class="slide-2"><blockquote><p>Come a day there won't be room for naughty men like us to slip about at all. This job goes south, there well may not be another. So here is us, on the raggedy edge. Don't push me, and I won't push you.</p>
                        </blockquote><small>Malcolm Reynolds, Captain – The Serenity</small></div>
                        <div class="slide-2"><blockquote><p>I spent over 2 hours trying to customize another theme and had to scrap it. I spent less than 30 minutes on this theme and it was fun.  And the customer service has been fantastic!</p>
                        </blockquote><small>Priscilla Nunn, CEO – Your Training Partners</small>
                        </div>

                        <div class="dots2"></div>
                    </div>
            </div>
        </div>
    </section>
    
    <section class="service-section footer">
        <div class="container">
            <div class="footer-icon-box">
                <ion-icon class="contact-icon" name="rocket"></ion-icon>
                <h2 class="bigtitle_dark"><span>SERVICES</span></h2>
                <p class="subtitle">Donec nec justo eget felis facilisis fermentum. Aliquam dignissim felis auctor ultrices ut elementum.</p>
            </div>
            <div class="content-text-white">
                <p><strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam bibendum, libero eu rutrum feugiat.</strong></p>
                <p>Urna orci porta magna, id scelerisque neque nunc sit amet felis. Donec pellentesque tempus mauris, et feugiat magna pellentesque quis. Mauris in ultricies arcu. Vestibulum dolor ipsum, pretium et mollis sed, sollicitudin ac mi. Aliquam euismod erat in nunc suscipit auctor. Sed malesuada ante eu libero molestie ultrices. Duis varius mattis imperdiet. Nunc egestas, leo vel ultricies euismod, dui enim viverra est, ut pharetra quam justo et magna. Sed aliquam, libero pharetra venenatis posuere, justo mi feugiat leo, ut aliquet orci metus in nulla.</p>
                <p>Mauris mollis elementum fermentum. Donec id felis vitae arcu accumsan consequat. Praesent nibh urna, viverra vel volutpat vel, mollis eu magna. Praesent libero magna, volutpat vel ultrices malesuada, rutrum vel elit. In luctus mi id magna tincidunt aliquet. Sed eu tortor nisl, eu viverra mauris. Cras pellentesque ultricies volutpat.</p>
            </div>
            <div class="service-box">
                <div class="service">
                    <h3 class="service-heading">DESIGN</h3>
                    <ion-icon class="big-icon" name="brush"></ion-icon>
                    <p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla.</p>
                </div>
                <div class="service">
                    <h3 class="service-heading">DEVELOPMENT</h3>
                    <ion-icon class="big-icon" name="code-slash"></ion-icon>
                    <p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla.</p>
                </div>
                <div class="service">
                    <h3 class=service-heading">MARKETING</h3>
                    <ion-icon class="big-icon" name="bar-chart"></ion-icon>
                    <p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="action-section">
        <div class="bg-img"></div>
            <div class="container">
                <div class="action-box">
                    <h2>Call to Action</h2>
                    <p>Lorem ipsum veniam adipisicing cupidatat dolor do adipisicing commodo.</p>
                    <a href="#" class="btn-download">DOWNLOAD</a>
                </div>
            </div> 
    </section>

    <section class="work-section">
        <div class="container">
            <div class="work-header-box">
                <ion-icon name="person" class="work-icon"></ion-icon>
                <h2 class="bigtitle"><span>About</span></h2>
                <p class="subtitle">Donec nec justo eget felis facilisis fermentum. Aliquam dignissim felis auctor ultrices ut elementum.</p>
            </div>
            <div class="content-text">
                <p><strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam bibendum, libero eu rutrum feugiat.</strong></p>
                <p>Urna orci porta magna, id scelerisque neque nunc sit amet felis. Donec pellentesque tempus mauris, et feugiat magna pellentesque quis. Mauris in ultricies arcu. Vestibulum dolor ipsum, pretium et mollis sed, sollicitudin ac mi. Aliquam euismod erat in nunc suscipit auctor. Sed malesuada ante eu libero molestie ultrices. Duis varius mattis imperdiet. Nunc egestas, leo vel ultricies euismod, dui enim viverra est, ut pharetra quam justo et magna. Sed aliquam, libero pharetra venenatis posuere, justo mi feugiat leo, ut aliquet orci metus in nulla.</p>
                <p>Mauris mollis elementum fermentum. Donec id felis vitae arcu accumsan consequat. Praesent nibh urna, viverra vel volutpat vel, mollis eu magna. Praesent libero magna, volutpat vel ultrices malesuada, rutrum vel elit. In luctus mi id magna tincidunt aliquet. Sed eu tortor nisl, eu viverra mauris. Cras pellentesque ultricies volutpat.</p>
            </div>
        </div>
    </section>

    <section class="skill-section">
        <div class="container">
            <div class="project-title">			
				<h2 class="smalltitle">Skills<span></span></h2>
			</div>
            <div class="flex-box">
                <div class="left-box">
                                    <p>Graphic Design</p>                 <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: 40%;background-color:#5cb85c;">				     
                      </div>
                    </div>
                                    <p>Typography</p>                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: 60%; background-color:#5bc0de">				     
                      </div>
                    </div>
                                    <p>HTML / CSS</p>                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: 80%; background-color:#f0ad4e">				     
                      </div>
                    </div>
                                    <p>Programming</p>                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: 100%; background-color:#d9534f">				     
                      </div>
                    </div>                               
                </div>

                <div class="content-text right-box">
                    <p>Sed malesuada ante eu libero molestie ultrices. Duis varius mattis imperdiet. Nunc egestas, leo vel ultricies euismod, dui enim viverra est, ut pharetra quam justo et magna. Sed aliquam, libero pharetra venenatis posuere, justo mi feugiat leo, ut aliquet orci metus in nulla. Mauris mollis elementum fermentum.<p>
                    <p>Donec id felis vitae arcu accumsan consequat. Praesent nibh urna, viverra vel volutpat vel, mollis eu magna. Praesent libero magna, volutpat vel ultrices malesuada, rutrum vel elit. In luctus mi id magna tincidunt aliquet. Sed eu tortor nisl, eu viverra mauris. Cras pellentesque ultricies volutpat.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam bibendum, libero eu rutrum feugiat, urna orci porta magna, id scelerisque neque nunc sit amet felis.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="skill-section">
        <div class="container">
            <div class="project-title">			
				<h2 class="smalltitle">Our Team<span></span></h2>
			</div>

            <div class="team flex-box">
                <div class="teammate">
                    <img src="https://demo.themely.com/integral/wp-content/uploads/2016/02/about-pic.jpg" alt="Hans Desjarlais" class="img-circle img-responsive center-block">
                    <h3 class="t-name">Hans Desjarlais</h3>
                    <div class="t-type">Project Manager</div>
                    <div class="flex-social">
                        <ion-icon name="logo-facebook" class="social-link-person"></ion-icon>
                        <ion-icon name="logo-instagram" class="social-link-person"></ion-icon>
                        <ion-icon name="logo-twitter" class="social-link-person"></ion-icon>
                        <ion-icon name="logo-youtube" class="social-link-person"></ion-icon>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
                <div class="teammate">    
                    <img src="https://demo.themely.com/integral/wp-content/uploads/2016/02/about-pic2.jpg" alt="Janelle Brandon" class="img-circle img-responsive center-block">
                    <h3 class="t-name">Janelle Brandon</h3>
                    <div class="t-type">Graphic Designer</div>
                    <div class="flex-social">
                        <ion-icon name="logo-facebook" class="social-link-person"></ion-icon>
                        <ion-icon name="logo-instagram" class="social-link-person"></ion-icon>
                        <ion-icon name="logo-twitter" class="social-link-person"></ion-icon>
                        <ion-icon name="logo-youtube" class="social-link-person"></ion-icon>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
                <div class="teammate">
                    <img src="https://demo.themely.com/integral/wp-content/uploads/2016/02/about-pic3.jpg" alt="Eric Kelly" class="img-circle img-responsive center-block">
                    <h3 class="t-name">Eric Kelly</h3>
                    <div class="t-type">Senior Programmer</div>
                    <div class="flex-social">
                        <ion-icon name="logo-facebook" class="social-link-person"></ion-icon>
                        <ion-icon name="logo-instagram" class="social-link-person"></ion-icon>
                        <ion-icon name="logo-twitter" class="social-link-person"></ion-icon>
                        <ion-icon name="logo-youtube" class="social-link-person"></ion-icon>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="blog-section">
        <div class="container">
            <div class="project-title">			
				<h2 class="smalltitle">From Our Blog<span></span></h2>
			</div>
                <div class="blog">
                    <div class="blog-1">
                           <a href="#"><img src="https://demo.themely.com/integral-lite/wp-content/uploads/2016/04/post1-1-720x360.jpg"></a>
                        <div class="home-blog">            
                            <h3><a href="#" title="Prepping For Client Work And Meetings">Prepping For Client Work And Meetings</a></h3>
                            <p class="date">March 16, 2016<p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.&nbsp;Aliquam bibendum, libero eu rutrum feugiat, urna orci porta magna, id scelerisque neque…</p>
                        </div>
                    </div>
                    <div class="blog-1">
                           <a href="#"><img src="https://demo.themely.com/integral-lite/wp-content/uploads/2016/04/post2-1-720x360.jpg"></a>
                        <div class="home-blog">            
                            <h3><a href="#" title="Prepping For Client Work And Meetings">Becoming An Expert In Your Field</a></h3>
                            <p class="date">February 16, 2016<p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.&nbsp;Aliquam bibendum, libero eu rutrum feugiat, urna orci porta magna, id scelerisque neque…</p>
                        </div>
                    </div>
                    <div class="blog-1">
                           <a href="#"><img src="https://demo.themely.com/integral-lite/wp-content/uploads/2016/04/post3-1-720x360.jpg"></a>
                        <div class="home-blog">            
                            <h3><a href="#" title="Prepping For Client Work And Meetings">Just Some Light Reading Material</a></h3>
                            <p class="date">January 16, 2016<p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.&nbsp;Aliquam bibendum, libero eu rutrum feugiat, urna orci porta magna, id scelerisque neque…</p>
                        </div>
                    </div>
                </div>
            <div class="btn-box">			
                <p class="text-center">
                    <a href="#" class="btn-blog">Read the blog →</a>
                </p>			
            </div>
        </div>
    </section>

    <section class="newsletter-section">
        <div class="bg-img-form"></div>
            <div class="container">
                <div class="action-box">
                    <h2>Newsletter Form</h2>
                    <p>Display a small newsletter subscription form. Integrates with services such as MailChimp and ConstantContact.</p>
                    <div class="mail-box"><input id="EMAIL" class="required email" name="EMAIL" type="email" value="" placeholder="Email Address"></div>
                    <a href="#" class="btn-download">SUBSCRIBE</a>
                </div>
            </div> 
    </section>

        <footer class="footer">
            <div class="container">
                <div class="footer-icon-box">
                    <ion-icon class="contact-icon" name="mail"></ion-icon>
                    <h2 class="bigtitle_dark"><span>Contact</span></h2>
                    <p class="subtitle">Donec nec justo eget felis facilisis fermentum. Aliquam dignissim felis auctor ultrices ut elementum.</p>
                    <p class="footer-text">Donec pellentesque tempus mauris, et feugiat magna pellentesque quis. Mauris in ultricies arcu. Vestibulum dolor ipsum, pretium et mollis sed, sollicitudin ac mi. Aliquam euismod erat in nunc suscipit auctor. Sed malesuada ante eu libero molestie ultrices. Duis varius mattis imperdiet.</p>
                </div>

                <div class="grid grid--2-cols">
                    <div class="company-info">
                        <p class="footer-heading">CONTACT INFO</p>
                        <div class="footer-left-box"><div class="adress-box">
                        <ion-icon name="call" class="footer-icon"></ion-icon><p class="footer-p"> +1 323 456 7891</p></div>
                        <div class="adress-box">
                        <ion-icon name="mail" class="footer-icon"></ion-icon><p class="footer-p"> hello@yourwebsite.com </p></div>
                        <div class="adress-box">
                        <ion-icon name="home" class="footer-icon"></ion-icon><p class="footer-p"> 1 Pacific Ave, Suite 100
                                                Santa Monica, CA 90210
                                                United States 
                            </p>
                        </div>

                       </div>
                       <ion-icon name="logo-facebook" class="social-link"></ion-icon>
                        <ion-icon name="logo-instagram" class="social-link"></ion-icon>
                        <ion-icon name="logo-twitter" class="social-link"></ion-icon>
                        <ion-icon name="logo-youtube" class="social-link"></ion-icon>

                    </div>
            
                <form class="form">
                <p><label> Your Name (required)<br>
    <span data-name="your-name"><input type="text" name="your-name" value="" size="40" aria-required="true" aria-invalid="false"></span> </label></p>

    <p><label> Your Email (required)<br>
    <span  data-name="your-email"><input type="email" name="your-email" value="" size="40" aria-required="true" aria-invalid="false"></span> </label></p>  

    <p><label> Subject<br>
    <span data-name="your-subject"><input type="text" name="your-subject" value="" size="40"aria-invalid="false"></span> </label></p>

    <p><label> Your Message<br>
    <span  data-name="your-message"><textarea name="your-message" cols="40" rows="10"  aria-invalid="false"></textarea></span> </label></p>

    <p><input class="form-btn" type="submit" value="Send" ><span></span></p>
                </form>
            </div>
        </footer>
    </body>
</html>
