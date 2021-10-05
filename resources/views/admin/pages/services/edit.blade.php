@extends('admin.template.template')

@section('back')
    
@foreach($services as $item)
@csrf
<form enctype="multipart/form-data" action="{{route("services.update", $services->id)}}" method="POST">
    @method("PUT")
    <br><br><br>
    <div style="display: flex; justify-content: center;">
    <div style="display:flex; flex-direction:column">
    <label for="">Title:</label>
    <input type="text" name="titre" value="{{$services->titre}}">
    <br>
    <label for="">Name :</label>
    <input type="text" name="soustitre" value="{{$services->soustitre}}">
    <br>
    <label for="">Text :</label>
    <input type="text" name="titrecard1" value="{{$services->titrecard1}}">
    <br>
    <label for="">Text :</label>
    <input type="text" name="descriptioncard1" value="{{$services->descriptioncard1}}">
    <br>
    <label for="">Text :</label>
    <input type="text" name="titrecard2" value="{{$services->titrecard2}}">
    <br>
    <label for="">Text :</label>
    <input type="text" name="descriptioncard2" value="{{$services->descriptioncard2}}">
    <br>
    <label for="">Text :</label>
    <input type="text" name="titrecard3" value="{{$services->titrecard3}}">
    <br>
    <label for="">Text :</label>
    <input type="text" name="descriptioncard3" value="{{$services->descriptioncard3}}">
    <br>
    <label for="">Text :</label>
    <input type="text" name="titrecard4" value="{{$services->titrecard4}}">
    <br>
    <label for="">Text :</label>
    <input type="text" name="descriptioncard4" value="{{$services->descriptioncard4}}">
    <br>
    
    </div>
    </div>

    <div style="display: flex; justify-content:center;">
    <button class="btn btn-warning" type="submit">Update</button>
    </div>
</form>
@endforeach
@endsection