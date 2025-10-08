<h1>Login Form</h1>


<!-- Display Error At the Top  -->
<!-- @if($errors->any())
@foreach($errors->all() as $err)
<div style="color:red">
    {{$err}}
</div>
@endforeach
@endif -->
<form action="adduser" method="post">
    @csrf
    <div>
        <input type="text" placeholder="enter the Name" name="username" value="{{old('username')}}">
        <span>@error('username'){{$message}}@enderror</span>
    </div>
    <div>
        <input type="email" placeholder="enter the Email" name="email" value="{{old('email')}}">
        <span>@error('email'){{$message}}@enderror</span>
    </div>
    <div>
        <input type="text" placeholder="enter the city" name="city" value="{{old('city')}}">
        <span>@error('city'){{$message}}@enderror</span>
    </div>
   

    <div>
        <h5>User Skills</h5>
        <input type="checkbox" name="skill[]" id="php" value="php">
        <label for="php" >PHP</label>
        <input type="checkbox" name="skill[]" id="node" value="node">
        <label for="node" >Node</label>
        <input type="checkbox" name="skill[]" id="java" value="java">
        <label for="java" >Java</label>
         <span>@error('skill'){{$message}}@enderror</span>
    </div>
    <!-- <div>
        <h5>Gender</h5>
        <input type="radio" name="gender" id="male" value="male">
        <label for="male" >Male</label>
        <input type="radio" name="gender" id="female" value="female">
        <label for="node" >Female</label>
    
    </div>
    <div>
        <h5>City</h5>
       <select name="city">
        <option value="Delhi">Delhi</option>
        <option value="Noida">Noida</option>
        <option value="Gurgaon">Gurgaon</option>
       </select>
    </div>
    <br>
    <br>
     <div> -->
        <button>Add New User</button>
    </div>
</form>