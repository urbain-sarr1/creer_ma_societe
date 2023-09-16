@extends('frontend.layout.master')


@section('menu')

<a href="index.html"  id="deconnexion">Se déconnecter</a> <br>
</span>
         <span  id="menu">
         <a href="info_générales.html">Création de Societé</a> <br>
        <a href="document_societé.html">Document de Société</a> <br>
        <a href="contrats.html">Modéles de Contrat</a> <br>
        <a href="assemblé_general.html">Assemblée Générales</a> <br>
        <a href="levé_de_fond.html">Levé de Fond</a> 
</span>

@endsection

@section('content')
<div >
    <h1>Levée de fonds</h1>
    <p id="Annonce">( Besoin d'Assistance ? Appeler le +221 781077373 )</p>
      <form id="form" action="levé_de_fond.php" method="post">
        <label for="description">Description du Projet :<span class="required">*</span></label>
            <textarea name="description" id="description" rows="10" cols="80" class="textarea" ></textarea> <br><br><br>
        <label for="etat_avancemnet">Etat d'Avancement du Projet :<span class="required">*</span></label>
            <textarea name="etat_avancemnet" id="etat_avancemnet" rows="10" cols="80" class="textarea" ></textarea><br><br><br>
        <label for="besoin_financement">Besoin en Financement du Projet :<span class="required">*</span></label>
            <textarea name="besoin_financement" id="besoin_financement" rows="10" cols="80" class="textarea" ></textarea><br><br><br>
        <label for="modalité_remboursement">Modalité de Remboursement du Financement :<span class="required">*</span></label>
            <textarea name="modalité_remboursement" id="modalité_remboursement" rows="10" cols="80" class="textarea"></textarea><br><br><br>
        <label for="garanti_dispo">Garanties Disponibles :<span class="required">*</span></label>
            <textarea name="garanti_dispo" id="garanti_dispo" rows="10" cols="80" class="textarea" ></textarea><br><br><br>

            <button type="submit" name="submit" id="submit" >Soumettre</button>

        </form>    
</div>
 
@endsection

