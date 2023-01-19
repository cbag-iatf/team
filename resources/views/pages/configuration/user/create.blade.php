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
                    Creer Profil
                </p>
            </header>
            <div class="card-content">

                <form method="POST" action="{{ route('users.store') }}">
                    @csrf

                    <div class="field">
                        <label class="label">Nom de l'utilisateur</label>
                        {!! Form::text('name', null, ['class' => 'input']) !!}
                        @error('name')
                            <div class="form-text"> {{ $message }} </div>
                        @enderror

                    </div>

                    <div class="field">
                        <label class="label">Email de l'utilisateur</label>
                        {!! Form::email('email', null, ['class' => 'input']) !!}
                        @error('email')
                            <div class="form-text"> {{ $message }} </div>
                        @enderror

                    </div>

                    <div class="field">
                        <label class="label">Password de l'utilisateur</label>
                       
                        {!! Form::text('password', null, ['class' => 'input ']) !!}
                        @error('password')
                            <div class="form-text"> {{ $message }} </div>
                        @enderror

                    </div>

                    <hr>
                    <div class="field">
                        <label class="label">Roles</label>
                        {!! Form::select('roles[]', $roles, [], ['class' => 'input']) !!}
                        @error('roles')
                            <div class="form-text"> {{ $message }} </div>
                        @enderror

                    </div>

                    <div class="field">
                        <label class="label">Permissions</label>
                        {!! Form::select('permissions[]', $permissions, [], ['class' => 'input']) !!}
                        @error('permission')
                            <div class="form-text"> {{ $message }} </div>
                        @enderror

                    </div>

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


{{-- <x-main>
    <div class="row">
        <div class="col-12 mb-4 order-0">
            <div class="card">
                <div class="d-flex align-items-end row">
                    <div class="col-sm-12">
                        <div class="card-body table-responsive">
                           <div class="col-12 d-flex justify-content-between">
                               <h5 class="card-title text-primary">{{ __('user.create_user') }}</h5>
                           </div>
                           <form method="POST" action="{{ route('users.store') }}">
                            @csrf
                            <div class="mb-3">
                                <label  class="form-label">{{ __('user.name') }}</label>
                                {!! Form::text('name',null, ['placeholder'=> __('user.name'),  'class'=>'form-control']) !!}
                                @error('name')
                                <div  class="form-text"> {{ $message }} </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label  class="form-label">{{ __('user.email') }}</label>
                                {!! Form::email('email',null, ['placeholder'=> __('user.email') ,  'class'=>'form-control']) !!}
                                @error('email')
                                <div  class="form-text"> {{ $message }} </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label  class="form-label">{{ __('user.roles') }}</label>
                                {!! Form::select('roles[]', $roles,[], array('class' => 'form-control','multiple')) !!}
                                @error('roles')
                                <div  class="form-text"> {{ $message }} </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label  class="form-label">{{ __('user.permissions') }}</label>
                                {!! Form::select('permissions[]', $permissions,[], array('class' => 'form-control','multiple')) !!}
                                @error('permissions')
                                <div  class="form-text"> {{ $message }} </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label  class="form-label">{{ __('user.password') }}</label>
                                {!! Form::password('password', ['placeholder'=>__('user.password'),  'class'=>'form-control']) !!}
                                @error('password')
                                <div  class="form-text"> {{ $message }} </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label  class="form-label">{{ __('user.confirm_password') }}</label>
                                {!! Form::password('confirm-password', ['placeholder'=>__('user.confirm_password'),  'class'=>'form-control']) !!}
                                @error('password')
                                <div  class="form-text"> {{ $message }} </div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary">{{ __('button.create') }}</button>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-main> --}}
