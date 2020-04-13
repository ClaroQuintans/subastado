@extends('layouts.principal')
@section('stylesnina')

<div class="container-index container-estado-general">

    <div class="row row-1">
  
        <h2 class="title-section">{{ __('Estado General OT') }}</h2>

        <div class="dropdown dropdown-1">
            <select id="combo-searching" class="btn btn-secondary combo-searching">
                <option value="100">{{ __('FINALIZADAS') }}</option>
                <option value="0" selected>{{ __('NO FINALIZADAS') }}</option>
                <option value="-1">{{ __('TODAS') }}</option>
            </select>
        </div>

    </div>

    <div class="row row-2">

        <div class="search">
            <input id="searching" type="text" name="cualquier_termino" placeholder="{{ __('Buscar por cualquier término') }}">
        </div>

        <div class="filters">

            <a href="#filters" class="btn btn-secondary" data-toggle="collapse">{{ __('Filtros') }} <span class="caret"></span></a>
            <div id="filters" class="collapse">
                <div class="inner-filters">
                    <input type="text" class="form-control" name="responsable" placeholder="{{ __('Responsable') }}">
                    <input type="date" class="form-control" id="fecha_desde" name="fecha_desde" placeholder="{{ __('Desde') }}">
                    <input type="date" class="form-control" id="fecha_hasta" name="fecha_hasta" placeholder="{{ __('Hasta') }}">
                </div>
            </div>

        </div>

    </div>

    <div class="table-responsive">

        <table class="table table-hover display" id="laravel_datatable" width="100%">

            <thead>
                <tr>
                    <td>{ $cabecera }</td>
                   
                </tr>
            </thead>
            
            <?php /*
            <tbody>
                @foreach($partes as $parte)
                <tr>
                    @foreach($parte as $datos)
                    <td>
                        @if ($loop->first)
                        <a href="<?php echo route('orden_trabajo',['OT_id'=>$datos]); ?>">
                        {{ $datos }}
                        </a>
                        @else                 
                            @if ($loop->last)
                            <div class="progress">
                                <div class="progress-bar @if($datos=='100') progress-bar-success @else progress-bar-striped active @endif" role="progressbar" style="width: {{ $datos }}%;" aria-valuenow="{{ $datos }}" aria-valuemin="0" aria-valuemax="100">{{ $datos }}%</div>
                            </div>
                            @else
                                {{ $datos }}
                            @endif
                        @endif
                    </td>
                    @endforeach
                </tr>
                @endforeach
            </tbody>
            */ ?>

    

        </table>

    </div>
@endsection

@section('scripts')
 
@endsection