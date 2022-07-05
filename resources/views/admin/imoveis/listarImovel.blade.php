<tr class="col mt-3">
    <td class="border p-2">{{$imovel->id}}</td>
    <td class="border p-2">{{$imovel->titulo}}</td>
    <td class="border p-2">R$ {{$imovel->valor}}</td>
    <td class="border p-2">{{$imovel->descricao}}</td>
    <td class="border p-2">{{$imovel->cidade_id}}</td>
    <td class="border p-2">
        <a href="{{$imovel->googlemaps}}" target="__blank">link - GoogleMaps</a>                        
    </td>                        
    <td class="border p-2">
        <button type="button" class="btn btn-danger btn-sm">excluir</button>
        <button type="button" class="btn btn-danger btn-sm">editar</button>
    </td>
</tr>