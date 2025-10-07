<h1>Login Form</h1>
<form action="adduser" method="post">
    @csrf
    <div>
        <input type="text" placeholder="enter the Name" name="username">
    </div>
    <div>
        <input type="email" placeholder="enter the Email" name="email">
    </div>
    <div>
        <input type="text" placeholder="enter the city" name="city">
    </div>
    <div>
        <button>Add New User</button>
    </div>
</form>