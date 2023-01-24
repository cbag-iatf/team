<x-main>
    <section class="section main-section">
        <div class="grid grid-rows-4 grid-flow-col gap-4">
            <div class="card">
                <header class="card-header">
                    <p class="card-header-title">
                        Ajouter Roles
                    </p>
                </header>
                <div class="card-content">
                    <form method="POST" action="{{ route('roles.store') }}">
                        @csrf

                        <div class="field">
                            <label class="label">Role</label>
                            {!! Form::text('name', old('name'), ['class' => 'input']) !!}
                            @error('name')
                                <div class="form-text"> {{ $message }} </div>
                            @enderror

                        </div>

                        <div class="field">
                            <div class="control">
                                <button type="submit" class="button green">
                                    Submit
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="card">
      
                
                    <section class="section main-section">
                        <div class="card has-table">
                            <header class="card-header">
                                <p class="card-header-title">
                                    ROLES
                                </p>
                                <a href="#" class="card-header-icon">
                                    <span class="icon"><i class="mdi mdi-reload"></i></span>
                                </a>
                            </header>
                            <div class="card-content">
                                <table>
                                    <thead>
                                        <tr>
                
                                            <th>Nom</th>
                                            <th>Actions</th>
                
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($roles as $role)
                                            <tr>
                                                <td data-label="Nom">{{ $role->name }}</td>
                
                                                <td class="actions-cell">
                                                    <div class="buttons right nowrap">
                                                        <a class="button small green" href="roles/{!! encrypt($role->id) !!}/edit"
                                                            class="btn btn-sm btn-primary">
                                                            <span class="icon"><i class="mdi mdi-eye"></i></span>
                                                        </a>

                                                        <button type="button" onClick='showModel("roles/{!! $role->id !!}")'
                                                            class="button small red">
                                                            <span class="icon"><i class="mdi mdi-trash-can"></i></span>
                                                        </button>
                
                                                        {{-- <form method="POST" action="{{ route('roles.destroy', $role->id) }}">
                                                            @method('DELETE')
                                                            @csrf
                                                            <button class="button small red">
                                                                <span class="icon"><i class="mdi mdi-trash-can"></i></span>
                
                                                            </button>
                                                        </form> --}}
                
                
                                                    </div>
                                                </td>
                
                                            </tr>
                                        @endforeach
                
                                </table>
                
                            </div>
                    </section>
                
                
               
                
            </div>
        </div>
        <hr>
        <hr>
        <hr>
        <hr>
        <hr>
        <hr>
        <hr>
        <div class="grid grid-rows-4 grid-flow-col gap-4">
            <div class="card">
                <header class="card-header">
                    <p class="card-header-title">
                        Ajouter Permission
                    </p>
                </header>
                <div class="card-content">
                    <form method="POST" action="{{ route('permissions.store') }}">
                        @csrf

                        <div class="field">
                            <label class="label">Permission</label>
                            {!! Form::text('name', old('name'), ['class' => 'input']) !!}
                            @error('name')
                                <div class="form-text"> {{ $message }} </div>
                            @enderror

                        </div>

                        <div class="field">
                            <div class="control">
                                <button type="submit" class="button green">
                                    Submit
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="card">
      
                
                    <section class="section main-section">
                        <div class="card has-table">
                            <header class="card-header">
                                <p class="card-header-title">
                                    PERMISSIONS
                                </p>
                                <a href="#" class="card-header-icon">
                                    <span class="icon"><i class="mdi mdi-reload"></i></span>
                                </a>
                            </header>
                            <div class="card-content">
                                <table>
                                    <thead>
                                        <tr>
                
                                            <th>Nom</th>
                                            <th>Actions</th>
                
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($permissions as $permission)
                                            <tr>
                                                <td data-label="Nom">{{ $permission->name }}</td>
                
                                                <td class="actions-cell">
                                                    <div class="buttons right nowrap">
                                                        <a class="button small green" href="permissions/{!! encrypt($permission->id) !!}/edit"
                                                            class="btn btn-sm btn-primary">
                                                            <span class="icon"><i class="mdi mdi-eye"></i></span>
                                                        </a>

                                                        <button type="button" onClick='showModel("permissions/{!! $permission->id !!}")'
                                                            class="button small red">
                                                            <span class="icon"><i class="mdi mdi-trash-can"></i></span>
                                                        </button>
                
                                                        {{-- <form method="POST" action="{{ route('permissions.destroy', $permission->id) }}">
                                                            @method('DELETE')
                                                            @csrf
                                                            <button class="button small red">
                                                                <span class="icon"><i class="mdi mdi-trash-can"></i></span>
                
                                                            </button>
                                                        </form> --}}
                
                
                                                    </div>
                                                </td>
                
                                            </tr>
                                        @endforeach
                
                                </table>
                
                            </div>
                    </section>
                
                
               
                
            </div>
        </div>

    </section>

    <x-delete-modal message="{{ __('message.confirm_delete') }}"
    cancel="{{ __('button.cancel') }}" confirm="{{ __('button.delete') }}" id="deleteConfirmationModel">
    </x-delete-modal>
</x-main>

