<!-- Apartado Materiales y Recursos -->
<x-list-item icon="bi bi-box2-fill" name="Materiales y Recursos" route="main" isTab="n" />

<!--Apartado de Gestion de Insumos-->
<x-list-nav-bar name="Vales" icon="bi bi-ticket-detailed-fill" route="main" nameId="vales">
    <x-list-item route="main" name="Insumos" />
    <x-list-item route="main" name="Oxígeno" />
</x-list-nav-bar>

<!--Apartado Gestión de Material-->
<x-list-nav-bar name="Gestión de Material" icon="bi bi-folder-fill" route="main" nameId="gestion-materiales">
    <x-list-item route="main" name="Entrada o Salida" />
    <x-list-item route="main" name="Historial" />
</x-list-nav-bar>

<!-- Apartado Folios -->
<x-list-nav-bar name="Folios" icon="bi bi-card-heading" route="main" nameId="folios" >
    <x-list-item route="main" name="Existencias" />
    <x-list-item route="main" name="Historial" />
    <x-list-item route="main" name="Archivo" />
</x-list-nav-bar>