<div>
    <!-- Nothing worth having comes easy. - Theodore Roosevelt -->
     <h1>Login</h1>
     <form action="login" method="post">
        @csrf
        <input type="text" name="user"  placeholder="Enter Your Name">
        <br>
        <br>
        <input type="password" name="password"  placeholder="Enter Your Password">
        <br>
        <br>
        <button>Login</button>
     </form>
</div>
