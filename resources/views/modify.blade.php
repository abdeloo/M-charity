@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Modifier le profil</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    
					
                    <form action="{{ url('put') }}" method="POST" >
                    @csrf
                    {{ method_field('PUT') }}
                        <div class="form-group">
                            <label for="email">Nom</label>
                            <input type="text" name ="name" class="form-control" id="name" value="{{ Auth::user()->name }}">
                        </div>
                        <div class="form-group">
                            <label for="">Ville :</label>
                            <input type="text" class="form-control" name="city" id="city" value="{{ Auth::user()->city }}">
                        </div>
                        <div class="form-group">
                            <label for="">Téléphone :</label>
                            <input type="text" class="form-control" name ="phone" id="phone" value="{{ Auth::user()->phone }}">
                        </div>
                        <button type="submit" class="btn btn-default">Valider</button>
                    </form>


                    

                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
