<x-card-table>
    <div class="my-3 row">
        <div class="col-3">
            <x-success-button href="conductores/create">
                Agregar comunidad
            </x-success-button>
        </div>
        <div class="col-9">
            <x-jet-input wire:model="palabraBuscar" placeholder="Ingrese el nombre de la comunidad" />
        </div>
    </div>
    @if (count($conductores) > 0)
    <x-card-table class="d-flex justify-content-center">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Código</th>
                    <th scope="col">Nombres y apellidos</th>
                    <th scope="col">especialidad</th>
                    <th scope="col">Edad</th>
                    <th scope="col">Estado</th>
                    <th scope="col" colspan="2">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($conductores as $conductor)
                <tr>
                    <th scope="row">{{$conductor->id}}</th>
                    <td>{{$conductor->nombre}} {{$conductor->ap_paterno}} {{$conductor->ap_materno}}</td>
                    <td>{{$conductor->especialidad}}</td>
                    <td>{{$conductor->edad}}</td>
                    <td>
                        @if ($conductor->estado === '1')
                        <i class="fas fa-circle text-success">Activo</i>
                        @else
                        <i class="fas fa-circle text-danger">Inactivo</i>
                        @endif
                    </td>
                    <td>
                        <x-primary-button href="/conductores/{{$conductor->id}}/edit">Editar</x-primary-button>
                    </td>
                    <td>
                        <form action="{{route('conductores.destroy', $conductor->id)}}" method="POST">
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
        {{ $conductores->links('pagination-links') }}
    </div>
</x-card-table>
