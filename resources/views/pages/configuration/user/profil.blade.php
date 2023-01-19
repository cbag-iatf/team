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
                           <div class="bg-secondary col-5 rounded h-100 p-4">
                            <h6 class="mb-4">{{__('user.update_password') }}</h6>
                            <div class="table-responsive">
                                <form method="POST" action="{{ route('users.update.password', $user->id) }}">
                                    @csrf
                                    @method('PUT')
                                    <div class="mb-3">
                                        <label  class="form-label">{{__('user.old_password') }}</label>
                                        {!! Form::password('old-password', ['placeholder'=>'Old Password',  'class'=>'form-control']) !!}
                                        @error('old-password')
                                        <div  class="form-text"> {{ $message }} </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label  class="form-label">{{__('user.new_password')}}</label>
                                        {!! Form::password('password', ['placeholder'=>__('user.new_password'),  'class'=>'form-control']) !!}
                                        @error('password')
                                        <div  class="form-text"> {{ $message }} </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label  class="form-label">{{__('user.confirm_password')}}</label>
                                        {!! Form::password('confirm-password', ['placeholder'=>__('user.confirm_password'),  'class'=>'form-control']) !!}
                                        @error('confirm-password')
                                        <div  class="form-text"> {{ $message }} </div>
                                        @enderror
                                    </div>
                                    <button type="submit" class="btn btn-success">{{__('user.update')}}</button>
                                </form>
                            </div>
                        </div>
                        <div class="bg-secondary col-6 offset-1 rounded h-100 p-4">
                            <h6 class="mb-4">{{__('user.update_other')}}</h6>
                            <div class="table-responsive">
                                <form method="POST" action="{{ route('users.update', $user->id) }}">
                                    @csrf
                                    @method('PUT')
                                    <div class="mb-3">
                                        <label  class="form-label">{{__('user.name')}}</label>
                                        {!! Form::text('name',$user->name, ['placeholder'=>__('user.name'),  'class'=>'form-control']) !!}
                                        @error('name')
                                        <div  class="form-text"> {{ $message }} </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label  class="form-label">{{__('user.email')}}</label>
                                        {!! Form::email('email',$user->email,  ['placeholder'=>__('user.email'),  'class'=>'form-control']) !!}
                                        @error('email')
                                        <div  class="form-text"> {{ $message }} </div>
                                        @enderror
                                    </div>
                                    <button type="submit" class="btn btn-success">{{__('user.update')}}</button>
                                </form>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.admin-layout>
