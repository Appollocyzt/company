<script type="text/javascript">
$(window).on("load",function() {
  $(window).scroll(function() {
    var windowBottom = $(this).scrollTop() +$(this).innerHeight();
    $(".fade").each(function() {
      var objectBottom = $(this).offset().top + $(this).outerHeight()-150;
      
      if (objectBottom <= windowBottom) { 
        if ($(this).css("opacity")==0) {$(this).fadeTo(500,5,);}
      } else { 
        if ($(this).css("opacity")==1) {$(this).fadeTo(10,0);}
      }
    });
  }).scroll(); 
});
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
          <div class="fade">
          <div class="container">
         <h1>STUDY ABROAD</h1>
        <div class="col-lg-4">
    
      <img src="{{ asset('images/usa.jpg') }}" height="256" width="256">
      <div class="caption">
        <h2>Study in USA</h2>
        <p>The land of dreams and opportunities, the<br> U.S. offers high-quality educational options…</p>
      </div>
  </div>
   <div class="col-lg-4">
    
      <img src="{{ asset('images/australia.jpg') }}" height="256" width="256">
      <div class="caption">
        <h2>Study in Australia</h2>
        <p>If you are interesting in studying in Australia<br> then you are taking one step closer towards<br> choosing…</p>
      </div>
    
  </div>
   <div class="col-lg-4">
  
      <img src="{{ asset('images/nz.jpg') }}" height="256" width="256">
      <div class="caption">
        <h2>Study in New Zealand</h2>
        <p>New Zealand study abroad programs will <br>expose students to an amazing variety of<br> breathtaking…</p>

    </div>
  </div>
   <div align="right">
   <a href="{{ route('usa') }}"> <input type="submit" class="btn btn-info btn-lg" value="Read More"></a>
  </div>
  </div>
</div>