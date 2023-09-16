@extends('frontend.layout.master')


@section('content')
  
<div>
    <h1>Créer votre Compte</h1>
    <form action="creer_compte.php" method="post">
        <fieldset>
            <label for="nom">Identifiant :<span class="required">*</span></label>
            <input type="text" name="Identifiant" id="identifiant"  ><br><br>
            <label for="password">Mot de passe :<span class="required">*</span></label>
            <input type="password" id="password" name="passwod" placeholder="Saisissez votre mot de passe"><br><br>
            <label for="password">Confirmez le Mot de Passe :<span class="required">*</span></label>
            <input type="password" id="cpassword" name="cpassword" placeholder="confirmer votre mot de passe"><br><br>
            <label for="email">Email :<span class="required">*</span></label>
            <input type="email" id= "email" placeholder="raph7788@gmail.com"><br><br>
            <label for="telephone">Numéro de téléphone :<span class="required">*</span></label>
            <input type="number" id="telephone" name="telephone" placeholder="Entrez votre numéro de téléphone"><br><br>
            <button type="submit" name="submit">Créer</button>
        </fieldset>
    </form>

 </div>

@endsection