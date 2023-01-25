<x-main>

    <section class="is-hero-bar">
        <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
            <h1 class="title">
                Profile
            </h1>
            {{-- <button class="button light">Button</button> --}}
        </div>
    </section>

    <section class="section main-section">

        <div class="card">
            <header class="card-header">
                <p class="card-header-title">
                    <span class="icon"><i class="mdi mdi-account-circle"></i></span>
                    Modifier Profil
                </p>
            </header>
            <div class="card-content">

                <form method="POST" action="{{ route('users.update', $user->id) }}">
                    @csrf
                    @method('PUT')

                    <div class="field">
                        <label class="label">Nom de l'utilisateur</label>
                        {!! Form::text('name', $user->name, ['class' => 'input']) !!}
                        @error('name')
                            <div class="form-text"> {{ $message }} </div>
                        @enderror

                    </div>

                    <div class="field">
                        <label class="label">Email de l'utilisateur</label>
                        {!! Form::email('email', $user->email, ['class' => 'input']) !!}
                        @error('email')
                            <div class="form-text"> {{ $message }} </div>
                        @enderror

                    </div>

                    <hr>
                    <div class="field w-full ">
                        <div class="w-full">
                            <x-custom-select label="Roles" name="roles" id="roles"
                                route="{{ route('roles.selectlist', 'roles') }}" method="selectroles" :options="[
                                    $userRole[0]->id ?? null,
                                    $userRole[0]->id ?? null,
                                    $userRole[0]->name ?? null,

                                ]">
                            </x-custom-select>
                            @error('roles')
                                <div class="text-danger text-form"> {{ $message }} </div>
                            @enderror
                        </div>
                    </div>
                    {{-- <div class="field">
                        <label class="label">Roles</label>
                        {!! Form::select('roles[]', $roles, $userRole, ['class' => 'input']) !!}
                        @error('roles')
                            <div class="form-text"> {{ $message }} </div>
                        @enderror

                    </div> --}}
                    <div class="field w-full ">
                        <div class="w-full">
                            <x-custom-select label="Permissions" name="permissions" id="permissions"
                                route="{{ route('permissions.selectlist', 'permissions') }}" method="selectpermissions" :options="[
                                    $userPermission[0]->id ?? null,
                                    $userPermission[0]->id ?? null,
                                    $userPermission[0]->name ?? null,

                                ]">
                            </x-custom-select>
                            @error('permissions')
                                <div class="text-danger text-form"> {{ $message }} </div>
                            @enderror
                        </div>
                    </div>
                    {{-- <div class="field">
                        <label class="label">Permissions</label>
                        {!! Form::select('permissions[]', $permissions, $userPermission, ['class' => 'input']) !!}
                        @error('permission')
                            <div class="form-text"> {{ $message }} </div>
                        @enderror

                    </div> --}}

                    <hr>
                    <div class="field">
                        <div class="control">
                            <button type="submit" class="button">
                                Submit
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>


</x-main>
<x-custom-modal id="selectroles" size="w-full" name="Roles"></x-custom-modal>
<x-custom-modal id="selectpermissions" size="w-full" name="Permissions"></x-custom-modal>