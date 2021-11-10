<x-app-layout>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <form action="/conductores" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label">Nombre</label>
            <input name="nombre" type="text" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Apellido paterno</label>
            <input name="ap_paterno" type="text" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Apellido materno</label>
            <input name="ap_materno" type="text" class="form-control">
        </div>
        <div class="row">
            <div class="mb-3 col-4">
                <label class="form-label">Especialidad</label>
                <input name="especialidad" type="text" class="form-control">
            </div>
            <div class="mb-3 col-4">
                <label class="form-label">Estado</label>
                <select aria-describedby="estado" class="form-select" name="estado">
                    <option value="" selected disabled>Selecciona un estado</option>
                    <option value="1">Activo</option>
                    <option value="2">Inactivo</option>
                </select>
                @error('estado')
                <div id="estado" class="form-text text-danger">*{{$message}}</div>
                @enderror
            </div>
            <div class="mb-3 col-4">
                <label class="form-label">Edad</label>
                <input name="edad" type="number" class="form-control">
            </div>
        </div>
        <div class="float-end">
            <x-jet-secondary-button href="/conductores" class="me-2">Cerrar</x-jet-secondary-button>
            <x-jet-danger-button type="submit">Guardar</x-jet-danger-button>
        </div>
    </form>
</x-app-layout>
