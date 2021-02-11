@extends('layouts.main', ['activePage' => 'boleto', 'titlePage' => 'Usuarios'])
@section('content')
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header card-header-primary">
                    <h4 class="card-title">Pasajes</h4>
                    <p class="card-category">Pasajes registrados</p>
                  </div>
                  <div class="card-body">
                    @if (session('success'))
                    <div class="alert alert-success" role="success">
                      {{ session('success') }}
                    </div>
                    @endif
                    <div class="row">
                      <div class="col-12 text-right">
                        <a href="{{ route('boleto.create') }}" class="btn btn-sm btn-facebook">Añadir Pasaje</a>
                      </div>
                    </div>
                    <div class="table-responsive">
                      <table class="table">
                        <thead class="text-primary">
                          <th>ID</th>
                          <th>Fecha</th>
                          <th>Hora</th>
                         
                          <th>Hora salida</th>
                          <th>Hora llegada</th>
                          <th>Created_at</th>
                          <th class="text-right">Acciones</th>
                        </thead>
                        <tbody>
                     
                         @foreach ($boleto as $boletos)
                         
                         <tr>
                              <td>{{ $boletos->id }}</td>
                              <td>{{ $boletos->date }}</td>
                              <td>{{ $boletos->hour_c }}</td>
                              
                              
                              <td>{{ $boletos->hour_s}}</td>
                              <td>{{ $boletos->hour_ll}}</td>
                              
                              
                              <td>{{ $boletos->created_at }}</td>
                              <td class="td-actions text-right">
                           
                                <a href="{{ route('boleto.edit', $boletos->id) }}" class="btn btn-warning"><i class="material-icons">edit</i></a>
                                <form action="#" method="POST" style="display: inline-block;" onsubmit="return confirm('Seguro?')">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit" rel="tooltip">
                                  <i class="material-icons">close</i>
                                </button>
                              </form>
                              </td>
                            </tr>
                            @endforeach
                        
                         
                        </tbody>
                      </table>
                    </div>
                  </div>
                  <div class="card-footer mr-auto">
                    {{ $boleto->links() }}
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection