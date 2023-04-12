@if ($errors->any())
<u1>
    {!! implode('',$errors->all('<li>:message</li>')) !!}
</u1>
@endif   
<form method="POST" action="/store">
    <label for="">Name <input type="text" name="name"> </label></br>
    <label for="">E-Mail <input type="text" name="email"> </label></br>
    <label for="">Password <input type="password" name="password"> </label></br>
    <label for="">Confirm Password <input type="password" name="password_confirmation"> </label></br>
    <input type="submit" value="Register">
    @csrf
</form> 