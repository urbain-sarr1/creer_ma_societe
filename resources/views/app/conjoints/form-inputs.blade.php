@php $editing = isset($conjoint) @endphp

<div class="row">
    <x-inputs.group class="col-sm-12">
        <x-inputs.textarea
            name="PrenomNom"
            label="Prenom Nom"
            maxlength="255"
            required
            >{{ old('PrenomNom', ($editing ? $conjoint->PrenomNom : ''))
            }}</x-inputs.textarea
        >
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.date
            name="DateNaissance"
            label="Date Naissance"
            value="{{ old('DateNaissance', ($editing ? optional($conjoint->DateNaissance)->format('Y-m-d') : '')) }}"
            max="255"
            required
        ></x-inputs.date>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.text
            name="LieuNaissance"
            label="Lieu Naissance"
            :value="old('LieuNaissance', ($editing ? $conjoint->LieuNaissance : ''))"
            maxlength="255"
            placeholder="Lieu Naissance"
            required
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.text
            name="Nationalite"
            label="Nationalite"
            :value="old('Nationalite', ($editing ? $conjoint->Nationalite : ''))"
            maxlength="255"
            placeholder="Nationalite"
            required
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.date
            name="DateMariage"
            label="Date Mariage"
            value="{{ old('DateMariage', ($editing ? optional($conjoint->DateMariage)->format('Y-m-d') : '')) }}"
            max="255"
            required
        ></x-inputs.date>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.text
            name="LieuMariage"
            label="Lieu Mariage"
            :value="old('LieuMariage', ($editing ? $conjoint->LieuMariage : ''))"
            maxlength="255"
            placeholder="Lieu Mariage"
            required
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.date
            name="DateContratMariage"
            label="Date Contrat Mariage"
            value="{{ old('DateContratMariage', ($editing ? optional($conjoint->DateContratMariage)->format('Y-m-d') : '')) }}"
            max="255"
            required
        ></x-inputs.date>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.textarea
            name="NomResidentNotaire"
            label="Nom Resident Notaire"
            maxlength="255"
            required
            >{{ old('NomResidentNotaire', ($editing ?
            $conjoint->NomResidentNotaire : '')) }}</x-inputs.textarea
        >
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.text
            name="RegimeMatrimoniale"
            label="Regime Matrimoniale"
            :value="old('RegimeMatrimoniale', ($editing ? $conjoint->RegimeMatrimoniale : ''))"
            maxlength="255"
            placeholder="Regime Matrimoniale"
            required
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.select name="associe_id" label="Associe" required>
            @php $selected = old('associe_id', ($editing ? $conjoint->associe_id : '')) @endphp
            <option disabled {{ empty($selected) ? 'selected' : '' }}>Please select the Associe</option>
            @foreach($associes as $value => $label)
            <option value="{{ $value }}" {{ $selected == $value ? 'selected' : '' }} >{{ $label }}</option>
            @endforeach
        </x-inputs.select>
    </x-inputs.group>
</div>
