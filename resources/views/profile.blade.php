<div>
    <!-- Knowing is not enough; we must apply. Being willing is not enough; we must do. - Leonardo da Vinci -->
     <h1>Profile Page</h1>
     <h1>{{session('user')}}</h1>
     @if(session('user'))
        <h1>Welcome , {{session('user')}}</h1>
    @else
        <h1>No Session's there For The User</h1>
    
    @endif
    

    <a href="logout">Logout</a>


    {{print_r(session('alldata'))}}

  

     
</div>
