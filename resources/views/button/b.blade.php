 <li class="dropdown">
   <a href="" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">
     ABOUT US
   </a>
     <ul class="dropdown-menu">
       <div class="row">
        <div class="column">
            <li><a href="{{ route('intro') }}">Introduction</a></li>
             <li><a href="{{ route('message') }}">Message From CEO</a></li>
           <li><a href="">Mission & Vision</a></li>
        </div>
        <div class="column">
        <p>Our Team</p>
   <a href="{{ route('team') }}"> <img src="{{ asset('images/team.jpg') }}" height="100px" width="150px"></a>
        </div>
      </div>
     </ul>
  </li>