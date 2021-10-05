@extends('admin.template.template')

@section('back')
    
<h1> About</h1> 

<br><br>
<div style="display: flex; justify-content:center;">
    <h1>Testimonials</h1>
</div>

<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Titre</th>
        <th scope="col">Sous-Titre</th>
        <th scope="col">Avis 1 </th>
        <th scope="col">Photo Avis 1</th>
        <th scope="col">Nom Avis 1 </th>
        <th scope="col">Travaille Avis 1</th>
        <th scope="col">Avis 2 </th>
        <th scope="col">Photo Avis 2</th>
        <th scope="col">Nom Avis 2 </th>
        <th scope="col">Travaille Avis 2</th>
        <th scope="col">Avis 3 </th>
        <th scope="col">Photo Avis 3</th>
        <th scope="col">Nom Avis 3 </th>
        <th scope="col">Travaille Avis 3</th>
        <th scope="col">Avis 4 </th>
        <th scope="col">Photo Avis 4</th>
        <th scope="col">Nom Avis 4 </th>
        <th scope="col">Travaille Avis 4</th>
        <th scope="col">Avis 5 </th>
        <th scope="col">Photo Avis 5</th>
        <th scope="col">Nom Avis 5 </th>
        <th scope="col">Travaille Avis 5</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>

    @foreach ($testimonials as $item)
    <tr>
        <th scope="row">{{$item->id}}</th>
        <td>{{$item->titre}}</td>
        <td>{{$item->sous_titre}}</td>
        <td>{{$item->avis1}}</td>
        <td>{{$item->photoavis1}}</td>
        <td>{{$item->nomavis1}}</td>
        <td>{{$item->workavis1}}</td>
        <td>{{$item->avis2}}</td>
        <th>{{$item->photoavis2}}</th>
        <td>{{$item->nomavis2}}</td>
        <td>{{$item->workavis2}}</td>
        <td>{{$item->avis3}}</td>
        <th>{{$item->photoavis3}}</th>
        <td>{{$item->nomavis3}}</td>
        <td>{{$item->workavis3}}</td>
        <td>{{$item->avis4}}</td>
        <td>{{$item->photoavis4}}</td>
        <td>{{$item->nomavis4}}</td>
        <td>{{$item->workavis4}}</td>
        <td>{{$item->avis5}}</td>
        <td>{{$item->photoavis5}}</td>
        <td>{{$item->nomavis5}}</td>
        <td>{{$item->workavis5}}</td>
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