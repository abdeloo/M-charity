@extends('layouts.admin')

@section('content1')

   <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-6"> 
                       
       <form action="{{ url('adherents/'. $adherent->id) }}" method="POST">
    
       @csrf
       {{ method_field('PUT') }}
            <div class="form-group">
            <label for="title">Nom  de l'adherent</label>
            <input type="text" class="form-control" id="title" name="title" required value="{{ $adherent->name }}" readonly>
            </div>
             
            <div class="form-group">
            <label for="project_state">Etat d'adhésion  </label>
                <select class="form-control" id="adhesion_state" name="adhesion_state">
                <option value="en cours de traitement">en cours de traitement</option>
                <option value="autorisé">autorisé</option>
                <option value="refusé">refusé</option>
            </select>
            </div>
            

            <button type="submit" class="btn btn-primary" value ="Enregistrer">Submit</button>
        </form>
            </div>
        </div>
    </div>

@endsection