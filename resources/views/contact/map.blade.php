 @extends('partials.default')

@section('title','| Map')

 @section('content')
 <br>
     <div class="col-lg-12">
        <div class="content-section-a">
              <div class="col-lg-4">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3515.875830634402!2d83.97940441464218!3d28.211084882585975!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399595ac5869483b%3A0xf89fdb8a56a0a7f9!2sPrince+International+Institute!5e0!3m2!1sen!2snp!4v1512914419982" 
                  width="500" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
          
               </div>
                  <div class="container">
                    <div class="col-lg-4 col-lg-offset-1 col-sm-6">
                        @include('contact.contact')
                     </div>
                  
                   </div>
                 </div>
                 <div class="col-lg-6">
    
  <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fprinceinternationalinstitute%2F&tabs&width=340&height=214&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=1898147847100197"
   width="340" height="214" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
                 </div>
                 </div>
@endsection
        