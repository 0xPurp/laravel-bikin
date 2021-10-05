@extends('admin.template.template')

@section('back')
    
@foreach($features as $item)
@csrf
<form enctype="multipart/form-data" action="{{route("features.update", $features->id)}}" method="POST">
    @method("PUT")
    <br><br><br>
    <div style="display: flex; justify-content: center;">
    <div style="display:flex; flex-direction:column">
    <label for="">Title:</label>
    <input type="text" name="titre" value="{{$features->titrefeatures}}">
    <br>
    <label for="">Name :</label>
    <input type="text" name="soustitre" value="{{$features->soustitrefeatures}}">
    <br>
    <label for="">Bouton 1 :</label>
    <input type="text" name="titrecard1" value="{{$features->imgfeature1}}">
    <br>
    <label for="">Bouton 2 :</label>
    <input type="text" name="descriptioncard1" value="{{$features->titrefeature1}}">
    <br>
    <label for="">Bouton 3 :</label>
    <input type="text" name="titrecard2" value="{{$features->descriptionfeature1}}">
    <br>
    <label for="">Bouton 4 :</label>
    <input type="text" name="descriptioncard2" value="{{$features->item1feature1}}">
    <br>
    <label for="">Bouton 5 :</label>
    <input type="text" name="titrecard3" value="{{$features->item2feature1}}">
    <br>
    <label for="">Bouton 6 :</label>
    <input type="text" name="descriptioncard3" value="{{$features->item3feature1}}">
    <br>
    <label for="">Bouton 6 :</label>
    <input type="text" name="descriptioncard3" value="{{$features->imgfeature2}}">
    <br>
    <label for="">Bouton 6 :</label>
    <input type="text" name="descriptioncard3" value="{{$features->titrefeature2}}">
    <br>
    <label for="">Bouton 6 :</label>
    <input type="text" name="descriptioncard3" value="{{$features->descriptionfeature2}}">
    <br>
    <label for="">Bouton 6 :</label>
    <input type="text" name="descriptioncard3" value="{{$features->textfeature2}}">
    <br>
    <label for="">Bouton 6 :</label>
    <input type="text" name="descriptioncard3" value="{{$features->imgfeature3}}">
    <br>
    </div>
    </div>

    <div style="display: flex; justify-content:center;">
    <button class="btn btn-warning" type="submit">Update</button>
    </div>
</form>
@endforeach
@endsection