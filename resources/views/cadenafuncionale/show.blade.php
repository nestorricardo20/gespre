<x-app-layout>


    <div class="m-grid__item m-grid__item--fluid m-grid m-grid--hor-desktop m-grid--desktop m-body"  style="padding-top: 30px!important;"  >
        <div class="m-grid__item m-grid__item--fluid  m-grid m-grid--ver    m-container m-container--responsive m-container--xxl m-page__container"style="width:1700px !important ;" >

            <div class="m-grid__item m-grid__item--fluid m-wrapper">
                    {{-- aqui comienza lo creado por laravel --}}

                <section class="content container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <br>
                                    <div class="float-left">
                                        <span class="card-title">{{ __('Show') }} Cadenafuncionale</span>
                                    </div>
                                    <div class="float-right">
                                        <a class="btn btn-primary" href="{{ route('cadenafuncionales.index') }}"> {{ __('Back') }}</a>
                                    </div>
                                </div>

                                <div class="card-body">
                                    
                                    <div class="form-group">
                                        <strong>Funcion:</strong>
                                        {{ $cadenafuncionale->funcion }}
                                    </div>
                                    <div class="form-group">
                                        <strong>Div Fun:</strong>
                                        {{ $cadenafuncionale->div_fun }}
                                    </div>
                                    <div class="form-group">
                                        <strong>Gru Fun:</strong>
                                        {{ $cadenafuncionale->gru_fun }}
                                    </div>
                                    <div class="form-group">
                                        <strong>Categoria:</strong>
                                        {{ $cadenafuncionale->categoria }}
                                    </div>
                                    <div class="form-group">
                                        <strong>Programa:</strong>
                                        {{ $cadenafuncionale->programa }}
                                    </div>
                                    <div class="form-group">
                                        <strong>Prod:</strong>
                                        {{ $cadenafuncionale->prod }}
                                    </div>
                                    <div class="form-group">
                                        <strong>Act:</strong>
                                        {{ $cadenafuncionale->act }}
                                    </div>
                                    <div class="form-group">
                                        <strong>Finalidad:</strong>
                                        {{ $cadenafuncionale->finalidad }}
                                    </div>
                                    <div class="form-group">
                                        <strong>Meta:</strong>
                                        {{ $cadenafuncionale->meta }}
                                    </div>
                                    <div class="form-group">
                                        <strong>Area:</strong>
                                        {{ $cadenafuncionale->area }}
                                    </div>
                                    <div class="form-group">
                                        <strong>Estado:</strong>
                                        {{ $cadenafuncionale->estado }}
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </section>
{{-- aqui acaba lo creado por laravel --}}
            </div>
        </div>
    </div>


</x-app-layout>
