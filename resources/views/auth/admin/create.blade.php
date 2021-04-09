@extends('layouts.admin')

@section('content1')

   <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-6"> 
                       
       <form action="{{ url('projects/store') }}" method="POST">
         @csrf
        <div class="form-group">
          <label for="title">Titre de Projet : </label>
          <input type="text" class="form-control" id="title" name="title" class="@error('title') is-invalid @enderror" required>
        
          @error('title')
            <div class="alert alert-danger">{{ $message }}</div>  
          @enderror

        </div>

        <div class="form-group">
        <label for="description">Description de projet :</label>
        <textarea class="form-control" id="description" name="description" rows="3"></textarea>
        </div>
        
        <div class="form-group">
        <label for="project_state">Etat de projet : </label>
            <select class="form-control" id="project_state" name="project_state">
            <option value="réalisé">réalisé</option>
            <option value="non-réalisé">non-réalisé</option>
           </select>
        </div>

        <div class="form-group">
          <label for="location">Lieu de Projet : </label>
          <input type="text" class="form-control" id="location" name="location" required>
        </div>

        <div class="form-group">
          <label for="action_date">Date d'action </label>
          <input type="date" class="form-control" id="action_date" name="action_date">
        </div>
        
        <!-- <div class="form-group">
            <label for="project_image">Image de projet</label>
            <input type="file" class="form-control-file" id="project_file" name="project_image" accept="image/png, image/jpeg" class="form-group">
        </div> -->

        <button type="submit" class="btn btn-primary" value ="Enregistrer">Submit</button>
        </form>
            </div>
        </div>
    </div>

@endsection