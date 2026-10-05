<!DOCTYPE html>
<html lang="en" dir="ltr">

    @include('website.layout.head')
    <body id="top-header" class="loading">
        <div class="loader"><img src="assets/frontend/img/loader.html"></div>
        <!-- start header -->
<div id="wrapper">
    <!-- start header -->    
        @include('website.layout.header')


    <div class="contents">

    <!-- Content Section -->
    <div class="contents">
            
    
        <section class="page-header custom-header"  style="background-image:url(../d3ahzzdje1trpm.cloudfront.net/assets/images/banner/contact-banner.jpg);" >
       <div class="container">
          <div class="row justify-content-center">
             <div class="col-lg-8">
                 <div class="page-header-content">
                    
                                              <h1>Contact Us</h1>
                                                              
                                 </div>
             </div>
          </div>
       </div>
    </section>    
    
        
             <section class="address-section section-padding">
                <div class="container">
                    <div class="address-wrapper row align-item-strech justify-content-center">
                                            
                        <div class="col-xl-4 col-lg-4 col-sm-6 col-12">
                            <div class="white-box address-box text-center">
                                <div class="icon-overlap"><i class="bi bi-location-pointer"></i></div>
                                <div class="address-content">
                                    <h3>Campus</h3>
                                    <p>19th Kilometer Stone, Sultanpur Road, Gosainganj, Lucknow-226501(U.P)</p>
                                    <div class="contact-details text-left">
                                        <p class="mb-0"><i class="fas fa-envelope mr-2"></i><span>admission@smslucknow.ac.in, info@smslucknow.ac.in</span></p>
                                        <p class="mb-0"><i class="fas fa-phone mr-2"></i><span>09792633331, 09506033170</span></p>
                                        <p class="mb-0"><i class="fas fa-fax mr-2"></i><span>0522-2237273</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                                            
                        <div class="col-xl-4 col-lg-4 col-sm-6 col-12">
                            <div class="white-box address-box text-center">
                                <div class="icon-overlap"><i class="bi bi-location-pointer"></i></div>
                                <div class="address-content">
                                    <h3>City Office</h3>
                                    <p>Sky Hi Chamber, 2nd Floor, 5 Park Road,Hazratganj, Lucknow-226001(U.P.)</p>
                                    <div class="contact-details text-left">
                                        <p class="mb-0"><i class="fas fa-envelope mr-2"></i><span>admission@smslucknow.ac.in, info@smslucknow.ac.in</span></p>
                                        <p class="mb-0"><i class="fas fa-phone mr-2"></i><span>09506633331, Landline: 0522-4341777</span></p>
                                        <p class="mb-0"><i class="fas fa-fax mr-2"></i><span></span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                                            
                        <div class="col-xl-4 col-lg-4 col-sm-6 col-12">
                            <div class="white-box address-box text-center">
                                <div class="icon-overlap"><i class="bi bi-location-pointer"></i></div>
                                <div class="address-content">
                                    <h3>Noida Office</h3>
                                    <p>B-93, Second floor, Sector 65, Noida, 201307</p>
                                    <div class="contact-details text-left">
                                        <p class="mb-0"><i class="fas fa-envelope mr-2"></i><span>admission@smslucknow.ac.in, info@smslucknow.ac.in</span></p>
                                        <p class="mb-0"><i class="fas fa-phone mr-2"></i><span>09506633331</span></p>
                                        <p class="mb-0"><i class="fas fa-fax mr-2"></i><span></span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                                        </div>
                </div>
            </section>
                
    
            @if(session('success'))
            <div class="alert alert-success">
                {{session('success')}}
            </div>
            @endif
            
        <section id="cnt-section" class="contact-info section-padding pt-0">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6">
                    <div class="section-heading center-heading">
                        <span class="subheading">Contact Us</span>
                        <h3>Have any query?</h3>
                        
                                            <p>School of Management Sciences, Lucknow</p>
                                        </div>
                </div>
            </div>
           
            <div class="row justify-content-center">
                <div class="col-lg-4">
                    <div class="row">
                        <div class="col-lg-12 col-md-6">
                            <div class="contact-item">
                                <p>Email Us</p>
                                                            <h4><a href="mailto:info@smslucknow.ac.in">info@smslucknow.ac.in</a></h4>
                                                        </div>
                        </div>
                         <div class="col-lg-12 col-md-6">
                            <div class="contact-item">
                                <p>Make a Call</p>
                                                            <h4><a href="tel:+91-9506033170">+91-9506033170</a></h4>
                                                        </div>
                        </div>
                         <div class="col-lg-12 col-md-6">
                            <div class="contact-item">
                                <p>Corporate Office</p>
                                                            <h4>Sky Hi Chamber, 2nd Floor, 5 Park Road, Hazratganj, Lucknow-226001(U.P.)</h4>
                                                        </div>
                        </div>
                    </div>
                </div>
               
    
                <div class="col-lg-8">
                    <form method="POST" action="{{route('contact.store')}}" accept-charset="UTF-8" class="contact__form contactForm" id="contactForm">
                        @csrf
                        <div class="row">
                           <div class="col-12">
                               <div class="alert alert-success contact__msg" style="display: none" role="alert">
                                   Your message was sent successfully.
                               </div>
                           </div>
                       </div>
    
                       <div class="row">
                           <div class="col-lg-6">
                               <div class="form-group">
                                   <input type="text" id="name" name="name" class="form-control" placeholder="Your Name">
                               </div>
                           </div>
                           <div class="col-lg-6">
                               <div class="form-group">
                                   <input type="text" name="email"  id="email" class="form-control" placeholder="Email Address">
                               </div>
                           </div>
                           <div class="col-lg-6">
                               <div class="form-group">
                                   <input type="text" name="mobile" id="mobile" class="form-control" placeholder="Mobile">
                               </div>
                           </div>
                           <div class="col-lg-6">
                               <div class="form-group">
                                   <input type="text" name="city" id="city" class="form-control" placeholder="City">
                               </div>
                           </div>
                           <div class="col-lg-6">
                                <div class="form-group">
                                    <select id="form_course" name="courses" class="form-control">
                                        <option value="">Please Select Course</option>
                                        <option value="MBA">MBA</option>
                                        
                                        <option value="B.Tech-ME">B.Tech (ME)</option>
                                        <option value="B.Tech-CS">B.Tech (CS)</option>
                                        <option value="B.Tech-Civil">B.Tech (Civil)</option>
                                        <option value="B.Tech-EC">B.Tech (EE)</option>
                                        <option value="B.Tech-EN">B.Tech (EN)</option>
                                        <option value="Diploma-ME">Diploma (ME)</option>
                                        <option value="Diploma-Civil">Diploma (Civil)</option>
                                        <option value="PGDM">PGDM</option>
                                        <option value="B.Sc.">B.Sc.</option>
                                        <option value="M.Com">M.Com</option>
                                        <option value="BBA">BBA</option>
                                        <option value="BCA">BCA</option>
                                        <option value="B.Com-H">B.Com (H)</option>
                                        <option value="B.Com">B.Com</option>
                                        <option value="B.Voc">B.Voc</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <select id="country" name="state" class="form-control">
                                        <option value="">Select State</option>
                                        <option value="Andhra Pradesh">Andhra Pradesh</option>
                                        <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                        <option value="Assam">Assam</option>
                                        <option value="Bihar">Bihar</option>
                                        <option value="Chandigarh">Chandigarh</option>
                                        <option value="Chhattisgarh">Chhattisgarh</option>
                                        <option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
                                        <option value="Daman and Diu">Daman and Diu</option>
                                        <option value="Delhi">Delhi</option>
                                        <option value="Goa">Goa</option>
                                        <option value="Gujarat">Gujarat</option>
                                        <option value="Haryana">Haryana</option>
                                        <option value="Himachal Pradesh">Himachal Pradesh</option>
                                        <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                        <option value="Jharkhand">Jharkhand</option>
                                        <option value="Karnataka">Karnataka</option>
                                        <option value="Kerala">Kerala</option>
                                        <option value="Lakshadweep">Lakshadweep</option>
                                        <option value="Madhya Pradesh">Madhya Pradesh</option>
                                        <option value="Maharashtra">Maharashtra</option>
                                        <option value="Manipur">Manipur</option>
                                        <option value="Meghalaya">Meghalaya</option>
                                        <option value="Mizoram">Mizoram</option>
                                        <option value="Nagaland">Nagaland</option>
                                        <option value="Orissa">Orissa</option>
                                        <option value="Pondicherry">Pondicherry</option>
                                        <option value="Punjab">Punjab</option>
                                        <option value="Rajasthan">Rajasthan</option>
                                        <option value="Sikkim">Sikkim</option>
                                        <option value="Tamil Nadu">Tamil Nadu</option>
                                        <option value="Tripura">Tripura</option>
                                        <option value="Uttaranchal">Uttaranchal</option>
                                        <option value="Uttar Pradesh">Uttar Pradesh</option>
                                        <option value="West Bengal">West Bengal</option>
                                    </select>
                                </div>
                            </div>
                           <div class="col-lg-12">
                               <div class="form-group">
                                   <input type="text" name="qualification" id="qualification" class="form-control" placeholder="Qualification">
                               </div>
                           </div>
    
                            <div class="col-lg-12">
                               <div class="form-group">
                                    <div class="g-recaptcha " data-sitekey="6LdSIhshAAAAAEQ1pawrEmwwxWA7ilWq2pYbSgL9" name="captcha"></div>
                                </div>
                            </div>
                           <!-- <div class="col-lg-12">
                               <div class="form-group">
                                   <textarea id="message" name="message" cols="30" rows="6" class="form-control" placeholder="Your Message"></textarea>    
                               </div>
                           </div> -->
                       </div>
    
                       <div class="col-lg-12">
                           <div class="mt-4 text-right">
                               <button class="btn btn-main" type="submit">Send Message <i class="fa fa-angle-right ml-2"></i></button>
                           </div>
                       </div>
                   </form> 
                </div>
            </div>
        </div>
    </section>
    
        
    
            
        <section class="section-padding pt-0">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14248.083488540118!2d81.076727!3d26.7756046!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb0c630a9ddb9c805!2sSMS%20Lucknow!5e0!3m2!1sen!2sin!4v1649159330421!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>
        
    
        </div>
        <!-- end of Content Section -->
        </div>

@include('website.layout.footer')
</body>
</html>