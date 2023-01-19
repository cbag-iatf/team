<x-main>
    <section class="section main-section">
        <div class="grid grid-cols-1 gap-6 lg:grid-cols-2 mb-6">
          <div class="card">
            <header class="card-header">
              <p class="card-header-title">
                <span class="icon"><i class="mdi mdi-account-circle"></i></span>
                Edit Profile
              </p>
            </header>
            <div class="card-content">
              <form>
                <div class="field">
                  <label class="label">Avatar</label>
                  <div class="field-body">
                    <div class="field file">
                      <label class="upload control">
                        <a class="button blue">
                          Upload
                        </a>
                        <input type="file">
                      </label>
                    </div>
                  </div>
                </div>
                <hr>
                <div class="field">
                  <label class="label">Name</label>
                  <div class="field-body">
                    <div class="field">
                      <div class="control">
                        <input type="text" autocomplete="on" name="name" value="John Doe" class="input" required>
                      </div>
                      <p class="help">Required. Your name</p>
                    </div>
                  </div>
                </div>
                <div class="field">
                  <label class="label">E-mail</label>
                  <div class="field-body">
                    <div class="field">
                      <div class="control">
                        <input type="email" autocomplete="on" name="email" value="user@example.com" class="input" required>
                      </div>
                      <p class="help">Required. Your e-mail</p>
                    </div>
                  </div>
                </div>
                <hr>
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
            <header class="card-header">
              <p class="card-header-title">
                <span class="icon"><i class="mdi mdi-account"></i></span>
                Profile
              </p>
            </header>
            <div class="card-content">
              <div class="image w-48 h-48 mx-auto">
                <img src="https://avatars.dicebear.com/v2/initials/john-doe.svg" alt="John Doe" class="rounded-full">
              </div>
              <hr>
              <div class="field">
                <label class="label">Name</label>
                <div class="control">
                  <input type="text" readonly value="John Doe" class="input is-static">
                </div>
              </div>
              <hr>
              <div class="field">
                <label class="label">E-mail</label>
                <div class="control">
                  <input type="text" readonly value="user@example.com" class="input is-static">
                </div>
              </div>
            </div>
          </div>
        </div>
       
      </section>
</x-main>

<x-layouts.admin-layout>
    <div class="row">
        <div class="col-12 mb-4 order-0">
            <div class="card">
                <div class="d-flex align-items-end row">
                    <div class="col-sm-12">
                        <div class="card-body table-responsive">
                           <div class="col-12 d-flex justify-content-between">
                               <h5 class="card-title text-primary">{{ __('role.create_role') }}</h5>
                           </div>
                           <form method="POST" action="{{ route('roles.store') }}">
                            @csrf
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">{{ __('role.name') }}</label>
                                <input type="text" name="name" class="form-control" id="name" aria-describedby="emailHelp">
                                @error('name')
                                    <div id="emailHelp" class="form-text"> {{ $message }} </div>
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
</x-layouts.admin-layout>
