<style>
h1
{
	text-align: center;
	font-weight: 100%;
}
h3
{
	text-align:left;
}
p
{
	text-align:justify;
}
@keyframes slideInFromLeft {
  0% {
    transform: translateX(-100%);
  }
  100% {
    transform: translateX(0);
  }
}
.slider .col-lg-12
{
	background-color: green;
	color:white; 
  animation: 3s ease-out 0s  slideInFromLeft;
}
.col-lg-4 img
{
  padding-top: 100px;
}
</style>

<div class="slider">
<div class="col-lg-12">
<h1>Our Other Services</h1>

<div class="col-lg-4">

<h3>DOMAIN REGISTRATION</h3>
<p>It allows the Internet user to provide acess to your website.</p>
<h3>RESPONSIVE WEB DESIGN</h3>
<p> Different skills and disciplines in the production and <br>maintenance of websites is an art! Your website<br>
 design shows your business insight.</p>
<h3>WEB DEVELOPMENT</h3>
<p>With so much business being generated on the <br>internet, your website deserves the best
:after all<br> it is the internet advertising of your company.</p>
<h3>WEB HOSTING</h3>
<p>It allows the public to check whether a specific <br>domain name is still available or not.</p>
</div>
<div class="col-lg-4">
<img src="{{asset('images/laptop.jpg') }} " height="350px" width="400px">
</div>
<div class="col-lg-3">

<h3>BASIC COURSE</h3>
<p>History of computer ,Nepali Typing ,Ms-Word <br> many moree....</p>
<h3>Diploma Course</h3>
<p>Revision of Basic Course ,Ms Acess2007 Adobe Page Maker ,Adobe photoshop CS</p>
<h3>WEB COURSES</h3>
<p>Web development courses will build your skills in creating web applications and
 Learn HTML/CSS and modern frameworks...</p>
<h3>DIGITAL MARKETING</h3>
<p>Making your brand popular through digital technologies,mainly on the internet.</p>
</div>
</div>
</div>
