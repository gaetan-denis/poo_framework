<x-layout>
    <form method="post" action="">
        <div class="form-group">
            <label for="username">Identifiant</label>
            <input type="text" class="form-control" id="username" aria-describedby="emailHelp" placeholder="votre identifiant">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Mot de Passe</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="votre mot de passe">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <p>Pas encore enregistré? Faites-le <a href="{{route('registration')}}">ici</a></p>
</x-layout>
