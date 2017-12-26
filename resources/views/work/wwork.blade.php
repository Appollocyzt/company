<style>
.img:hover
{
  opacity: 0.7;
}
.overlay {
  position: absolute;
  bottom: 100%;
  background-color:#3ff5ea;
  overflow: hidden;
  height:0;
  transition: .5s ease;
  opacity: 0.8;
}
.cont:hover .overlay {
  top:0;
  max-height:250px;
  max-width: 250px;
}
.overlay .btn {
  border-radius: 100px;
  color:black;
  font-size: 25px;
  position: absolute;
  overflow: hidden;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
}
</style>

<div class="cont">
  <img src="{{ asset('images/cinema.jpg') }}" class="img" height="250" width="250"> 
  <div class="overlay">
   <a href="http://localhost/cinema/public/"> <input type="submit" class="btn btn-default" value="View Website"></a>
  </div>
</div>
 
