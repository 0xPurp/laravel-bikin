@extends('admin.template.template')

@section('back')
    
@foreach($testimonials as $item)
@csrf
<form enctype="multipart/form-data" action="{{route("portfolios.update", $homePage->id)}}" method="POST">
    @method("PUT")
    <br><br><br>
    <div style="display: flex; justify-content: center;">
    <div style="display:flex; flex-direction:column">
    <label for="">Title:</label>
    <input type="text" name="titre" value="{{$portfolio->titre}}">
    <br>
    <label for="">Name :</label>
    <input type="text" name="soustitre" value="{{$portfolio->sous_titre}}">
    <br>
    <label for="">Bouton 1 :</label>
    <input type="text" name="titrecard1" value="{{$portfolio->avis1}}">
    <br>
    <label for="">Bouton 2 :</label>
    <input type="text" name="descriptioncard1" value="{{$portfolio->photoavis1}}">
    <br>
    <label for="">Bouton 3 :</label>
    <input type="text" name="titrecard2" value="{{$portfolio->nomavis1}}">
    <br>
    <label for="">Bouton 4 :</label>
    <input type="text" name="descriptioncard2" value="{{$portfolio->workavis1}}">
    <br>
    <label for="">Bouton 5 :</label>
    <input type="text" name="titrecard3" value="{{$portfolio->avis2}}">
    <br>
    <label for="">Bouton 6 :</label>
    <input type="text" name="descriptioncard3" value="{{$portfolio->photoavis2}}">
    <br>
    <label for="">Bouton 6 :</label>
    <input type="text" name="descriptioncard3" value="{{$portfolio->nomavis2}}">
    <br>
    <label for="">Bouton 6 :</label>
    <input type="text" name="descriptioncard3" value="{{$portfolio->workavis2}}">
    <br>
    <label for="">Bouton 6 :</label>
    <input type="text" name="descriptioncard3" value="{{$portfolio->avis3}}">
    <br>
    <label for="">Bouton 6 :</label>
    <input type="text" name="descriptioncard3" value="{{$portfolio->photoavis3}}">
    <br>
    <label for="">Bouton 6 :</label>
    <input type="text" name="descriptioncard3" value="{{$portfolio->nomavis3}}">
    <br>
    </div>
    </div>

    <div style="display: flex; justify-content:center;">
    <button class="btn btn-warning" type="submit">Update</button>
    </div>
</form>
@endforeach
@endsection