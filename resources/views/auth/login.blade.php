@if ($errors->any())
<u1>
    {!! implode('',$errors->all('<li>:message</li>')) !!}
</u1>
@endif   
<form method="POST" action="authenticate">
    <label for="">E-Mail <input type="text" name="email"> </label><br>
    <label for="">Password <input type="password" name="password"> </label><br>
    <input type="submit" value="Login"><br>
    @csrf
</form>
    
