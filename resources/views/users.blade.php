<div>
    <h1>User Details</h1>
    <table border="10">
        <tr>
            <td>Id</td>
            <td>Name</td>
            <td>Email</td>
            <td>Phone</td>
        </tr>
        <tr>
            @foreach($abc as $a)
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