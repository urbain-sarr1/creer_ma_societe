@php $editing = isset($infos) @endphp

<div class="row">
    <x-inputs.group class="col-sm-12">
        <x-inputs.text
            name="TitreSite"
            label="Titre Site"
            :value="old('TitreSite', ($editing ? $infos->TitreSite : ''))"
            maxlength="255"
            placeholder="Titre Site"
            required
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.text
            name="adresseSite"
            label="Adresse Site"
            :value="old('adresseSite', ($editing ? $infos->adresseSite : ''))"
            maxlength="255"
            placeholder="Adresse Site"
            required
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.text
            name="TelephoneSite"
            label="Telephone Site"
            :value="old('TelephoneSite', ($editing ? $infos->TelephoneSite : ''))"
            maxlength="255"
            placeholder="Telephone Site"
            required
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.text
            name="EmailSite"
            label="Email Site"
            :value="old('EmailSite', ($editing ? $infos->EmailSite : ''))"
            maxlength="255"
            placeholder="Email Site"
            required
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.textarea
            name="Localisation"
            label="Localisation"
            maxlength="255"
            required
            >{{ old('Localisation', ($editing ? $infos->Localisation : ''))
            }}</x-inputs.textarea
        >
    </x-inputs.group>
</div>
