@php $editing = isset($profile) @endphp

<div class="row">
    <x-inputs.group class="col-sm-12">
        <div
            x-data="imageViewer('{{ $editing && $profile->Photo ? \Storage::url($profile->Photo) : '' }}')"
        >
            <x-inputs.partials.label
                name="Photo"
                label="Photo"
            ></x-inputs.partials.label
            ><br />

            <!-- Show the image -->
            <template x-if="imageUrl">
                <img
                    :src="imageUrl"
                    class="object-cover rounded border border-gray-200"
                    style="width: 100px; height: 100px;"
                />
            </template>

            <!-- Show the gray box when image is not available -->
            <template x-if="!imageUrl">
                <div
                    class="border rounded border-gray-200 bg-gray-100"
                    style="width: 100px; height: 100px;"
                ></div>
            </template>

            <div class="mt-2">
                <input
                    type="file"
                    name="Photo"
                    id="Photo"
                    @change="fileChosen"
                />
            </div>

            @error('Photo') @include('components.inputs.partials.error')
            @enderror
        </div>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.text
            name="Adresse"
            label="Adresse"
            :value="old('Adresse', ($editing ? $profile->Adresse : ''))"
            maxlength="255"
            placeholder="Adresse"
            required
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.text
            name="Telephone"
            label="Telephone"
            :value="old('Telephone', ($editing ? $profile->Telephone : ''))"
            maxlength="255"
            placeholder="Telephone"
            required
        ></x-inputs.text>
    </x-inputs.group>
</div>
