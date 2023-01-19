<x-layouts.admin-layout>
    <div class="row">
        <div class="col-12 mb-4 order-0">
            <div class="card">
                <div class="d-flex align-items-end row">
                    <div class="col-sm-12">
                        <div class="card-body table-responsive">
                           <div class="col-12 d-flex justify-content-between">
                               <h5 class="card-title text-primary">{{ __('user.create_user') }}</h5>
                           </div>
                           <div class="col-12 p-3 card">
                            <table class="table table-bordered">
                                <tbody>
                                <tr>
                                    <th scope="row"> {{ __('role.name') }}</th>
                                    <td>{{$user->name}}</td>
                                </tr>
                                <tr>
                                    <th scope="row"> {{ __('user.email') }}</th>
                                    <td>{{$user->email}}</td>
                                </tr>
                                <tr >
                                    <th > {{ __('permission.permissions') }}</th>
                                    <td >
                                        @if ($user->permissions)
                        
                                            @foreach ($user->permissions as $user_permission)
                                                <form class="col-3" method="POST"
                                                      action="{{ route('users.permissions.revoke', [$user->id, $user_permission->id]) }}"
                                                      onsubmit="return confirm('Are you sure?');">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="badge rounded-pill bg-danger">{{ $user_permission->name }}</button>
                                                </form>
                                            @endforeach
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <th>Roles</th>
                                    <td >
                                        @if ($user->roles)
                                            @foreach ($user->roles as $user_role)
                                                <form class="col-3" method="POST"
                                                      action="{{ route('users.roles.remove', [$user->id, $user_role->id]) }}"
                                                      onsubmit="return confirm('Are you sure?');">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"  class="badge rounded-pill bg-danger">{{ $user_role->name }}</button>
                                                </form>
                                            @endforeach
                                        @endif
                                    </td>
                                </tr>
                        
                                </tbody>
                            </table>
                        </div>
                        
                        <div class="col-12 p-3 card">
                            <form method="POST" action="{{ route('users.roles', $user->id) }}">
                                @csrf
                                <div class="mb-3">
                                    <select name="role" id="role" class="form-control">
                                        @foreach ($roles as $role)
                                            <option value="{{ $role->name }}">{{ $role->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('name')
                                    <div  class="form-text text-danger"> {{ $message }} </div>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-primary"> {{ __('role.assign') }}</button>
                            </form>
                        </div>
                        <div class="col-12 p-3 card">
                            <form method="POST" action="{{ route('users.permissions', $user) }}">
                                @csrf
                                <div class="mb-3">
                                    <select name="permission" id="permission" class="form-control">
                                        @foreach ($permissions as $permission)
                                            <option value="{{ $permission->name }}">{{ $permission->name }}</option>
                                        @endforeach
                                    </select>
                        
                                    @error('name')
                                    <div  class="form-text text-danger"> {{ $message }} </div>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-primary"> {{ __('role.assign') }}</button>
                            </form>
                        </div>
                        
                        
                        <div class="col-12 mt-5 card p-4">
                            <div class="row">
                                @if ($role->permissions)
                                    @foreach ($role->permissions as $role_permission)
                                        <form method="POST" class="col-3"
                                              action="{{ route('roles.permissions.revoke', [$role->id, $role_permission->id]) }}"
                                              onsubmit="return confirm('Are you sure?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="badge rounded-pill bg-danger">{{ $role_permission->name }}</button>
                                        </form>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                        <div class="col-12 mt-5 card p-4">
                            <form method="POST" action="{{ route('roles.permissions', $role->id) }}">
                                @csrf
                                <div class="mb-3">
                                    <label for="permission" class="form-label"> {{ __('permission.perùission') }}</label>
                                    <select class="form-select form-select-sm mb-3" name="permission" id="permission" >
                                        @foreach ($permissions as $permission)
                                            <option value="{{ $permission->name }}">{{ $permission->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('name')
                                    <div  class="form-text">{{ $message }}</div>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-success"> {{ __('permission.assign') }}</button>
                            </form>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.admin-layout>
