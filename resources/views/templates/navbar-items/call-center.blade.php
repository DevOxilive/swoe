<!-- Apartado Pacientes -->
<x-list-item icon="bi bi-person-rolodex" name="Pacientes" route="main" isTab="n" />

<!-- Apartado Arribo -->
<x-list-item icon="bi bi-box-arrow-in-right" name="Arribo" route="main" isTab="n" />

<!-- Apartado Servicios -->
<x-list-item icon="bi bi-circle-fill" name="Servicios" route="main" isTab="n" />

<!-- Apartado Generar Incidencia -->
<x-list-nav-bar name="Generar Incidencia" icon="bi bi-circle-fill" route="main" nameId="generar-incidencia" >
    <x-list-item name="Crear Evento" route="main"/>
    <x-list-item name="Cancelar Evento" route="main"/>
</x-list-nav-bar>
