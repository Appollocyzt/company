@extends('partials.default')

@section('title','| Team')

@section('content')
<style>

.social .common ul{
  position: absolute;
  bottom: 25%;
  left:18%;
  text-align: center;
  opacity: 0;
  z-index: 1;
}

.fa-facebook {
  background:blue;
  color: white;
  padding: 0.75em;
  border-radius: 75%;
}
.fa-google {
  background:red;
  color: white;
  padding: 0.75em;
   border-radius:50%;
}.fa-linkedin {
   background: #007bb5;
  color: white;
  padding: 0.75em;
   border-radius: 50%;
}

.doc-item:hover .doc-img{
   -webkit-transform: scale(1.1, 1.1);
  -webkit-transition-duration: 500ms;
  -webkit-transition-timing-function: ease-out;
 
 
  -moz-transform: scale(1.1, 1.1);
  -moz-transition-duration: 500ms;
  -moz-transition-timing-function: ease-out;
 
  -ms-transform: scale(1.1, 1.1);
  -ms-transition-duration: 500ms;
  -ms-transition-timing-function: ease-out;
}

.doc-item:hover .social-lists{
  margin-top:-2em;
  opacity: 1;
}
h2
{
  text-align: center;
}
h3{
  text-align:left;
}
</style>
<div class="container">
<br>
       <h2>OUR TEAM</h2>
  <div class="social clearfix">
     <div class="col-lg-4 doc-item">
       <div class="common animated fadeInUp clearfix ae-animation-fadeInUp">
        <ul class="list-inline social-lists animate">
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-google"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
        </ul>  
        <br>
               <img src="{{asset('images/kamal.jpg') }}" height="256px" width="256px" class="doc-img"> 
                     <h3>Kamal Singh Khadka</h3>
                          <h4>Founder/CEO</h4>   
                            </div>
              </div>
              <div class="col-lg-4 doc-item">
       <div class="common animated fadeInUp clearfix ae-animation-fadeInUp">
        <ul class="list-inline social-lists animate">
            <li><a href="https://www.facebook.com/keerun.gurung"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-google"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
        </ul>  <br>
               <img src="{{asset('images/kerun.jpg') }}" height="256px" width="256px" class="doc-img"> 
                     <h3>Keerun Gurung</h3>
                          <h4>Managing Director</h4>   
                            </div>
              </div>
              <div class="col-lg-4 doc-item">
       <div class="common animated fadeInUp clearfix ae-animation-fadeInUp">
        <ul class="list-inline social-lists animate">
            <li><a href="https://www.facebook.com/waynne.appollocyzt"><i class="fa fa-facebook"></i></a></li>
              <li><a href="https://plus.google.com/u/0/115478188564520889704"><i class="fa fa-google"></i></a></li>
                <li><a href="https://www.linkedin.com/in/abhishwor-ranabhat-005602155"><i class="fa fa-linkedin"></i></a></li>
        </ul>  
        <br>
               <img src="{{asset('images/avi.jpg') }}" height="256px" width="256px" class="doc-img"> 
                     <h3>Abhishwor Ranabhat</h3>
                          <h4>SR. IT Officer(Web Developer)</h4>   
                            </div>
              </div>
          </div>

        </div>
@endsection