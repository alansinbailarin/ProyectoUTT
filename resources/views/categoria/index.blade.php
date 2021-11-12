@extends('layouts.app')

@section('template_title')
    Categoria
@endsection


@section('content')

    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Categoría</h3>
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
                                <a href="{{ route('categorias.create') }}" class="btn btn-warning">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                            @endcan
                        <div class="table-responsive">
                        <table class="table table-striped table-hover mt-2">
                                <thead class="thead">
                                <tr>
                                        <th>No</th>
                                        
										<th>Nombre categoría</th>
										<th>Descripción</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($categorias as $categoria)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $categoria->name }}</td>
											<td>{{ $categoria->descripcion }}</td>
                                            <td>
                                            @can('editar-categoria]')
                                                        <a class="btn btn-sm btn-success mt-2" href="{{ route('categorias.edit',$categoria->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @endcan

                                                    @can('borrar-categoria')
                                                    <form action="{{ route('categorias.destroy',$categoria->id) }}" method="POST"style="display:inline">
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
                    {!! $categorias ->links() !!}
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

