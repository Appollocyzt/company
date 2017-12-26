<style type="text/css">
.slideshow {
      max-height:400px;
      max-width:100%;
	    overflow:hidden; 
}
</style>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>
var count = 1;
$(window).load(function(){
    $('#slideshow').css('visibility','visible');
});
setInterval(function() {
    count = (jQuery(".slideshow :nth-child("+count+")").fadeOut().next().length == 0) ? 1 : count+1;
    jQuery(".slideshow :nth-child("+count+")").fadeIn();
}, 9000);
</script>
    <div class="slideshow">
     @foreach($posts as $post)
<img src="{{ asset('images/'.$post->image) }}" height="400px" width="100%">
@endforeach
    </div>