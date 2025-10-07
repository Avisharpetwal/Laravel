<h1>Create A blade for Pratice </h1>
<h1>{{$names}}</h1>
<h1>{{rand()}}</h1>

<h1>{{$users[0]}}</h1>
<!-- Avp -->

@if($names=='Avishar')
<h2>This Is Avishar</h2>
@elseif($names=='Sonu')
<h2>This Is Sonu</h2>
@else
<h2>Other User Name</h2>
@endif

<div>
    @foreach($users as $u)
       <h4>{{$u}} </h4>
    
    @endforeach
</div>

