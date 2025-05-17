@extends('admin.master')

@section('title', 'Roles')
@section('content')

    <h1 class="mt-4">Roles</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item">
            <a href="{{ route('admin.dashboard') }}">Dashboard</a>
        </li>
        <li class="breadcrumb-item">
            <a href="{{ route('admin.roles.index') }}">Role</a>
        </li>
        <li class="breadcrumb-item active">Create Role</li>
    </ol>

    <div class="card mb-4">
        @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        <div class="card-body">
            <form action="{{ route('admin.roles.store') }}" method="POST">
                @csrf

                <div class="mb-3 row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                        <input type="text" name="name" class="form-control mb-2" required>
                    </div>
                </div>
    
                @foreach (config('permissions.groups') as $groupKey => $group)
                    <div class="d-flex flex-column mb-3">
                        <div class="d-flex align-items-center mb-1">
                            <h6 class="fw-bold mb-0 me-3">{{ $group['name'] }}</h6>
                            <div class="form-check form-check-sm form-check-custom">
                                <input class="form-check-input group-checkbox" type="checkbox" data-group="{{ $groupKey }}">
                                <label class="form-check-label">Select All</label>
                            </div>
                        </div>
    
                        <div class="d-flex flex-wrap gap-5 ps-10">
                            @foreach ($group['permissions'] as $key => $label)
                                @php
                                    $permission = $groupKey . '.' . $label;
                                @endphp
                                <div class="form-check form-check-custom form-check-solid">
                                    <input class="form-check-input permission-checkbox" type="checkbox" name="permissions[]"
                                        value="{{ $permission }}" id="perm_{{ $permission }}"
                                        data-group="{{ $groupKey }}">
                                    <label class="form-check-label" for="perm_{{ $permission }}">
                                        {{ $label }}
                                    </label>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach
                <button type="submit" class="btn btn-primary">{{ trans('Submit') }}</button>
            </form>
        </div>
        
    </div>
@endsection

@section('extra_script')

@endsection
