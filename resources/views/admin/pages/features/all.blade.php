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

    @foreach ($features as $item)
    <tr>
        <th scope="row">{{$item->id}}</th>
        <td>{{$item->titrefeatures}}</td>
        <td>{{$item->soustitrefeatures}}</td>
        <td>{{$item->imgfeature1}}</td>
        <td>{{$item->titrefeature1}}</td>
        <td>{{$item->descriptionfeature1}}</td>
        <td>{{$item->item1feature1}}</td>
        <td>{{$item->item2feature1}}</td>
        <th>{{$item->item3feature1}}</th>
        <td>{{$item->imgfeature2}}</td>
        <td>{{$item->titrefeature2}}</td>
        <td>{{$item->descriptionfeature2}}</td>
        <th>{{$item->textfeature2}}</th>
        <td>{{$item->imgfeature3}}</td>
        <td>{{$item->titrefeature3}}</td>
        <td>{{$item->descriptionfeature3}}</td>
        <td>{{$item->item1feature3}}</td>
        <td>{{$item->item2feature3}}</td>
        <td>{{$item->item3feature3}}</td>
        <td>{{$item->imgfeature4}}</td>
        <td>{{$item->titrefeature4}}</td>
        <td>{{$item->descriptionfeature4}}</td>
        <td>{{$item->textfeature4}}</td>
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