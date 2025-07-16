@extends('admin.master')

@section('title', 'Roles')
@section('content')

    <h1 class="mt-4">Roles</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
        <li class="breadcrumb-item active">Roles</li>
    </ol>

    <div class="card mb-4">
        <div class="card-header py-3">
            <i class="fas fa-table me-1"></i>
            Role List
            <a href="{{ route('admin.roles.create') }}" class="btn btn-primary float-end">Create Role</a>
        </div>
        <div class="card-body">
            <table id="myTable" class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th class="text-end">Actioin</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($roles as $role)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $role->name }}</td>
                            <td class="text-end">
                                <div class="dropdown">
                                    <button class="btn btn-sm btn-light dropdown-toggle" type="button"
                                        id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                        Actions
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                        <li>
                                            <a class="dropdown-item" href="{{ route('admin.roles.edit', $role->id) }}">
                                                Edit
                                            </a>
                                        </li>
                                        <li>
                                            <form action="{{ route('admin.roles.destroy', $role->id) }}"
                                                class="" method="POST" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="dropdown-item">Delete</button>
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                                {{-- <a href="{{ route('admin.roles.edit', $role->id) }}" class="btn btn-primary">Edit</a> --}}

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

@section('extra_script')
    <script>
        new DataTable('#myTable');
    </script>
@endsection
