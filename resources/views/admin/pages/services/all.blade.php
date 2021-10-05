@extends('admin.template.template')

@section('back')
    
<h1> About</h1> 

<br><br>
<div style="display: flex; justify-content:center;">
    <h1>Services</h1>
</div>

<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Titre</th>
        <th scope="col">Sous-Titre</th>
        <th scope="col">Titre Card 1</th>
        <th scope="col">Description Card 1</th>
        <th scope="col">Titre Card 2</th>
        <th scope="col">Description Card 2</th>
        <th scope="col">Titre Card 3</th>
        <th scope="col">Description Card 3</th>
        <th scope="col">Titre Card 4</th>
        <th scope="col">Description Card 4</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>

    @foreach ($services as $item)
    <tr>
        <th scope="row">{{$item->id}}</th>
        <td>{{$item->titre}}</td>
        <td>{{$item->soustitre}}</td>
        <td>{{$item->titrecard1}}</td>
        <th>{{$item->descriptioncard1}}</th>
        <td>{{$item->titrecard2}}</td>
        <td>{{$item->descriptioncard2}}</td>
        <td>{{$item->titrecard3}}</td>
        <th>{{$item->descriptioncard3}}</th>
        <td>{{$item->titrecard4}}</td>
        <td>{{$item->descriptioncard4}}</td>
        <td>
            <a href ="{{route("services.edit", $item->id)}}" class="btn btn-success">Edit</a>
            <form action="{{route("services.destroy", $item->id)}}" method="POST">
                @csrf   
                @method('delete')
            <button type="submit" class="btn btn-danger mt-1">Delete</button>
            </form>
        </td>
      </tr>    
    @endforeach
    <tbody>




@endsection