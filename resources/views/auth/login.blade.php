@if ($errors->any())
<u1>
    {!! implode('',$errors->all('<li>:message</li>')) !!}
</u1>
@endif   
<form method="POST" action="authenticate">
    <label for="">E-Mail <input type="text" name="email"> </label><br>
    <label for="">Password <input type="password" name="password"> </label><br>
    <button style="width:100px; height:25px" input type="submit"> Login </button> <br>
    @csrf
</form>
    
