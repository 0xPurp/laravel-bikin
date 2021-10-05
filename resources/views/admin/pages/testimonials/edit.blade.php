@extends('admin.template.template')

@section('back')
    
@foreach($testimonials as $item)
@csrf
<form enctype="multipart/form-data" action="{{route("testimonials.update", $homePage->id)}}" method="POST">
    @method("PUT")
    <br><br><br>
    <div style="display: flex; justify-content: center;">
    <div style="display:flex; flex-direction:column">
    <label for="">Title:</label>
    <input type="text" name="titre" value="{{$testimonials->titre}}">
    <br>
    <label for="">Name :</label>
    <input type="text" name="soustitre" value="{{$testimonials->sous_titre}}">
    <br>
    <label for="">Bouton 1 :</label>
    <input type="text" name="titrecard1" value="{{$testimonials->avis1}}">
    <br>
    <label for="">Bouton 2 :</label>
    <input type="text" name="descriptioncard1" value="{{$testimonials->photoavis1}}">
    <br>
    <label for="">Bouton 3 :</label>
    <input type="text" name="titrecard2" value="{{$testimonials->nomavis1}}">
    <br>
    <label for="">Bouton 4 :</label>
    <input type="text" name="descriptioncard2" value="{{$testimonials->workavis1}}">
    <br>
    <label for="">Bouton 5 :</label>
    <input type="text" name="titrecard3" value="{{$testimonials->avis2}}">
    <br>
    <label for="">Bouton 6 :</label>
    <input type="text" name="descriptioncard3" value="{{$testimonials->photoavis2}}">
    <br>
    <label for="">Bouton 6 :</label>
    <input type="text" name="descriptioncard3" value="{{$testimonials->nomavis2}}">
    <br>
    <label for="">Bouton 6 :</label>
    <input type="text" name="descriptioncard3" value="{{$testimonials->workavis2}}">
    <br>
    <label for="">Bouton 6 :</label>
    <input type="text" name="descriptioncard3" value="{{$testimonials->avis3}}">
    <br>
    <label for="">Bouton 6 :</label>
    <input type="text" name="descriptioncard3" value="{{$testimonials->photoavis3}}">
    <br>
    <label for="">Bouton 6 :</label>
    <input type="text" name="descriptioncard3" value="{{$testimonials->nomavis3}}">
    <br>
    </div>
    </div>

    <div style="display: flex; justify-content:center;">
    <button class="btn btn-warning" type="submit">Update</button>
    </div>
</form>
@endforeach
@endsection