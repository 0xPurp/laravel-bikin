@extends('admin.template.template')

@section('back')
    
@foreach($navbar as $item)
@csrf
<form enctype="multipart/form-data" action="{{route("navbars.update", $services->id)}}" method="POST">
    @method("PUT")
    <br><br><br>
    <div style="display: flex; justify-content: center;">
    <div style="display:flex; flex-direction:column">
    <label for="">Title:</label>
    <input type="text" name="titre" value="{{$navbar->nomsite}}">
    <br>
    <label for="">Name :</label>
    <input type="text" name="soustitre" value="{{$navbar->btnhome}}">
    <br>
    <label for="">Bouton 1 :</label>
    <input type="text" name="titrecard1" value="{{$navbar->btnabout}}">
    <br>
    <label for="">Bouton 2 :</label>
    <input type="text" name="descriptioncard1" value="{{$navbar->btnservices}}">
    <br>
    <label for="">Bouton 3 :</label>
    <input type="text" name="titrecard2" value="{{$navbar->btnportfolio}}">
    <br>
    <label for="">Bouton 4 :</label>
    <input type="text" name="descriptioncard2" value="{{$navbar->btnteam}}">
    <br>
    <label for="">Bouton 5 :</label>
    <input type="text" name="titrecard3" value="{{$navbar->btncontact}}">
    <br>
    <label for="">Bouton 6 :</label>
    <input type="text" name="descriptioncard3" value="{{$navbar->btngetstarted}}">
    <br>
    </div>
    </div>

    <div style="display: flex; justify-content:center;">
    <button class="btn btn-warning" type="submit">Update</button>
    </div>
</form>
@endforeach
@endsection