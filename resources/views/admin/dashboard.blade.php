<pre>
    DASHBOARD
</pre>

<form method="post" action="{{ route('logout') }}">
    @csrf
    <button type="submit" class="bg-red-500">
        Logout
    </button>
</form>
<div style="background: #2d3748; color: #a0aec0" >
    <h3 style="color: orangered">Agiliza</h3>
    <ul>
        <li><a style="text-decoration: none; color: #a0aec0" href="{{route('insereImovel')}}">Cadastrar imovel</a></li>
        <li style="padding: 5px 0 5px 0"><a style="text-decoration: none; color: #a0aec0" href="{{route('insereImovel')}}">Mostrar todos imoveis</a></li>
        <li><a style="text-decoration: none; color: #a0aec0" href="{{route('insereImovel')}}">Cadastrar imovel</a></li>
    </ul>
</div>
