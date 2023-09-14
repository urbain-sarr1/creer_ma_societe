@php $editing = isset($associe) @endphp

<div class="row">
    <x-inputs.group class="col-sm-12">
        <x-inputs.text
            name="Nom"
            label="Nom"
            :value="old('Nom', ($editing ? $associe->Nom : ''))"
            maxlength="255"
            placeholder="Nom"
            required
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.text
            name="Prenom"
            label="Prenom"
            :value="old('Prenom', ($editing ? $associe->Prenom : ''))"
            maxlength="255"
            placeholder="Prenom"
            required
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.date
            name="DateNaissance"
            label="Date Naissance"
            value="{{ old('DateNaissance', ($editing ? optional($associe->DateNaissance)->format('Y-m-d') : '')) }}"
            max="255"
            required
        ></x-inputs.date>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.text
            name="LieuNaissance"
            label="Lieu Naissance"
            :value="old('LieuNaissance', ($editing ? $associe->LieuNaissance : ''))"
            maxlength="255"
            placeholder="Lieu Naissance"
            required
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.text
            name="Nationalite"
            label="Nationalite"
            :value="old('Nationalite', ($editing ? $associe->Nationalite : ''))"
            maxlength="255"
            placeholder="Nationalite"
            required
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.text
            name="Profession"
            label="Profession"
            :value="old('Profession', ($editing ? $associe->Profession : ''))"
            maxlength="255"
            placeholder="Profession"
            required
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.text
            name="CNI"
            label="Cni"
            :value="old('CNI', ($editing ? $associe->CNI : ''))"
            maxlength="255"
            placeholder="Cni"
            required
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.date
            name="DateDelivrance"
            label="Date Delivrance"
            value="{{ old('DateDelivrance', ($editing ? optional($associe->DateDelivrance)->format('Y-m-d') : '')) }}"
            max="255"
            required
        ></x-inputs.date>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.date
            name="DateExpiration"
            label="Date Expiration"
            value="{{ old('DateExpiration', ($editing ? optional($associe->DateExpiration)->format('Y-m-d') : '')) }}"
            max="255"
            required
        ></x-inputs.date>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.text
            name="Adresse"
            label="Adresse"
            :value="old('Adresse', ($editing ? $associe->Adresse : ''))"
            maxlength="255"
            placeholder="Adresse"
            required
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.text
            name="Telephone"
            label="Telephone"
            :value="old('Telephone', ($editing ? $associe->Telephone : ''))"
            maxlength="255"
            placeholder="Telephone"
            required
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.text
            name="PieceIdentite"
            label="Piece Identite"
            :value="old('PieceIdentite', ($editing ? $associe->PieceIdentite : ''))"
            maxlength="255"
            placeholder="Piece Identite"
            required
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.text
            name="SituationMatrimoniale"
            label="Situation Matrimoniale"
            :value="old('SituationMatrimoniale', ($editing ? $associe->SituationMatrimoniale : ''))"
            maxlength="255"
            placeholder="Situation Matrimoniale"
            required
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.select name="societe_id" label="Societe" required>
            @php $selected = old('societe_id', ($editing ? $associe->societe_id : '')) @endphp
            <option disabled {{ empty($selected) ? 'selected' : '' }}>Please select the Societe</option>
            @foreach($societes as $value => $label)
            <option value="{{ $value }}" {{ $selected == $value ? 'selected' : '' }} >{{ $label }}</option>
            @endforeach
        </x-inputs.select>
    </x-inputs.group>
</div>
