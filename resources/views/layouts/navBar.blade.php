<style>
   
    .nav-link{
        color: red;
    }
</style>
<nav class="navbar navbar-expand-lg bg-info">
    <div class="container">
        <h5 class="fw-bold">Navbar</h5>
        <div class="navbar-nav ms-auto">
            <a class="fw-bold nav-link mx-2" href="{{ route ('/') }}">Home</a>
            <a class="fw-bold nav-link mx-2" href="{{ route ('contact') }}">Contact</a>
            <a class="fw-bold nav-link mx-2" href="{{ route ('login') }}">Login</a>
        </div>
    </div>
</nav>