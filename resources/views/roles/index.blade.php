@extends('layouts.app')


@section('content')

    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Roles</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            @can('crear-rol')
                            <div class="float-right">
                                <a href="{{ route('roles.create') }}" class="btn btn-warning">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                            @endcan
                             
                        <div class="table-responsive">
                            <table class="table table-striped table-hover mt-2">
                                <thead class="thead">
                                    <tr>
                                        <th>No.</th>
										<th>Rol</th>
										<th>Acciones</th>

                                
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($roles as $role) 
                                        <tr>
                                            <td>{{++$i}}</td>  
											<td>{{ $role->name }}</td>
											<td>
                                                    @can('editar-rol')
                                                        <a class="btn btn-sm btn-success mt-2" href="{{ route('roles.edit',$role->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @endcan

                                                    @can('borrar-rol')
                                                    <form action="{{ route('roles.destroy',$role->id) }}" method="POST"style="display:inline">
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
                    {!! $roles ->links() !!}
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

