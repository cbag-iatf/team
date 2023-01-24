<x-main>
    <section class="is-hero-bar">
        <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
            <h1 class="title">
                Utilisateurs
            </h1>

            <a class="button green" href="{{ route('users.create') }}">
                Ajouter
            </a>

        </div>
    </section>

    <section class="section main-section">
        <div class="card has-table">
            <header class="card-header">
                <p class="card-header-title">
                    <span class="icon"><i class="mdi mdi-account-multiple"></i></span>
                    Utilisateurs
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
                            <th>Email</th>
                            <th>Actions</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td data-label="Nom">{{ $user->name }}</td>
                                <td data-label="Email">{{ $user->email }}</td>
                                <input type="hidden" name="userId" id="userId">

                                <td class="actions-cell">
                                    <div class="buttons right nowrap">
                                        <a class="button small green" href="users/{!! encrypt($user->id) !!}/edit"
                                            class="btn btn-sm btn-primary">
                                            <span class="icon"><i class="mdi mdi-eye"></i></span>
                                        </a>

                                        <button type="button" onClick='showModel("users/{!! $user->id !!}")'
                                            class="button small red">
                                            <span class="icon"><i class="mdi mdi-trash-can"></i></span>
                                        </button>
                                        {{-- 
                                        <form method="POST" action="{{ route('users.destroy', $user->id) }}">
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
            {{ $users->links() }}
    </section>

    <x-delete-modal message="{{ __('message.confirm_delete') }}"
    cancel="{{ __('button.cancel') }}" confirm="{{ __('button.delete') }}" id="deleteConfirmationModel">
    </x-delete-modal>
    {{-- <div id="delete-modal" class="modal">
        <div class="modal-background --jb-modal-close"></div>
        <div class="modal-card">
            <header class="modal-card-head">
                <p class="modal-card-title">CONFIRMATION DE SUPPRESSION</p>
            </header>
            <section class="modal-card-body">
                <p><b>Le User sera supprimé de notre BD</b></p>

            </section>
            <footer class="modal-card-foot">
                <button class="button --jb-modal-close">Retour</button>


                <form method="POST" action="{{ route('users.destroy', $user->id) }}">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="button red --jb-modal-close">Confirmer</button>
                </form>
            </footer>
        </div>
    </div> --}}

</x-main>
