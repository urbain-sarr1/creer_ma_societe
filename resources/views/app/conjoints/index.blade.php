@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <div style="display: flex; justify-content: space-between;">
                <h4 class="card-title">@lang('crud.conjoints.index_title')</h4>
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
                        @can('create', App\Models\Conjoint::class)
                        <a
                            href="{{ route('conjoints.create') }}"
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
                                @lang('crud.conjoints.inputs.PrenomNom')
                            </th>
                            <th class="text-left">
                                @lang('crud.conjoints.inputs.DateNaissance')
                            </th>
                            <th class="text-left">
                                @lang('crud.conjoints.inputs.LieuNaissance')
                            </th>
                            <th class="text-left">
                                @lang('crud.conjoints.inputs.Nationalite')
                            </th>
                            <th class="text-left">
                                @lang('crud.conjoints.inputs.DateMariage')
                            </th>
                            <th class="text-left">
                                @lang('crud.conjoints.inputs.LieuMariage')
                            </th>
                            <th class="text-left">
                                @lang('crud.conjoints.inputs.DateContratMariage')
                            </th>
                            <th class="text-left">
                                @lang('crud.conjoints.inputs.NomResidentNotaire')
                            </th>
                            <th class="text-left">
                                @lang('crud.conjoints.inputs.RegimeMatrimoniale')
                            </th>
                            <th class="text-left">
                                @lang('crud.conjoints.inputs.associe_id')
                            </th>
                            <th class="text-center">
                                @lang('crud.common.actions')
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($conjoints as $conjoint)
                        <tr>
                            <td>{{ $conjoint->PrenomNom ?? '-' }}</td>
                            <td>{{ $conjoint->DateNaissance ?? '-' }}</td>
                            <td>{{ $conjoint->LieuNaissance ?? '-' }}</td>
                            <td>{{ $conjoint->Nationalite ?? '-' }}</td>
                            <td>{{ $conjoint->DateMariage ?? '-' }}</td>
                            <td>{{ $conjoint->LieuMariage ?? '-' }}</td>
                            <td>{{ $conjoint->DateContratMariage ?? '-' }}</td>
                            <td>{{ $conjoint->NomResidentNotaire ?? '-' }}</td>
                            <td>{{ $conjoint->RegimeMatrimoniale ?? '-' }}</td>
                            <td>
                                {{ optional($conjoint->associe)->Nom ?? '-' }}
                            </td>
                            <td class="text-center" style="width: 134px;">
                                <div
                                    role="group"
                                    aria-label="Row Actions"
                                    class="btn-group"
                                >
                                    @can('update', $conjoint)
                                    <a
                                        href="{{ route('conjoints.edit', $conjoint) }}"
                                    >
                                        <button
                                            type="button"
                                            class="btn btn-light"
                                        >
                                            <i class="icon ion-md-create"></i>
                                        </button>
                                    </a>
                                    @endcan @can('view', $conjoint)
                                    <a
                                        href="{{ route('conjoints.show', $conjoint) }}"
                                    >
                                        <button
                                            type="button"
                                            class="btn btn-light"
                                        >
                                            <i class="icon ion-md-eye"></i>
                                        </button>
                                    </a>
                                    @endcan @can('delete', $conjoint)
                                    <form
                                        action="{{ route('conjoints.destroy', $conjoint) }}"
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
                            <td colspan="11">
                                @lang('crud.common.no_items_found')
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="11">{!! $conjoints->render() !!}</td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
