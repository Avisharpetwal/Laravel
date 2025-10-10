<div>
    <h1>Edit Student Details</h1>
    <form action="/edit-student/{{$data->id}}" method="post">
        @csrf
        <input type="hidden" name="_method" value="put"/>
        <input type="text" name="name"  value="{{$data->name}}" placeholder="Enter Your Name">
        <br>
        <br>
        <input type="text" name="email" value="{{$data->email}}" placeholder="Enter Your email ">
        <br>
        <br>
        <input type="text" name="phone"  value="{{$data->phone}}" placeholder="Enter Your Phone Number">
        <br>
        <br>
        <button>Update</button>
        <a href="/list">Cancel</a>
</div>
