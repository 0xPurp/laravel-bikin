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
        <th scope="col">Nom du site</th>
        <th scope="col">Bouton 1</th>
        <th scope="col">Bouton 2</th>
        <th scope="col">Bouton 3</th>
        <th scope="col">Bouton 4</th>
        <th scope="col">Bouton 5</th>
        <th scope="col">Bouton 6</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>

    @foreach ($navbar as $item)
    <tr>
        <th scope="row">{{$item->id}}</th>
        <td>{{$item->nomsite}}</td>
        <td>{{$item->btnhome}}</td>
        <td>{{$item->btnabout}}</td>
        <th>{{$item->btnservices}}</th>
        <td>{{$item->btnportfolio}}</td>
        <td>{{$item->btnteam}}</td>
        <td>{{$item->btncontact}}</td>
        <th>{{$item->btngetstarted}}</th>
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