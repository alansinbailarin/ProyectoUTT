
@extends('layouts.app')

@section('template_title')
    Tipo de Alta
@endsection


@section('content')

    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Tipo Alta</h3>
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
                                <a href="{{ route('tipoaltas.create') }}" class="btn btn-warning">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                            @endcan
                        <div class="table-responsive">
                        <table class="table table-striped table-hover mt-2">
                                <thead class="thead">
                                <tr>
                                        <th>No</th>
                                        
										<th>Tipo de alta</th>

                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tipoaltas as $tipoalta)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $tipoalta->name }}</td>

                                            <td>
                                            @can('editar-tipoalta]')
                                                        <a class="btn btn-sm btn-success mt-2" href="{{ route('tipoaltas.edit',$tipoalta->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @endcan

                                                    @can('borrar-tipoalta')
                                                    <form action="{{ route('tipoaltas.destroy',$tipoalta->id) }}" method="POST"style="display:inline">
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
                    {!! $tipoaltas ->links() !!}
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

