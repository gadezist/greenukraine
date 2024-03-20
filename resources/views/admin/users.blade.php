@extends('admin.layouts.main')

@section('css_admin')
    <link rel="stylesheet" href="{{ asset("plugins/datatables-bs4/css/dataTables.bootstrap4.min.css") }}">
    <link rel="stylesheet" href="{{ asset("plugins/datatables-responsive/css/responsive.bootstrap4.min.css") }}">
    <link rel="stylesheet" href="{{ asset("plugins/datatables-buttons/css/buttons.bootstrap4.min.css") }}">
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">User information</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th class="w-25">Username</th>
                    <th class="w-25">Email</th>
                    <th class="w-20">Role</th>
                    <th class="w-15">Registration date</th>
                    <th class="w-15">Active</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    @if($user->name == 'super_admin')
                        @continue
                    @endif
                    <tr data-id="{{ $user->id }}">
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            <div>
                                <select class="custom-select custom-select-md role-select">
                                    @if($user->getRoleNames()->first() === null)
                                        <option selected="selected" value="" disabled>choose role</option>
                                    @endif
                                    @foreach(\Spatie\Permission\Models\Role::all() as $role)
                                        <option @if($user->getRoleNames()->first() == $role->name) selected @endif value="{{ $role->name }}">
                                            {{ $role->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </td>
                        <td>{{ $user->created_at->format('d.m.Y') }}</td>
                        <td>
                            <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" @if($user->is_active) checked @endif id="customSwitch{{ $loop->iteration }}">
                                <label id="user-status-{{ $user->id }}" class="custom-control-label" for="customSwitch{{ $loop->iteration }}">@if($user->is_active) Enabled @else Disabled @endif</label>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
@endsection

@section('scripts')
    <!-- DataTables  & Plugins -->
    <script src="{{ asset("plugins/datatables/jquery.dataTables.min.js") }}"></script>
    <script src="{{ asset("plugins/datatables-bs4/js/dataTables.bootstrap4.min.js") }}"></script>

    @vite(['resources/js/admin/user.js'])
@endsection

