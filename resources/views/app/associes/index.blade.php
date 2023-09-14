@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <div style="display: flex; justify-content: space-between;">
                <h4 class="card-title">@lang('crud.associes.index_title')</h4>
            </div>

            <div class="searchbar mt-4 mb-5">
                <div class="row">
                    <div class="col-md-6">
                        <form>
                            <div class="input-group">
                                <input
                                    id="indexSearch"
                                    type="text"
                                    name="search"
                                    placeholder="{{ __('crud.common.search') }}"
                                    value="{{ $search ?? '' }}"
                                    class="form-control"
                                    autocomplete="off"
                                />
                                <div class="input-group-append">
                                    <button
                                        type="submit"
                                        class="btn btn-primary"
                                    >
                                        <i class="icon ion-md-search"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-6 text-right">
                        @can('create', App\Models\Associe::class)
                        <a
                            href="{{ route('associes.create') }}"
                            class="btn btn-primary"
                        >
                            <i class="icon ion-md-add"></i>
                            @lang('crud.common.create')
                        </a>
                        @endcan
                    </div>
                </div>
            </div>

            <div class="table-responsive">
                <table class="table table-borderless table-hover">
                    <thead>
                        <tr>
                            <th class="text-left">
                                @lang('crud.associes.inputs.Nom')
                            </th>
                            <th class="text-left">
                                @lang('crud.associes.inputs.Prenom')
                            </th>
                            <th class="text-left">
                                @lang('crud.associes.inputs.DateNaissance')
                            </th>
                            <th class="text-left">
                                @lang('crud.associes.inputs.LieuNaissance')
                            </th>
                            <th class="text-left">
                                @lang('crud.associes.inputs.Nationalite')
                            </th>
                            <th class="text-left">
                                @lang('crud.associes.inputs.Profession')
                            </th>
                            <th class="text-left">
                                @lang('crud.associes.inputs.CNI')
                            </th>
                            <th class="text-left">
                                @lang('crud.associes.inputs.DateDelivrance')
                            </th>
                            <th class="text-left">
                                @lang('crud.associes.inputs.DateExpiration')
                            </th>
                            <th class="text-left">
                                @lang('crud.associes.inputs.Adresse')
                            </th>
                            <th class="text-left">
                                @lang('crud.associes.inputs.Telephone')
                            </th>
                            <th class="text-left">
                                @lang('crud.associes.inputs.PieceIdentite')
                            </th>
                            <th class="text-left">
                                @lang('crud.associes.inputs.SituationMatrimoniale')
                            </th>
                            <th class="text-left">
                                @lang('crud.associes.inputs.societe_id')
                            </th>
                            <th class="text-center">
                                @lang('crud.common.actions')
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($associes as $associe)
                        <tr>
                            <td>{{ $associe->Nom ?? '-' }}</td>
                            <td>{{ $associe->Prenom ?? '-' }}</td>
                            <td>{{ $associe->DateNaissance ?? '-' }}</td>
                            <td>{{ $associe->LieuNaissance ?? '-' }}</td>
                            <td>{{ $associe->Nationalite ?? '-' }}</td>
                            <td>{{ $associe->Profession ?? '-' }}</td>
                            <td>{{ $associe->CNI ?? '-' }}</td>
                            <td>{{ $associe->DateDelivrance ?? '-' }}</td>
                            <td>{{ $associe->DateExpiration ?? '-' }}</td>
                            <td>{{ $associe->Adresse ?? '-' }}</td>
                            <td>{{ $associe->Telephone ?? '-' }}</td>
                            <td>{{ $associe->PieceIdentite ?? '-' }}</td>
                            <td>
                                {{ $associe->SituationMatrimoniale ?? '-' }}
                            </td>
                            <td>
                                {{ optional($associe->societe)->Type ?? '-' }}
                            </td>
                            <td class="text-center" style="width: 134px;">
                                <div
                                    role="group"
                                    aria-label="Row Actions"
                                    class="btn-group"
                                >
                                    @can('update', $associe)
                                    <a
                                        href="{{ route('associes.edit', $associe) }}"
                                    >
                                        <button
                                            type="button"
                                            class="btn btn-light"
                                        >
                                            <i class="icon ion-md-create"></i>
                                        </button>
                                    </a>
                                    @endcan @can('view', $associe)
                                    <a
                                        href="{{ route('associes.show', $associe) }}"
                                    >
                                        <button
                                            type="button"
                                            class="btn btn-light"
                                        >
                                            <i class="icon ion-md-eye"></i>
                                        </button>
                                    </a>
                                    @endcan @can('delete', $associe)
                                    <form
                                        action="{{ route('associes.destroy', $associe) }}"
                                        method="POST"
                                        onsubmit="return confirm('{{ __('crud.common.are_you_sure') }}')"
                                    >
                                        @csrf @method('DELETE')
                                        <button
                                            type="submit"
                                            class="btn btn-light text-danger"
                                        >
                                            <i class="icon ion-md-trash"></i>
                                        </button>
                                    </form>
                                    @endcan
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="15">
                                @lang('crud.common.no_items_found')
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="15">{!! $associes->render() !!}</td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
