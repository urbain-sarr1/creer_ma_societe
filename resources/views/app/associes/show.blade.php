@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">
                <a href="{{ route('associes.index') }}" class="mr-4"
                    ><i class="icon ion-md-arrow-back"></i
                ></a>
                @lang('crud.associes.show_title')
            </h4>

            <div class="mt-4">
                <div class="mb-4">
                    <h5>@lang('crud.associes.inputs.Nom')</h5>
                    <span>{{ $associe->Nom ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.associes.inputs.Prenom')</h5>
                    <span>{{ $associe->Prenom ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.associes.inputs.DateNaissance')</h5>
                    <span>{{ $associe->DateNaissance ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.associes.inputs.LieuNaissance')</h5>
                    <span>{{ $associe->LieuNaissance ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.associes.inputs.Nationalite')</h5>
                    <span>{{ $associe->Nationalite ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.associes.inputs.Profession')</h5>
                    <span>{{ $associe->Profession ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.associes.inputs.CNI')</h5>
                    <span>{{ $associe->CNI ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.associes.inputs.DateDelivrance')</h5>
                    <span>{{ $associe->DateDelivrance ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.associes.inputs.DateExpiration')</h5>
                    <span>{{ $associe->DateExpiration ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.associes.inputs.Adresse')</h5>
                    <span>{{ $associe->Adresse ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.associes.inputs.Telephone')</h5>
                    <span>{{ $associe->Telephone ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.associes.inputs.PieceIdentite')</h5>
                    <span>{{ $associe->PieceIdentite ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.associes.inputs.SituationMatrimoniale')</h5>
                    <span>{{ $associe->SituationMatrimoniale ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.associes.inputs.societe_id')</h5>
                    <span>{{ optional($associe->societe)->Type ?? '-' }}</span>
                </div>
            </div>

            <div class="mt-4">
                <a href="{{ route('associes.index') }}" class="btn btn-light">
                    <i class="icon ion-md-return-left"></i>
                    @lang('crud.common.back')
                </a>

                @can('create', App\Models\Associe::class)
                <a href="{{ route('associes.create') }}" class="btn btn-light">
                    <i class="icon ion-md-add"></i> @lang('crud.common.create')
                </a>
                @endcan
            </div>
        </div>
    </div>
</div>
@endsection
