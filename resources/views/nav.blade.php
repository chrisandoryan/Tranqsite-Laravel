<div class="nav">
    @auth
    <a class="button btn btn-success btn-ghost newq" href="">Messages</a>
    <a class="button btn btn-primary btn-ghost newq" href="">Send Message</a>
    <a class="button btn btn-primary btn-ghost newq" href="">Profile</a>
    <a class=" btn btn-default btn-ghost skip" href="">Logout</a>    
    @endauth
    @guest
    <a class="button btn btn-success btn-ghost newq" href="">Login</a>
    <a class="button btn btn-primary btn-ghost newq" href="">Register</a>
    @endguest
</div>