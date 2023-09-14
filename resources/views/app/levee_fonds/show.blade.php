@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">
                <a href="{{ route('levee-fonds.index') }}" class="mr-4"
                    ><i class="icon ion-md-arrow-back"></i
                ></a>
                @lang('crud.levee_fonds.show_title')
            </h4>

            <div class="mt-4">
                <div class="mb-4">
                    <h5>@lang('crud.levee_fonds.inputs.DescriptionProjet')</h5>
                    <span>{{ $leveeFond->DescriptionProjet ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.levee_fonds.inputs.EtatAvancement')</h5>
                    <span>{{ $leveeFond->EtatAvancement ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.levee_fonds.inputs.BesoinFinancement')</h5>
                    <span>{{ $leveeFond->BesoinFinancement ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>
                        @lang('crud.levee_fonds.inputs.ModaliteRemboursement')
                    </h5>
                    <span>{{ $leveeFond->ModaliteRemboursement ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.levee_fonds.inputs.Garanties')</h5>
                    <span>{{ $leveeFond->Garanties ?? '-' }}</span>
                </div>
            </div>

            <div class="mt-4">
                <a
                    href="{{ route('levee-fonds.index') }}"
                    class="btn btn-light"
                >
                    <i class="icon ion-md-return-left"></i>
                    @lang('crud.common.back')
                </a>

                @can('create', App\Models\LeveeFond::class)
                <a
                    href="{{ route('levee-fonds.create') }}"
                    class="btn btn-light"
                >
                    <i class="icon ion-md-add"></i> @lang('crud.common.create')
                </a>
                @endcan
            </div>
        </div>
    </div>
</div>
@endsection
