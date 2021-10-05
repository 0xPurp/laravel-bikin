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
        <th scope="col">Adresse</th>
        <th scope="col">Ville</th>
        <th scope="col">Pays </th>
        <th scope="col">Phone en gras </th>
        <th scope="col">Phone </th>
        <th scope="col">Mail en gras</th>
        <th scope="col">Mail</th>
        <th scope="col">Links en gras </th>
        <th scope="col">Lien 1</th>
        <th scope="col">Lien 2</th>
        <th scope="col">Lien 3 </th>
        <th scope="col">Lien 4</th>
        <th scope="col">Lien 5</th>
        <th scope="col">Services en gras </th>
        <th scope="col">Service 1</th>
        <th scope="col">Service 2</th>
        <th scope="col">Service 3 </th>
        <th scope="col">Service 4</th>
        <th scope="col">Service 5</th>
        <th scope="col">Newsletter en gras </th>
        <th scope="col">Newsletter</th>
        <th scope="col">Bouton News</th>
        <th scope="col">Copyright 1 </th>
        <th scope="col">Copyright 2</th>
        <th scope="col">Copyright 3</th>
        <th scope="col">Designed by 1 </th>
        <th scope="col">Designed by 2</th>
        <th scope="col">Designed by link</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>

    @foreach ($footerz as $item)
    <tr>
        <th scope="row">{{$item->id}}</th>
        <td>{{$item->titre}}</td>
        <td>{{$item->adress}}</td>
        <td>{{$item->ville}}</td>
        <td>{{$item->pays}}</td>
        <td>{{$item->phonebold}}</td>
        <td>{{$item->phone}}</td>
        <td>{{$item->mailbold}}</td>
        <th>{{$item->mail}}</th>
        <td>{{$item->linksbold}}</td>
        <td>{{$item->link1}}</td>
        <th>{{$item->link2}}</th>
        <td>{{$item->link3}}</td>
        <td>{{$item->link4}}</td>
        <th>{{$item->link5}}</th>
        <td>{{$item->servicebold}}</td>
        <td>{{$item->service1}}</td>
        <th>{{$item->service2}}</th>
        <td>{{$item->service3}}</td>
        <td>{{$item->service4}}</td>
        <th>{{$item->service5}}</th>
        <td>{{$item->newsletterbold}}</td>
        <td>{{$item->newsletter}}</td>
        <th>{{$item->btnnews}}</th>
        <td>{{$item->copyright1}}</td>
        <td>{{$item->copyright2}}</td>
        <th>{{$item->copyright3}}</th>
        <td>{{$item->designed1}}</td>
        <td>{{$item->designed2}}</td>
        <th>{{$item->designedlink}}</th>
        
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