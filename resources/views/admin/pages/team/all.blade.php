@extends('admin.template.template')

@section('back')
    
<h1> About</h1> 

<br><br>
<div style="display: flex; justify-content:center;">
    <h1>Team</h1>
</div>

<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Titre</th>
        <th scope="col">Sous-Titre</th>
        <th scope="col">Photo Crew 1</th>
        <th scope="col">Nom Crew 1</th>
        <th scope="col">Poste Crew 1</th>
        <th scope="col">Photo Crew 2</th>
        <th scope="col">Nom Crew 2</th>
        <th scope="col">Poste Crew 2</th>
        <th scope="col">Photo Crew 3</th>
        <th scope="col">Nom Crew 3</th>
        <th scope="col">Poste Crew 3</th>
        <th scope="col">Photo Crew 4</th>
        <th scope="col">Nom Crew 4</th>
        <th scope="col">Poste Crew 4</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>

    @foreach ($team as $item)
    <tr>
        <th scope="row">{{$item->id}}</th>
        <td>{{$item->titre}}</td>
        <td>{{$item->sous_titre}}</td>
        <td>{{$item->photocrew1}}</td>
        <td>{{$item->nomcrew1}}</td>
        <td>{{$item->postecrew1}}</td>
        <td>{{$item->photocrew2}}</td>
        <td>{{$item->nomcrew2}}</td>
        <th>{{$item->postecrew2}}</th>
        <td>{{$item->photocrew3}}</td>
        <td>{{$item->nomcrew3}}</td>
        <td>{{$item->postecrew3}}</td>
        <th>{{$item->photocrew4}}</th>
        <td>{{$item->nomcrew4}}</td>
        <td>{{$item->postecrew4}}</td>
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