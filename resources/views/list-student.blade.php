<div>
<h1>List Of Students</h1>
<h1>Student Details </h1>
     <table border="10">
        <tr>
            <!-- <td>Id</td> -->
            <td>Name</td>
            <td>Email</td>
            <td>Phone</td>
            <td>Created  At</td>
            <td>Updated At</td>
            <td>Operation</td>
        </tr>
        <tr>
            @foreach($studentd as $d)
            <tr>
             <!-- <td>{{$d->id}}</td> -->
             <td>{{$d->name}}</td>
             <td>{{$d->email}}</td>
             <td>{{$d->phone}}</td>
             <td>{{$d->created_at}}</td>
             <td>{{$d->updated_at}}</td>
             <td>
                <a href="{{'delete/'.$d->id}}">Delete</a>
                <a href="{{'edit/'.$d->id}}">Edit</a>
            </td>
            </tr>
        </tr>
        @endforeach
 

        </table>
        {{$studentd->links()}}
    
    </div>

    <style>

        .w-5.h-5{
            width: 20px;
        }
    </style>

