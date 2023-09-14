@php $editing = isset($gerant) @endphp

<div class="row">
    <x-inputs.group class="col-sm-12">
        <x-inputs.text
            name="Nom"
            label="Nom"
            :value="old('Nom', ($editing ? $gerant->Nom : ''))"
            maxlength="255"
            placeholder="Nom"
            required
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.text
            name="Prenom"
            label="Prenom"
            :value="old('Prenom', ($editing ? $gerant->Prenom : ''))"
            maxlength="255"
            placeholder="Prenom"
            required
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.text
            name="Nationalite"
            label="Nationalite"
            :value="old('Nationalite', ($editing ? $gerant->Nationalite : ''))"
            maxlength="255"
            placeholder="Nationalite"
            required
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.text
            name="Profession"
            label="Profession"
            :value="old('Profession', ($editing ? $gerant->Profession : ''))"
            maxlength="255"
            placeholder="Profession"
            required
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.email
            name="Email"
            label="Email"
            :value="old('Email', ($editing ? $gerant->Email : ''))"
            maxlength="255"
            placeholder="Email"
            required
        ></x-inputs.email>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.text
            name="Telephone"
            label="Telephone"
            :value="old('Telephone', ($editing ? $gerant->Telephone : ''))"
            maxlength="255"
            placeholder="Telephone"
            required
        ></x-inputs.text>
    </x-inputs.group>
</div>
