<x-card-table>
    <div class="my-3 row">
        <div class="col-3">
            <x-success-button href="maquinarias/create">
                Agregar comunidad
            </x-success-button>
        </div>
        <div class="col-9">
            <x-jet-input wire:model="palabraBuscar" placeholder="Ingrese el nombre de la comunidad" />
        </div>
    </div>
    @if (count($maquinarias) > 0)
    <x-card-table class="d-flex justify-content-center">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Código</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Marca</th>
                    <th scope="col">Modelo</th>
                    <th scope="col">Estado</th>
                    <th scope="col">Conductor</th>
                    <th scope="col" colspan="2">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($maquinarias as $maquinaria)
                <tr>
                    <th scope="row">{{$maquinaria->id}}</th>
                    <td>{{$maquinaria->nombre}}</td>
                    <td>{{$maquinaria->marca}}</td>
                    <td>{{$maquinaria->modelo}}</td>
                    <td>
                        @if ($maquinaria->estado === '1')
                        <i class="fas fa-circle text-success">Activo</i>
                        @else
                        <i class="fas fa-circle text-danger">Inactivo</i>
                        @endif
                    </td>
                    @if ($maquinaria->conductor_id)
                    <td><a href="">({{$maquinaria->conductor_id}}) {{$maquinaria->conductor->nombre}}</a></td>
                    @else
                    <td>Ningun Conductor</td>
                    @endif
                    <td>
                        <x-primary-button href="/maquinarias/{{$maquinaria->id}}/edit">Editar</x-primary-button>
                    </td>
                    <td>
                        <form action="{{route('maquinarias.destroy', $maquinaria->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <x-jet-danger-button type="submit">Eliminar</x-jet-danger-button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </x-card-table>
    @else
    <x-card-table class="d-flex justify-content-center">
        NO SE ENCONTRARON REGISTROS
    </x-card-table>
    @endif
    <div class="float-end">
        {{ $maquinarias->links('pagination-links') }}
    </div>
</x-card-table>
