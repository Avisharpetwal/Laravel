<div>
    <h1>Student Details </h1>
     <table border="10">
        <tr>
            <td>Id</td>
            <td>Name</td>
            <td>Email</td>
            <td>Batch</td>
        </tr>
        <tr>
            @foreach($data as $d)
            <tr>
             <td>{{$d->id}}</td>
             <td>{{$d->name}}</td>
             <td>{{$d->email}}</td>
             <td>{{$d->batch}}</td>
            </tr>
        </tr>
        @endforeach


        </table>
</div>
