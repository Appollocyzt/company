@extends('partials.default')

@section('title','| Welcome')

@section('content')

<div class="row">
 <div class="col-lg-1">
   <br>
    @include('partials.social')
 </div>
<div class="col-lg-11">
      @include('partials.slider')
   </div>
      @include('services.index')
</div>
      @include('partials.scroll')
      <div style="color:red;">
        <h1>Our Projects</h1>
           <div class="col-lg-3">
            @include('partials.work')
             </div>
           <div class="col-lg-3">
            @include('work.work')
             </div>
           <div class="col-lg-3">
             @include('work.woork')
         </div>
          <div class="col-lg-3">
             @include('work.wwork')
         </div>
        </div>
@endsection
