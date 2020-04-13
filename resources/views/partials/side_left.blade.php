<!-- Sidebar -->

@php
$current = Route::current()->getName();
@endphp

<div id="menuLeft" class="main-left-menu panel panel-primary change">
    
    <div class="panel-body">    

        <div class="sidebar-heading">{{ __('Planificación') }}</div>
        <div class="list-group list-group-flush">

            <a href="{route('ot_sin_planificar')}" class="list-group-item list-group-item-action bg-light @if( substr($current, 0, strlen('ot_sin_planificar')) == 'ot_sin_planificar' ) activeItem @endif">{{ __('OT sin planificar ') }} <span class="ot-sp-number">(0)</span></a>
            
            <a href="{ route('estado_general') }" class="list-group-item list-group-item-action bg-light @if( substr($current, 0, strlen('estado_general')) == 'estado_general' ) activeItem @endif">{{ __('Estado General OT') }}</a>

            <a href="{ route('avance_bonos') }" class="list-group-item list-group-item-action bg-light @if( substr($current, 0, strlen('avance_bonos')) == 'avance_bonos' ) activeItem @endif">{{ __('Avance bonos') }}</a>
            
            <a href="{ route('resultados') }" class="list-group-item list-group-item-action bg-light @if( substr($current, 0, strlen('resultados')) == 'resultados' ) activeItem @endif">{{ __('Resultados') }}</a>

            <?php /*
            <a href="{{ route('planificacion_avances') }}" class="list-group-item list-group-item-action bg-light @if( substr($current, 0, strlen('planificacion_avances')) == 'planificacion_avances' ) activeItem @endif">{{ __('?Planificación y avances') }}</a>

            <a href="{{route('workorders.index')}}" class="list-group-item list-group-item-action bg-light @if( substr($current, 0, strlen('workorders')) == 'workorders' ) activeItem @endif">{{ __('?Órdenes de trabajo') }}</a>
            */ ?>

        </div>

        <div class="sidebar-heading">{{ __('Configuración') }}</div>
        <div class="list-group list-group-flush">

            <a href="{ route('bonos.index') }" class="list-group-item list-group-item-action bg-light @if( substr($current, 0, strlen('bonos')) == 'bonos' ) activeItem @endif">{{ __('Bonos') }}</a>

            <a href="{ route('maquinas.index' )}" class="list-group-item list-group-item-action bg-light @if( substr($current, 0, strlen('maquinas')) == 'maquinas' ) activeItem @endif">{{ __('Máquinas') }}</a>

            <a href="{ route('operarios.index') }" class="list-group-item list-group-item-action bg-light @if( substr($current, 0, strlen('operarios')) == 'operarios' ) activeItem @endif">{{ __('Operarios') }}</a>

            <a href="{ route('clientes.index') }" class="list-group-item list-group-item-action bg-light @if( substr($current, 0, strlen('clientes')) == 'clientes' ) activeItem @endif">{{ __('Clientes') }}</a>

            <a href="{ route('calendario.index', [ 'anho' => now()->year ]) }" class="list-group-item list-group-item-action bg-light @if( substr($current, 0, strlen('calendario')) == 'calendario' ) activeItem @endif">{{ __('Calendario') }}</a>

            
        </div>

    </div>
</div>   

<!-- /sidebar -->