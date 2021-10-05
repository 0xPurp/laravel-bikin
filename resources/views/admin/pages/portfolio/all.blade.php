@extends('admin.template.template')

@section('back')
    
<h1> Portfolio</h1> 

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
        <th scope="col">Categorie 1 </th>
        <th scope="col">Categorie 2 </th>
        <th scope="col">Categorie 3 </th>
        <th scope="col">Categorie 4 </th>
        <th scope="col">Photo Item 1</th>
        <th scope="col">Titre Item 1</th>
        <th scope="col">Description Item 1 </th>
        <th scope="col">Photo Item 2</th>
        <th scope="col">Titre Item 2</th>
        <th scope="col">Description Item 2 </th>
        <th scope="col">Photo Item 3</th>
        <th scope="col">Titre Item 3</th>
        <th scope="col">Description Item 3 </th>
        <th scope="col">Photo Item 4</th>
        <th scope="col">Titre Item 4</th>
        <th scope="col">Description Item 4 </th>
        <th scope="col">Photo Item 5</th>
        <th scope="col">Titre Item 5</th>
        <th scope="col">Description Item 5 </th>
        <th scope="col">Photo Item 6</th>
        <th scope="col">Titre Item 6</th>
        <th scope="col">Description Item 6 </th>
        <th scope="col">Photo Item 7</th>
        <th scope="col">Titre Item 7</th>
        <th scope="col">Description Item 7 </th>
        <th scope="col">Photo Item 8</th>
        <th scope="col">Titre Item 8</th>
        <th scope="col">Description Item 8 </th>
        <th scope="col">Photo Item 9</th>
        <th scope="col">Titre Item 9</th>
        <th scope="col">Description Item 9 </th>
        <th scope="col">Actions</th>
      </tr>
    </thead>

    @foreach ($portfolio as $item)
    <tr>
        <th scope="row">{{$item->id}}</th>
        <td>{{$item->titre}}</td>
        <td>{{$item->sous_titre}}</td>
        <td>{{$item->categorie1}}</td>
        <td>{{$item->categorie2}}</td>
        <td>{{$item->categorie3}}</td>
        <td>{{$item->categorie4}}</td>
        <td>{{$item->photoitem1}}</td>
        <th>{{$item->titreitem1}}</th>
        <td>{{$item->descriptionitem1}}</td>
        <td>{{$item->photoitem2}}</td>
        <th>{{$item->titreitem2}}</th>
        <td>{{$item->descriptionitem2}}</td>
        <td>{{$item->photoitem3}}</td>
        <th>{{$item->titreitem3}}</th>
        <td>{{$item->descriptionitem3}}</td>
        <td>{{$item->photoitem4}}</td>
        <th>{{$item->titreitem4}}</th>
        <td>{{$item->descriptionitem4}}</td>
        <td>{{$item->photoitem5}}</td>
        <th>{{$item->titreitem5}}</th>
        <td>{{$item->descriptionitem5}}</td>
        <td>{{$item->photoitem6}}</td>
        <th>{{$item->titreitem6}}</th>
        <td>{{$item->descriptionitem6}}</td>
        <td>{{$item->photoitem7}}</td>
        <th>{{$item->titreitem7}}</th>
        <td>{{$item->descriptionitem7}}</td>
        <td>{{$item->photoitem8}}</td>
        <th>{{$item->titreitem8}}</th>
        <td>{{$item->descriptionitem8}}</td>
        <td>{{$item->photoitem9}}</td>
        <th>{{$item->titreitem9}}</th>
        <td>{{$item->descriptionitem9}}</td>
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