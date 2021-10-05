@extends('admin.template.template')

@section('back')
    
<h1> Features</h1> 

<br><br>
<div style="display: flex; justify-content:center;">
    <h1>Features</h1>
</div>

<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Titre</th>
        <th scope="col">Sous-Titre</th>
        <th scope="col">Titre Adress</th>
        <th scope="col">Adresse</th>
        <th scope="col">Titre Mail </th>
        <th scope="col">Mail 1</th>
        <th scope="col">Mail 2 </th>
        <th scope="col">Titre Phone </th>
        <th scope="col">Phone 1</th>
        <th scope="col">Phone 2 </th>
      </tr>
    </thead>

    @foreach ($contact as $item)
    <tr>
        <th scope="row">{{$item->id}}</th>
        <td>{{$item->titre}}</td>
        <td>{{$item->sous_titre}}</td>
        <td>{{$item->titreadresse}}</td>
        <td>{{$item->adresse}}</td>
        <td>{{$item->titremail}}</td>
        <td>{{$item->mail1}}</td>
        <td>{{$item->mail2}}</td>
        <th>{{$item->titrephone}}</th>
        <td>{{$item->phone1}}</td>
        <td>{{$item->phone2}}</td>
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