@extends('frontend.layout.master')

@section('content')
   
<div>
    <h1>Login</h1>
    <form id="form" action="connexion.php" method="post">
        <fieldset>
            <label for="nom">Identifiant :<span class="required">*</span></label>
            <input type="text" name="Identifiant" id="identifiant"  ><br><br>
            <label for="password">Mot de passe :<span class="required">*</span></label>
            <input type="password" id="password" name="password" placeholder="Saisissez votre mot de passe"><br><br><br>
            <button type="submit" name="submit">Connexion</button>
            <a href="/creer_compte">Créer un Compte</a>
            
        </fieldset>
    </form>

 </div>

@endsection