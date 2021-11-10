<x-app-layout>

    <x-slot name="header">
        <h2 class="h4 font-weight-bold">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <x-card-table>
        <form action="/maquinarias" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label">Nombre</label>
                <input name="nombre" type="text" class="form-control">
                @error('nombre')
                <div class="form-text text-danger">*{{$message}}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Marca</label>
                <input name="marca" type="text" class="form-control">
                @error('marca')
                <div class="form-text text-danger">*{{$message}}</div>
                @enderror
            </div>
            <div class="row">
                <div class="mb-3 col-4">
                    <label class="form-label">Conductor</label>
                    <select aria-describedby="conductor_id" class="form-select" name="conductor_id">
                        <option value="" selected disabled>Selecciona una comunidad</option>
                        @foreach ($conductores as $conductor)
                        <option value="{{$conductor->id}}">{{$conductor->nombre}}</option>
                        @endforeach
                    </select>
                    @error('conductor_id')
                    <div class="form-text text-danger">*{{$message}}</div>
                    @enderror
                </div>
                <div class="mb-3 col-4">
                    <label class="form-label">Estado</label>
                    <select aria-describedby="estado" class="form-select" name="estado">
                        <option value="" selected disabled>Selecciona un estado</option>
                        <option value="1">Activo</option>
                        <option value="2">Inactivo</option>
                    </select>
                    @error('estado')
                    <div class="form-text text-danger">*{{$message}}</div>
                    @enderror
                </div>
                <div class="mb-3 col-4">
                    <label class="form-label">Modelo</label>
                    <input name="modelo" type="text" class="form-control">
                    @error('modelo')
                    <div class="form-text text-danger">*{{$message}}</div>
                    @enderror
                </div>
            </div>
            <div class="float-end">
                <x-jet-secondary-button href="/maquinarias" class="me-2">Cerrar</x-jet-secondary-button>
                <x-jet-danger-button type="submit">Guardar</x-jet-danger-button>
            </div>
        </form>
    </x-card-table>
</x-app-layout>
