@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">
                <a href="{{ route('profiles.index') }}" class="mr-4"
                    ><i class="icon ion-md-arrow-back"></i
                ></a>
                @lang('crud.profiles.show_title')
            </h4>

            <div class="mt-4">
                <div class="mb-4">
                    <h5>@lang('crud.profiles.inputs.Photo')</h5>
                    <x-partials.thumbnail
                        src="{{ $profile->Photo ? \Storage::url($profile->Photo) : '' }}"
                        size="150"
                    />
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.profiles.inputs.Adresse')</h5>
                    <span>{{ $profile->Adresse ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.profiles.inputs.Telephone')</h5>
                    <span>{{ $profile->Telephone ?? '-' }}</span>
                </div>
            </div>

            <div class="mt-4">
                <a href="{{ route('profiles.index') }}" class="btn btn-light">
                    <i class="icon ion-md-return-left"></i>
                    @lang('crud.common.back')
                </a>

                @can('create', App\Models\Profile::class)
                <a href="{{ route('profiles.create') }}" class="btn btn-light">
                    <i class="icon ion-md-add"></i> @lang('crud.common.create')
                </a>
                @endcan
            </div>
        </div>
    </div>
</div>
@endsection
