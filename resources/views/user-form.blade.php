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
        <h5>User Skills</h5>
        <input type="checkbox" name="skill[]" id="php" value="php">
        <label for="php" >PHP</label>
        <input type="checkbox" name="skill[]" id="node" value="node">
        <label for="node" >Node</label>
        <input type="checkbox" name="skill[]" id="java" value="java">
        <label for="java" >Java</label>
    </div>
    <div>
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
     <div>
        <button>Add New User</button>
    </div>
</form>