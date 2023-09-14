@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">
                <a href="{{ route('conjoints.index') }}" class="mr-4"
                    ><i class="icon ion-md-arrow-back"></i
                ></a>
                @lang('crud.conjoints.show_title')
            </h4>

            <div class="mt-4">
                <div class="mb-4">
                    <h5>@lang('crud.conjoints.inputs.PrenomNom')</h5>
                    <span>{{ $conjoint->PrenomNom ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.conjoints.inputs.DateNaissance')</h5>
                    <span>{{ $conjoint->DateNaissance ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.conjoints.inputs.LieuNaissance')</h5>
                    <span>{{ $conjoint->LieuNaissance ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.conjoints.inputs.Nationalite')</h5>
                    <span>{{ $conjoint->Nationalite ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.conjoints.inputs.DateMariage')</h5>
                    <span>{{ $conjoint->DateMariage ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.conjoints.inputs.LieuMariage')</h5>
                    <span>{{ $conjoint->LieuMariage ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.conjoints.inputs.DateContratMariage')</h5>
                    <span>{{ $conjoint->DateContratMariage ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.conjoints.inputs.NomResidentNotaire')</h5>
                    <span>{{ $conjoint->NomResidentNotaire ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.conjoints.inputs.RegimeMatrimoniale')</h5>
                    <span>{{ $conjoint->RegimeMatrimoniale ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.conjoints.inputs.associe_id')</h5>
                    <span>{{ optional($conjoint->associe)->Nom ?? '-' }}</span>
                </div>
            </div>

            <div class="mt-4">
                <a href="{{ route('conjoints.index') }}" class="btn btn-light">
                    <i class="icon ion-md-return-left"></i>
                    @lang('crud.common.back')
                </a>

                @can('create', App\Models\Conjoint::class)
                <a href="{{ route('conjoints.create') }}" class="btn btn-light">
                    <i class="icon ion-md-add"></i> @lang('crud.common.create')
                </a>
                @endcan
            </div>
        </div>
    </div>
</div>
@endsection
