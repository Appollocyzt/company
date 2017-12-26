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
  top: 0;
  height:350px;
  width: 300px;
}

.overlay .btn {
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
  <img src="{{ asset('images/gym.jpg') }}" class="img" height="250" width="250"> 
  <div class="overlay">
   <a href="http://localhost/gym/public/"> <input type="submit" class="btn btn-default" value="View Website"></a>
  </div>
</div>
 
