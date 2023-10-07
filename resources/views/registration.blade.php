<x-layout>
    <div>
        <h1>S'inscrire</h1>
        <form method="post">
            <div class="form-group">
                <label for="username">Identifiant</label>
                <input type="email" class="form-control" id="username" aria-describedby="emailHelp" placeholder="votre identifiant">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="Email1" aria-describedby="emailHelp" placeholder="votre email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="password">Mot de passe</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="votre mot de passe">
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</x-layout>
