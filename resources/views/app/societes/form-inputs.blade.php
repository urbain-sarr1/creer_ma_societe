@php $editing = isset($societe) @endphp

<div class="row">
    <x-inputs.group class="col-sm-12">
        <x-inputs.text
            name="Type"
            label="Type"
            :value="old('Type', ($editing ? $societe->Type : ''))"
            maxlength="255"
            placeholder="Type"
            required
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.text
            name="Denomination"
            label="Denomination"
            :value="old('Denomination', ($editing ? $societe->Denomination : ''))"
            maxlength="255"
            placeholder="Denomination"
            required
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.text
            name="Adresse"
            label="Adresse"
            :value="old('Adresse', ($editing ? $societe->Adresse : ''))"
            maxlength="255"
            placeholder="Adresse"
            required
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.text
            name="MontantCapital"
            label="Montant Capital"
            :value="old('MontantCapital', ($editing ? $societe->MontantCapital : ''))"
            maxlength="255"
            placeholder="Montant Capital"
            required
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.select name="gerant_id" label="Gerant" required>
            @php $selected = old('gerant_id', ($editing ? $societe->gerant_id : '')) @endphp
            <option disabled {{ empty($selected) ? 'selected' : '' }}>Please select the Gerant</option>
            @foreach($gerants as $value => $label)
            <option value="{{ $value }}" {{ $selected == $value ? 'selected' : '' }} >{{ $label }}</option>
            @endforeach
        </x-inputs.select>
    </x-inputs.group>
</div>
