@extends('admin.template.template')

@section('back')
    
<h1> About</h1> 

@foreach ($navbar as $item)
    <div>
        Titre
        <p style="color: red">{{$item->nomsite}}</p>
        
    </div>
    <div>
        Sous_titre
        <p style="color: red">{{$item->sous_titre}}</p>
        
    </div>
    
    <div>
        Titre Gauche
        <p style="color: red">{{$item->titreGauche}}</p>
        
    </div>
    <div>
        Description Gauche
        <p style="color: red">{{$item->descriptiongauche}}</p>
        
    </div>
    <div>
        Notes gauche
        <p style="color: red">{{$item->notesgauche}}</p>
        
    </div>

    <div>
        Titre droite
        <p style="color: red">{{$item->titredroite}}</p>
        
    </div>
    <div>
        Description droite
        <p style="color: red">{{$item->descriptiondroite}}</p>
        
    </div>
    <div>
        Notes droite
        <p style="color: red">{{$item->notesdroite}}</p>
        
    </div>
    <div>
        Titre Book
        <p style="color: red">{{$item->titrebook}}</p>
        
    </div>
    <div>
        Description Book
        <p style="color: red">{{$item->descriptionbook}}</p>
        
    </div>
    <div>
        Titre Menu
        <p style="color: red">{{$item->titremenu}}</p>
        
    </div>
    <div>
        Description Menu
        <p style="color: red">{{$item->descriptionmenu}}</p>
        
    </div>
    <div class="d-flex justify-content-around my-3">
        
        <a class="btn btn-warning" href="{{route('about.edit', $item->id)}}">Modifier</a>
        
    </div>
@endforeach



@endsection