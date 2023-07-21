<x-app-layout>
 

    <div class="m-grid__item m-grid__item--fluid m-grid m-grid--hor-desktop m-grid--desktop m-body"  style="padding-top: 30px!important;"  >
        <div class="m-grid__item m-grid__item--fluid  m-grid m-grid--ver    m-container m-container--responsive m-container--xxl m-page__container"style="width:1700px !important ;" >

            <div class="m-grid__item m-grid__item--fluid m-wrapper">
                <div class="m-content">
                    {{-- aqui comienza lo creado por laravel --}}

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Politica') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('politicas.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Politica</th>
										<th>Linea</th>
										<th>Estado</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($politicas as $politica)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $politica->politica }}</td>
											<td>{{ $politica->linea }}</td>
											<td>{{ $politica->estado }}</td>

                                            <td>
                                                <form action="{{ route('politicas.destroy',$politica->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('politicas.show',$politica->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('politicas.edit',$politica->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $politicas->links() !!}
            </div>
        </div>
    </div>

{{-- aqui acaba lo creado por laravel --}}
                </div>
            </div>
        </div>
    </div>


</x-app-layout>
