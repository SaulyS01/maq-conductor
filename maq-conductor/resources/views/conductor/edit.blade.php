<x-app-layout>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <form action="/conductores/{{$conductor->id}}" method="POST">
        @csrf
        @method('PUT');
        <div class="mb-3">
            <label class="form-label">Nombre</label>
            <input name="nombre" type="text" class="form-control" value="{{$conductor->nombre}}">
            @error('nombre')
            <div id="nombre" class="form-text text-danger">*{{$message}}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Apellido paterno</label>
            <input name="ap_paterno" type="text" class="form-control" value="{{$conductor->ap_paterno}}">
            @error('ap_paterno')
            <div class="form-text text-danger">*{{$message}}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Apellido materno</label>
            <input name="ap_materno" type="text" class="form-control" value="{{$conductor->ap_materno}}">
            @error('ap_materno')
            <div class="form-text text-danger">*{{$message}}</div>
            @enderror
        </div>
        <div class="row">
            <div class="mb-3 col-4">
                <label class="form-label">Especialidad</label>
                <input name="especialidad" type="text" class="form-control" value="{{$conductor->especialidad}}">
                @error('especialidad')
                <div class="form-text text-danger">*{{$message}}</div>
                @enderror
            </div>
            <div class="mb-3 col-4">
                <label class="form-label">Estado</label>
                <select aria-describedby="estado" class="form-select" name="estado">
                    <option value="" selected disabled>Selecciona un estado</option>
                    <option value="1" @if($conductor->estado == '1') selected
                        @endif>Activo</option>
                    <option value="2" @if($conductor->estado == '2') selected
                        @endif>Inactivo</option>
                </select>
                @error('estado')
                <div class="form-text text-danger">*{{$message}}</div>
                @enderror
            </div>
            <div class="mb-3 col-4">
                <label class="form-label">Edad</label>
                <input name="edad" type="number" class="form-control" value="{{$conductor->edad}}">
                @error('edad')
                <div class="form-text text-danger">*{{$message}}</div>
                @enderror
            </div>
        </div>
        <div class="float-end">
            <x-jet-secondary-button href="/conductores" class="me-2">Cerrar</x-jet-secondary-button>
            <x-jet-danger-button type="submit">Guardar</x-jet-danger-button>
        </div>
    </form>
</x-app-layout>
