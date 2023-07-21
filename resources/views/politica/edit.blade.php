<x-app-layout>

    <div class="m-grid__item m-grid__item--fluid m-grid m-grid--hor-desktop m-grid--desktop m-body"  style="padding-top: 30px!important;"  >
        <div class="m-grid__item m-grid__item--fluid  m-grid m-grid--ver    m-container m-container--responsive m-container--xxl m-page__container"style="width:1700px !important ;" >

            <div class="m-grid__item m-grid__item--fluid m-wrapper">
                    {{-- aqui comienza lo creado por laravel --}}
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Update') }} Politica</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('politicas.update', $politica->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('politica.form')

                        </form>
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
