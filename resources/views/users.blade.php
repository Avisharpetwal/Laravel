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
--}}
<h1>ELoquent Model:Query Builder</h1>
<!-- {{print_r($users)}} -->

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
            @foreach($users as $a)
            <tr>
             <td>{{$a->id}}</td>
             <td>{{$a->name}}</td>
             <td>{{$a->email}}</td>
             <td>{{$a->phone}}</td>
            </tr>
        </tr>
        @endforeach


        </table>