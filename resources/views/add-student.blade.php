<h1>Add New Student</h1> 
<form action="add " method="post">
        @csrf
        <input type="text" name="name"  placeholder="Enter Your Name">
        <br>
        <br>
        <input type="text" name="email"  placeholder="Enter Your email ">
        <br>
        <br>
        <input type="text" name="phone"  placeholder="Enter Your Phone Number">
        <br>
        <br>
        <button>Add Student</button>
</form>