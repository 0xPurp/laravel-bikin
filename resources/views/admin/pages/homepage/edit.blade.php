@extends('admin.template.template')

@section('back')
    
@foreach($homePage as $item)
@csrf
<form enctype="multipart/form-data" action="{{route("home.update", $homePage->id)}}" method="POST">
    @method("PUT")
    <br><br><br>
    <div style="display: flex; justify-content: center;">
    <div style="display:flex; flex-direction:column">
    <label for="">Title:</label>
    <input type="text" name="titre" value="{{$homePage->titrehomepage}}">
    <br>
    <label for="">Name :</label>
    <input type="text" name="soustitre" value="{{$homePage->sous_titrehomepage}}">
    <br>
    <label for="">Bouton 1 :</label>
    <input type="text" name="titrecard1" value="{{$homePage->btnstart}}">
    <br>
    <label for="">Bouton 2 :</label>
    <input type="text" name="descriptioncard1" value="{{$homePage->titreabout}}">
    <br>
    <label for="">Bouton 3 :</label>
    <input type="text" name="titrecard2" value="{{$homePage->btnabout}}">
    <br>
    <label for="">Bouton 4 :</label>
    <input type="text" name="descriptioncard2" value="{{$homePage->titrecard1}}">
    <br>
    <label for="">Bouton 5 :</label>
    <input type="text" name="titrecard3" value="{{$homePage->descriptioncard1}}">
    <br>
    <label for="">Bouton 6 :</label>
    <input type="text" name="descriptioncard3" value="{{$homePage->titrecard2}}">
    <br>
    <label for="">Bouton 6 :</label>
    <input type="text" name="descriptioncard3" value="{{$homePage->descriptioncard2}}">
    <br>
    <label for="">Bouton 6 :</label>
    <input type="text" name="descriptioncard3" value="{{$homePage->titrecard3}}">
    <br>
    <label for="">Bouton 6 :</label>
    <input type="text" name="descriptioncard3" value="{{$homePage->descriptioncard3}}">
    <br>
    <label for="">Bouton 6 :</label>
    <input type="text" name="descriptioncard3" value="{{$homePage->titrecard4}}">
    <br>
    <label for="">Bouton 6 :</label>
    <input type="text" name="descriptioncard3" value="{{$homePage->descriptioncard4}}">
    <br>
    </div>
    </div>

    <div style="display: flex; justify-content:center;">
    <button class="btn btn-warning" type="submit">Update</button>
    </div>
</form>
@endforeach
@endsection