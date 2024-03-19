<!-- Módulo Oxígeno -->
<x-list-nav-bar name="Oxígeno" icon="bi bi-clipboard2-pulse" route="main" nameId="oxigeno">
    <x-list-item route="main" name="Rutas" />
    <x-list-item route="main" name="Pacientes" />
    <x-list-item route="main" name="Administradora" />
    <x-list-item route="main" name="Bancos" />
    <x-list-item route="main" name="Choferes" />
    <x-list-item route="main" name="Carros" />
    <x-list-item route="main" name="Equipo de Oxígeno" />
    <x-list-item route="main" name="Insumos" />
</x-list-nav-bar>

<!-- Módulo Almacén -->
<x-list-nav-bar name="Almacén" icon="bi bi-house-lock-fill" route="main" nameId="almacen">
    <x-list-item route="main" name="Materiales y Recursos" /> 
    <x-list-nav-bar name="Vales" route="main" nameId="vales" parentNav="almacen" isTab="y">
        <x-list-item route="main" name="Insumos"/>        
        <x-list-item route="main" name="Oxígeno"/>        
    </x-list-nav-bar> 
    <x-list-nav-bar name="Gestion de Materiales" route="main" nameId="gestion-materiales" parentNav="almacen" isTab="y">
        <x-list-item route="main" name="Entrada o Salida"/>        
        <x-list-item route="main" name="Historial"/>        
    </x-list-nav-bar>
    <x-list-nav-bar name="Folios" route="main" nameId="folios" parentNav="almacen" isTab="y">
        <x-list-item route="main" name="Existencias"/>        
        <x-list-item route="main" name="Historial"/>        
        <x-list-item route="main" name="Archivo"/>        
    </x-list-nav-bar>    
</x-list-nav-bar>

<!-- Módulo Enfermeria -->
<x-list-nav-bar name="Enfermería" icon="bi bi-capsule" route="main" nameId="enfermeria">
    <x-list-nav-bar name="Dar de Alta" route="main" nameId="dar-alta" parentNav="enfermeria" isTab="y">
        <x-list-item route="main" name="Código"/>        
        <x-list-item route="main" name="CPTs"/>        
    </x-list-nav-bar>
    <x-list-nav-bar name="Crear Proceso" route="main" nameId="crear-proceso" parentNav="enfermeria" isTab="y">
        <x-list-item route="main" name="Pacientes"/>        
        <x-list-item route="main" name="Procedimientos"/>        
        <x-list-item route="main" name="Historial Aseguradora"/>        
    </x-list-nav-bar>
    <x-list-nav-bar name="Servicios" route="main" nameId="servicios" parentNav="enfermeria" isTab="y">
        <x-list-item route="main" name="Horarios"/>        
        <x-list-item route="main" name="Tipos de Servicios"/>      
    </x-list-nav-bar>
    <x-list-item route="main" name="Bitacora de Asistencias" />
    <x-list-item route="main" name="Enfermeros" />
    <x-list-item route="main" name="Nóminas" />
</x-list-nav-bar>

<!-- Módulo Call Center -->
<x-list-nav-bar name="Call Center" icon="bi bi-telephone-fill" route="main" nameId="call-center" >
    <x-list-item route="main" name="Pacientes" />
    <x-list-item route="main" name="Arribo" />
    <x-list-item route="main" name="Servicios" />
    <x-list-nav-bar name="Generar Incidencia" route="main" nameId="generar-incidencia" parentNav="call-center" isTab="y">
        <x-list-item route="main" name="Crear Evento"/>        
        <x-list-item route="main" name="Cancelar Evento"/>        
    </x-list-nav-bar>
</x-list-nav-bar>

<!-- Módulo Capital Humano -->
<x-list-nav-bar name="Capital Humano" icon="bi bi-person-circle" route="main" nameId="capital-humano">
    <x-list-item route="main" name="Empleados" />
</x-list-nav-bar>

<!-- Módulo Sistemas -->
<x-list-nav-bar name="Sistemas" icon="bi bi-pc-display-horizontal" route="main" nameId="sistemas"> 
    <x-list-item route="main" name="Usuarios" />
</x-list-nav-bar>