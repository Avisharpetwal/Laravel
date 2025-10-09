{{--//For Http client
<h1>View Page </h1>

<ul>
    <li>
        <span>Id:</span><span><b>{{$data->id}}</b></span>
    </li> 
    <li>   
        <span>Name:</span><span>{{$data->username}}</span>
    </li>
    <li>
        <span>Email:</span><span>{{$data->email}}</span>
    </li>
    <li>
        <span>Phone:</span><span>{{$data->phone}}</span>
    </li>
</ul>
     
</div>
--}}

{{--
<div>
    <h1>Users Details</h1>
    <table border="10">
        <tr>
            <td>Id</td>
            <td>Name</td>
            <td>Email</td>
            <td>Phone</td>
        </tr>
        <tr>
            @foreach($xyz as $a)
            <tr>
             <td>{{$a->id}}</td>
             <td>{{$a->name}}</td>
             <td>{{$a->email}}</td>
             <td>{{$a->phone}}</td>
            </tr>
        </tr>
        @endforeach


        </table>
     
</div>
--}}



<!-- Flash Session-->
<h1>Add New User</h1> 
{{session('message')}}
<form action="add " method="post">
        @csrf
        <input type="text" name="user"  placeholder="Enter Your Name">
        <br>
        <br>
        <input type="password" name="password"  placeholder="Enter Your Password">
        <br>
        <br>
        <input type="text" name="phone"  placeholder="Enter Your Phone Number">
        <br>
        <br>
        <button>Add New User</button>
</form>









