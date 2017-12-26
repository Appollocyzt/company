@extends('partials.default')

@section('title','| Services')

@section('content')
<style type="text/css">
	.col-lg-5 p{
		text-align: justify;
		font-size: 17px;
	}
		.col-lg-8 p{
		text-align: justify;
		font-size: 17px;
	}
	.col-lg-4 p
	{
		text-align: justify;
		font-size: 17px;
	}
	img:hover{
   -webkit-transform: scale(1.1, 1.1);
  -webkit-transition-duration: 600ms;
  -webkit-transition-timing-function: ease-out;
 
 
  -moz-transform: scale(1.1, 1.1);
  -moz-transition-duration: 600ms;
  -moz-transition-timing-function: ease-out;
 
  -ms-transform: scale(1.1, 1.1);
  -ms-transition-duration: 600ms;
  -ms-transition-timing-function: ease-out;
  opacity: 0.8;
	}

</style>
<div class="row">
<img src="{{ asset('images/banner1.jpg') }}" width="100%">
</div>
 <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-left">
               <li>
                        <a href="#counsel">COUNSELLING</a>
            
                    </li>
                    <li>
                       <a href="#app">APPLICATION</a>
                    </li>
                     <li>
                      <a href="">PROGRAM SELECTION</a>
                    </li>          
                    <li>
                        <a href="#">FUNDING</a>
                    </li>
                    <li>
                        <a href="#">VISA</a>
                    </li>
                     <li>
                        <a href="">PRE-DEPATURE</a>
                    </li>
                    <li>
                    <a href="#test">TEST PREPARATION</a>
                    </li>
                </ul>
            </div>
         
            <a name="counsel"></a>
              <h1 style="color:purple; align=left;">Study Abroad Counselling</h1>
            <div class="col-lg-5">
            <p>Counselling is a talking therapy that involves a experienced person helping you find ways to deal with issues you face.
              We have dedicated counseller who willnot just tell you what to do -instead they will encourage you not only to choose the
              right country and universities but also in making right career decision as applying for further study in abroad is a 
              critical decision.We will try to understand your educational background along with career objectives guiding you in right
              path and suggesting suitable programs in the Universities of your preference.
            </p>
            </div>
            <div class="col-lg-7">
            <img src="{{asset('images/career.jpg') }}" height="256" width="100%">
            </div>
            <a name="app"></a>

            <div class="col-lg-4">
            <br><br>
            <img src="{{ asset('images/app.jpg') }}" height="150" width="350">
            </div>
            <div class="col-lg-8">
              <h1 style="color:red;">Application</h1>
            <p>The application for abroad study includes individual differences in characteristicpatterns of thinking, 
               feeling and behaving along with educational status.We will influence you in writing Statement of Purpose,
               recommendation ,CV and other mandatory documents making you ready in best possible way.Students chosing us
              for abroad study will get better facilities at affordable price(as low as pssible within our boundries). We will focus 
              on each and everything within our limit in posting your application to the prefered University </p>
             </div>
             
           <a name="test"></a>
           <div class="col-lg-4">
           <h1>TEST PREPARATION </h1>
           <p> To help you prepare for any test you need to take, we have put together a comprehensive list of tips and suggestions. 
           Our course cover key aspect of the various standardard tests — GRE, IELTS and TOEFL that foreign Universities 
           use to measure their applicants’ worth. Our team of trained and experienced professionals will provide you comprehensive 
           and result-oriented classes with updated manuals ,well-managed stock of books.</p>
           </div>
           <div class="col-lg-8">
           <img src="{{ asset('images/ilet.jpg') }}" width="100%">
           </div>
@endsection