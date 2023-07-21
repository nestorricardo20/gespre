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
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Politica</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('politicas.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Politica:</strong>
                            {{ $politica->politica }}
                        </div>
                        <div class="form-group">
                            <strong>Linea:</strong>
                            {{ $politica->linea }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $politica->estado }}
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