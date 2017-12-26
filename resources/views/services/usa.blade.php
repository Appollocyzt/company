@extends('partials.default')

@section('title','| Study in USA')

@section('content')
<style type="text/css">
h1{
  text-align: center;
}
.col-lg-12  p{
    text-align: justify;
    font-size: 18px;
  }

.caption	p
	{
		text-align: justify;
		font-size: 16px;
	}
  .animation-element.slide-left {
  opacity: 0;
  -moz-transition: all 800ms linear;
  -webkit-transition: all 800ms linear;
  -o-transition: all 800ms linear;
  transition: all 800ms linear;
  -moz-transform: translate3d(-100px, 0px, 0px);
  -webkit-transform: translate3d(-100px, 0px, 0px);
  -o-transform: translate(-100px, 0px);
  -ms-transform: translate(-100px, 0px);
  transform: translate3d(-100px, 0px, 0px);
}

.animation-element.slide-left.in-view {
  opacity: 1;
  -moz-transform: translate3d(0px, 0px, 0px);
  -webkit-transform: translate3d(0px, 0px, 0px);
  -o-transform: translate(0px, 0px);
  -ms-transform: translate(0px, 0px);
  transform: translate3d(0px, 0px, 0px);
}

</style>
<script type="text/javascript">
$(document).ready(function() {
  
  var animation_elements = $.find('.animation-element');
  var web_window = $(window);

  
  function check_if_in_view() {
    
    var window_height = web_window.height();
    var window_top_position = web_window.scrollTop();
    var window_bottom_position = (window_top_position + window_height);

  
    $.each(animation_elements, function() {

    
      var element = $(this);
      var element_height = $(element).outerHeight();
      var element_top_position = $(element).offset().top;
      var element_bottom_position = (element_top_position + element_height);

    
      if ((element_bottom_position >= window_top_position) && (element_top_position <= window_bottom_position)) {
        element.addClass('in-view');
      } else {
        element.removeClass('in-view');
      }
    });

  }

  $(window).on('scroll resize', function() {
      check_if_in_view()
    })

  $(window).trigger('scroll');

});
</script>
<div class="col-lg-12">
<h1>Why Abroad???</h1>
<p>In today’s globalizing world, it is huge life changing decision to make up your mind about where
 to go and what to study.  No matter what you decide, there is usually an option to change your mind. 
  To figure out whether it is your thing to go abroad in the first place and who are you going to
   do it with? In this matter, consulting with consultancy can help you. </p>
   <p>  There are many students who have done and made Nepal proud internationally. As someone who has
    studied and worked abroad, they think studying and working in abroad is a life-changing experience. 
    The biggest reason you should consider a study abroad program is the opportunity to experience a
     brand-new country with incredible new outlooks, customs and activities. Another reason you might 
     consider studying abroad is for the chance to experience different styles of education. In a foreign
     country, you might find that it really brings out your independent nature. it is also an opportunity
      to discover your gaining an understanding of different cultures. When you finish your study abroad
       program and return home, you will return with new language skills, a great education, new culture
        and a willingness to learn.</p>
        <p> Most importantly, students who have studied abroad show just how committed they are to
         their education.  Students who have studied abroad have shown that they have the curiosity and 
         educational knowledge to be a leader in graduate school. 
        It is a opportunity for u to make your bright future for tomorrow.</p>
</div>
 <div class="container cf">
    <div class="animation-element slide-left testimonial">
<div class="row">
  <div class="col-lg-4">
    
      <img src="{{ asset('images/us.jpg') }}" height="300" width="350">
      <div class="caption">
              <h3>Study In USA</h3>
        <p>More international students study in the USA than any other country for good reason since there are
         more than 4,000 other world-class universities offering career oriented  education that can lead to career success.
          The US remains the source of University campuses that have a life of their own and they are like small student towns
           and encouraging you to socialise and make friends.As technology continues to innovate the information is delivered
           by the Universities of USA via web-based classes.</p>
      </div>
    
  </div>
   <div class="col-lg-4">
    
      <img src="{{ asset('images/australia-1.jpg') }}" height="300" width="350">
      <div class="caption">
              <h3>Study In Australia</h3>
        <p>Australia currently is one of the most popular destination for international students in the English-speaking world and 
        attracts huge number of students from all parts of th world. Many international students choose to study there because
         of the friendly natives, and high quality of education with well recognized courses.There are plenty of work opportunities
          available for international students. On a student visa, the students are allowed to work </p>
      </div>
    
  </div>
   <div class="col-lg-4">
    
      <img src="{{ asset('images/Study-in-New-Zealand.jpg') }}" height="300" width="350">
      <div class="caption">
              <h3>Study In NewZealand</h3>
        <p>New Zealand has always been internationally recognized for its excellent centrally managed quality assurance education system and 
 training high quality teachers making  the institutions in New Zealand to provide one of the best world class teaching 
faculties. Apart from this, New Zealand also has a high quality  research facilities for its students.International students
 are welcomed warmly in New Zealand society for the cultural diversity they bring.
 </p>
      </div>
    
  </div>
  </div>
  </div>
</div>
@endsection