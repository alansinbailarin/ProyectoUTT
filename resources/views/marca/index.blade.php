
@extends('layouts.app')

@section('template_title')
    Marca
@endsection


@section('content')

    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Marca</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                        @if ($message = Session::get('success'))
                                    <div class="alert alert-success">
                                        <p>{{ $message }}</p>
                                    </div>
                                @endif
                            @can('crear-rol')
                
                            <div class="float-right">
                                <a href="{{ route('marcas.create') }}" class="btn btn-warning">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                            @endcan
                        <div class="table-responsive">
                        <table class="table table-striped table-hover mt-2">
                                <thead class="thead">
                                <tr>
                                        <th>No</th>
                                        
										<th>Nombre de marca</th>
										<th>Descripción</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($marcas as $marca)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $marca->name }}</td>
											<td>{{ $marca->descripcion }}</td>
                                            <td>
                                            @can('editar-marca]')
                                                        <a class="btn btn-sm btn-success mt-2" href="{{ route('marcas.edit',$marca->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @endcan

                                                    @can('borrar-marca')
                                                    <form action="{{ route('marcas.destroy',$marca->id) }}" method="POST"style="display:inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm mt-2" onclick="
                                                    return confirm('Are you sure that you want to delete this item?')" ><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                                    @endcan
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div class="pagination justify-content end">
                    {!! $marcas ->links() !!}
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

