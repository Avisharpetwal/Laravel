<h1>Home Page </h1> 
<a href="/">Welcome Page </a>

<!-- It give the current url path -->
<!-- EXAMPLE :: http://127.0.0.1:8000/home -->
{{URL::current()}}



<!-- 2nd Method -->
 <!-- {{url()->full()}} -->


<br>
<!-- It give the current url Full  path -->
<!-- EXAMPLE::http://127.0.0.1:8000/home?name=Avishar -->

{{URL::full()}}


<!-- <a href="/">Welcome Page </a> -->
<!-- <a href="/about/Avishar">About Page </a> -->
<!-- <x-message-banner msg="Now User Is Login"/> -->