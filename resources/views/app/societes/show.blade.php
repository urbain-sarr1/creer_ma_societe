@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">
                <a href="{{ route('societes.index') }}" class="mr-4"
                    ><i class="icon ion-md-arrow-back"></i
                ></a>
                @lang('crud.societes.show_title')
            </h4>

            <div class="mt-4">
                <div class="mb-4">
                    <h5>@lang('crud.societes.inputs.Type')</h5>
                    <span>{{ $societe->Type ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.societes.inputs.Denomination')</h5>
                    <span>{{ $societe->Denomination ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.societes.inputs.Adresse')</h5>
                    <span>{{ $societe->Adresse ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.societes.inputs.MontantCapital')</h5>
                    <span>{{ $societe->MontantCapital ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.societes.inputs.gerant_id')</h5>
                    <span>{{ optional($societe->gerant)->Nom ?? '-' }}</span>
                </div>
            </div>

            <div class="mt-4">
                <a href="{{ route('societes.index') }}" class="btn btn-light">
                    <i class="icon ion-md-return-left"></i>
                    @lang('crud.common.back')
                </a>

                @can('create', App\Models\Societe::class)
                <a href="{{ route('societes.create') }}" class="btn btn-light">
                    <i class="icon ion-md-add"></i> @lang('crud.common.create')
                </a>
                @endcan
            </div>
        </div>
    </div>
</div>
@endsection
