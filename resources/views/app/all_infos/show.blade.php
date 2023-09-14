@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">
                <a href="{{ route('all-infos.index') }}" class="mr-4"
                    ><i class="icon ion-md-arrow-back"></i
                ></a>
                @lang('crud.all_infos.show_title')
            </h4>

            <div class="mt-4">
                <div class="mb-4">
                    <h5>@lang('crud.all_infos.inputs.TitreSite')</h5>
                    <span>{{ $infos->TitreSite ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.all_infos.inputs.adresseSite')</h5>
                    <span>{{ $infos->adresseSite ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.all_infos.inputs.TelephoneSite')</h5>
                    <span>{{ $infos->TelephoneSite ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.all_infos.inputs.EmailSite')</h5>
                    <span>{{ $infos->EmailSite ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.all_infos.inputs.Localisation')</h5>
                    <span>{{ $infos->Localisation ?? '-' }}</span>
                </div>
            </div>

            <div class="mt-4">
                <a href="{{ route('all-infos.index') }}" class="btn btn-light">
                    <i class="icon ion-md-return-left"></i>
                    @lang('crud.common.back')
                </a>

                @can('create', App\Models\Infos::class)
                <a href="{{ route('all-infos.create') }}" class="btn btn-light">
                    <i class="icon ion-md-add"></i> @lang('crud.common.create')
                </a>
                @endcan
            </div>
        </div>
    </div>
</div>
@endsection
