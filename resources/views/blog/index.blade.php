@extends('layouts.main')
@section('content')
<section id="services-index">
    <!-- container -->
    <div class="container">
       <div class="section-heading">
          <h2>Nos Services</h2>
       </div>
       <!-- /section-heading-->
       <div class="col-md-10 col-md-offset-1 text-center">
          <p>Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus vi tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
       </div>
       <!-- /col-md-10-->
    </div>
    <!-- /container-->
    <div class="container-fluid bg-pattern margin1"  data-bottom-top="background-position: 0px 70%,99% 70%;"
       data-top-bottom="background-position: 0px -50%,99% -50%;">
       <div class="row">
          <div class="col-md-10 col-md-offset-1">
          <!-- Services -->
             <div id="owl-services" class="owl-carousel">
                <!-- Feature Box 1  -->
                <div class="col-xs-12">
                   <div class="box_icon">
                      <div class="icon">
                         <!-- icon -->
                         <div class="image">
                            <img src="img/service1.jpg" class="img-responsive" alt="">
                         </div>
                         <div class="info">
                            <h4>Medicament vétérinaire</h4>
                            <p>Nulla vel metus scelerisque ante sollicitudinlorem ipsuet commodo. Cras purus odio, vestibulum in vulputate a Imperdiet interdum donec eget metus auguen unc vel lorem.</p>
                            <!-- Button-->
                            <a class="btn" href="services-single.html">Read More</a>
                         </div>
                      </div>
                   </div>
                   <!-- /box_icon -->
                </div>
                <!-- Feature Box 4  -->
                
                <!-- /col-xs-12 ends -->
             </div>
             <!-- /owl-services -->
          </div>
          <!-- /col-md-9 -->
       </div>
       <!-- /row -->
    </div>
    <!-- /container-fluid-->
 </section>
 <!-- Section About-index -->
 <section id="about-index" class="bg-lightcolor1" >
    <div class="container">
       <div class="section-heading text-center">
          <h2>A propos de nous</h2>
       </div>
       <!-- row -->
       <div class="row">
          <div class="col-md-6 col-lg-7 text-center">
             <h3>CENTRAL DE PROPHYLAXIE VETERINAIRE</h3>
             <p>
                Pat a lorem ipsuet nibh fusce mollis imperdie tlorem ipuset phas ellus ac sodales Lorem ipsum dolor  Phas ellus ac sodales felis tiam non metus.
                vest ibulum orci eget usce mollis imperdiet interdum donec eget metus auguen unc vel lorem ispuet Ibu lum orci eget, viverra elit liquam erat volut pat phas ellus ac sodales Lorem ipsum dolor sit amet, consectetur adipisicing elit uasi quidem minus id iprum omnis.
             </p>
             <!-- Accordion -->
             <div class="panel-group" id="accordion">
                <!-- Question 1 -->
                <div class="panel">
                   <div class="panel-heading">
                      <h5 class="panel-title">
                         <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Social Responsability</a>
                      </h5>
                   </div>
                   <div id="collapseOne" class="panel-collapse collapse in">
                      <div class="panel-body">
                         <p>Patatemp dolupta orem retibusam qui commolu 
                            les felis tiam non metus ali quam eros Pellentesque turpis lectus, placerat a ultricies a, posuere a nibh. Fusce mollis imperdiet interdum donec eget metus auguen unc vel mauris ultricies, vest ibulum orci eget, viverra elit. 
                         </p>
                      </div>
                   </div>
                </div>
                <!-- Question 2 -->
                <div class="panel">
                   <div class="panel-heading">
                      <h5 class="panel-title">
                         <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Mission Statement</a>
                      </h5>
                   </div>
                   <div id="collapseTwo" class="panel-collapse collapse">
                      <div class="panel-body">
                         <p>Patatemp dolupta orem retibusam qui commolu 
                            les felis tiam non metus ali quam eros Pellentesque turpis lectus, placerat a ultricies a, posuere a nibh. Fusce mollis imperdiet interdum donec eget metus auguen unc vel mauris ultricies, vest ibulum orci eget, viverra elit. 
                         </p>
                      </div>
                   </div>
                </div>
                <!-- Question 3 -->
                <div class="panel">
                   <div class="panel-heading">
                      <h5 class="panel-title">
                         <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">Value Added Services</a>
                      </h5>
                   </div>
                   <div id="collapseThree" class="panel-collapse collapse">
                      <div class="panel-body">
                         <p>Patatemp dolupta orem retibusam qui commolu 
                            les felis tiam non metus ali quam eros Pellentesque turpis lectus, placerat a ultricies a, posuere a nibh. Fusce mollis imperdiet interdum donec eget metus auguen unc vel mauris ultricies, vest ibulum orci eget, viverra elit. 
                         </p>
                      </div>
                   </div>
                </div>
             </div>
             <!-- /.accordion -->
          </div>
          <!-- /col-md-7-->
          <!-- Parallax object -->
          <div class="parallax-object1 hidden-sm hidden-xs"  data-100-start="right: 0%;" 
             data-center-bottom="right:30%;"  >
             <!-- Image -->
             <img src="assets/img/illustrations/petbowl.png" alt="">
          </div>
          <!-- /parallax-object1-->
          <div class="col-md-6 col-lg-5" >
             <img src="assets/img/about-index.png" class="img-responsive" alt="">
          </div>
          <!-- /col-md-5-->
       </div>
    </div>
    <!-- /container -->
 </section>

 <!-- Section Contact  -->
 <section id="contact-index">
    <div class="container">
       <div class="section-heading">
          <h2>Contact</h2>
       </div>
       <div class="col-lg-7 col-lg-offset-5 col-md-8 col-md-offset-2">
          <!-- contact info -->
          <h4>Information </h4>
          <ul class="list-inline">
             <li><i class="fa fa-envelope"></i><a href="">contact@cpvaonline.com</a></li>
             <li><i class="fa fa-phone margin-icon"></i>+225 27 21 25 39 36 </li>
             <li><i class="fa fa-map-marker margin-icon"></i>Localisation: Treichville</li>
          </ul>
          <!-- address info -->
          <p>Elit uasi quidem minus id omnis a nibh fusce mollis imperdie tlorem ipuset phas ellus ac sodales Lorem ipsum dolor Phas ellus 
          </p>
          <h4 class="margin1">Envoyez votre message</h4>
          <!-- Form Starts -->
          <div id="contact_form">
             <div class="form-group">
                <label>Nom<span class="required">*</span></label>
                <input type="text" name="name" class="form-control input-field" required="">                    
                <label>Email <span class="required">*</span></label>
                <input type="email" name="email" class="form-control input-field" required="">           
                <label>Objet</label>
                <input type="text" name="subject" class="form-control input-field" required="">                            
                <label>Message<span class="required">*</span></label>
                <textarea name="message" id="message" class="textarea-field form-control" rows="3"  required=""></textarea>
             </div>
             <button type="submit" id="submit_btn" value="Submit" class="btn center-block">Message</button>
          </div>
          <!-- Contact results -->
          <div id="contact_results"></div>
       </div>
       <!-- Contact -->
       <!-- /col-lg-5-->
    </div>
    <!-- /container -->
 </section>
 <!-- /Section ends -->	
 <div class="container-fluid">
    <!-- map-->
    <div id="map-canvas"></div>
 </div>
@endsection
