
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<style>
  li{
        display: inline-block;
        position: relative;
        text-align:left;

    }
li ul.dropdown-menu
{
    background-color:white;
    width:400px;
    min-height: 150px;
}
 li:hover ul.dropdown-menu{

        display: block;
        left:0;
        font-weight: 100%;
            }
 li ul.dropdown-menu li{
        display: block;

    }
    .column {
    float: left;
   padding-left: 20px;
   width: 200px;
}

 </style>

 <li class="dropdown">
   <a href="" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">
     SERVICES
   </a>
     <ul class="dropdown-menu">
       <div class="row">
        <div class="column">
            <li><a href=" {{ route('service') }}">Our Main Services</a></li>
            <li>Counselling</li>
           <li>Aplication</li>
           <li>Program Selection</li>
            <li>Funding </li>
            <li>Visa</li>
           <li>Pre-departure</li>
        </div>
        <div class="column">
         <li> Exams&Coaching</li>
          <li>
          <a href="https://www.ielts.org/what-is-ielts/ielts-introduction"> ILETS</a></li>
           <li> <a href="https://www.ets.org/toefl/ibt/about">TOFEL</a></li>
             <li> <a href="https://en.wikipedia.org/wiki/Graduate_Record_Examinations">GRE</a></li>
        </div>
      </div>
     </ul>
  </li>