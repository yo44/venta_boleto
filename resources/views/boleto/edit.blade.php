@extends('layouts.main', ['activePage' => 'boleto', 'titlePage' => 'Nuevo Pasaje'])
@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <form action="{{route('boleto.store')}}" method="post" class="form-horizontal">
          @csrf
          <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title">Pasaje</h4>
              <p class="card-category">Editar datos</p>
            </div>
            <div class="card-body">
              {{-- @if ($errors->any())
                  <div class="alert alert-danger">
                    <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                    </ul>
                  </div>
              @endif --}}
              
              <div class="row">
                <label for="date" class="col-sm-2 col-form-label">Fecha</label>
                <div class="col-sm-7">
                  
                  <input type="date" class="form-control" name="date" value="{{ old('date', $boleto->date) }}" autofocus>
                  @if ($errors->has('date'))
                    <span class="error text-danger" for="input-date">{{ $errors->first('date') }}</span>
                  @endif
                </div>
              </div>
              
              <div class="row">
                <label for="hour_c" class="col-sm-2 col-form-label">Hora de Compra</label>
                <div class="col-sm-7">
                  <input type="text" class="form-control" name="hour_c" placeholder="Ingrese la hora" value="{{ old('hour_c',$boleto->hour_c) }}" autofocus>
                  @if ($errors->has('hour_c'))
                    <span class="error text-danger" for="input-hour_c">{{ $errors->first('hour_c') }}</span>
                  @endif
                </div>
              </div>

              
             
               
              <div class="row">
                <label for="hour_c" class="col-sm-2 col-form-label">Vuelo</label>
                <div class="col-sm-7">
              <select id="flights_id" name="flights_id" class="form-control">
              <option>------Seleccionar------</option>
              @foreach($flight as $flights)
              <option value="{{ $flights['id'] }}">{{ $flights['name'] }}</option>
               @endforeach
              </select>
              </div>
              </div>
              

              <div class="row">
                <label for="hour_c" class="col-sm-2 col-form-label">Hora de salida</label>
                <div class="col-sm-7">
              <select id="flights_id" name="flights_id" class="form-control">
              <option>------Seleccionar------</option>
              @foreach($flight as $flights)
              <option value="{{ $flights['id'] }}">{{ $flights['hour_s'] }}</option>
               @endforeach
              </select>
              </div>
              </div>

               
              <div class="row">
                <label for="hour_c" class="col-sm-2 col-form-label">Hora de llegada</label>
                <div class="col-sm-7">
              <select id="flights_id" name="flights_id" class="form-control">
              <option>------Seleccionar------</option>
              @foreach($flight as $flights)
              <option value="{{ $flights['id'] }}">{{ $flights['hour_ll'] }}</option>
               @endforeach
              </select>
              </div>
              </div>    


            </div>
            <!--Footer-->
            <div class="card-footer ml-auto mr-auto">
              <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
            <!--End footer-->
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
