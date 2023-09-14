@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">
                <a href="{{ route('gerants.index') }}" class="mr-4"
                    ><i class="icon ion-md-arrow-back"></i
                ></a>
                @lang('crud.gerants.show_title')
            </h4>

            <div class="mt-4">
                <div class="mb-4">
                    <h5>@lang('crud.gerants.inputs.Nom')</h5>
                    <span>{{ $gerant->Nom ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.gerants.inputs.Prenom')</h5>
                    <span>{{ $gerant->Prenom ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.gerants.inputs.Nationalite')</h5>
                    <span>{{ $gerant->Nationalite ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.gerants.inputs.Profession')</h5>
                    <span>{{ $gerant->Profession ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.gerants.inputs.Email')</h5>
                    <span>{{ $gerant->Email ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.gerants.inputs.Telephone')</h5>
                    <span>{{ $gerant->Telephone ?? '-' }}</span>
                </div>
            </div>

            <div class="mt-4">
                <a href="{{ route('gerants.index') }}" class="btn btn-light">
                    <i class="icon ion-md-return-left"></i>
                    @lang('crud.common.back')
                </a>

                @can('create', App\Models\Gerant::class)
                <a href="{{ route('gerants.create') }}" class="btn btn-light">
                    <i class="icon ion-md-add"></i> @lang('crud.common.create')
                </a>
                @endcan
            </div>
        </div>
    </div>
</div>
@endsection
