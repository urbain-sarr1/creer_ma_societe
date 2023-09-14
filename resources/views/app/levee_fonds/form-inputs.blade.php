@php $editing = isset($leveeFond) @endphp

<div class="row">
    <x-inputs.group class="col-sm-12">
        <x-inputs.textarea
            name="DescriptionProjet"
            label="Description Projet"
            maxlength="255"
            required
            >{{ old('DescriptionProjet', ($editing ?
            $leveeFond->DescriptionProjet : '')) }}</x-inputs.textarea
        >
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.textarea
            name="EtatAvancement"
            label="Etat Avancement"
            maxlength="255"
            required
            >{{ old('EtatAvancement', ($editing ? $leveeFond->EtatAvancement :
            '')) }}</x-inputs.textarea
        >
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.textarea
            name="BesoinFinancement"
            label="Besoin Financement"
            maxlength="255"
            required
            >{{ old('BesoinFinancement', ($editing ?
            $leveeFond->BesoinFinancement : '')) }}</x-inputs.textarea
        >
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.textarea
            name="ModaliteRemboursement"
            label="Modalite Remboursement"
            maxlength="255"
            required
            >{{ old('ModaliteRemboursement', ($editing ?
            $leveeFond->ModaliteRemboursement : '')) }}</x-inputs.textarea
        >
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.textarea
            name="Garanties"
            label="Garanties"
            maxlength="255"
            required
            >{{ old('Garanties', ($editing ? $leveeFond->Garanties : ''))
            }}</x-inputs.textarea
        >
    </x-inputs.group>
</div>
