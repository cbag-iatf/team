<div id="deleteConfirmationModel" class="modal">
    <div class="modal-background --jb-modal-close"></div>
    <div class="modal-card">
        <header class="modal-card-head">
            <p class="modal-card-title">CONFIRMATION DE SUPPRESSION</p>
        </header>
        <section class="modal-card-body">
            <p><b>Le User sera supprimé de notre BD</b></p>

        </section>
        <footer class="modal-card-foot">
            <button class="button --jb-modal-close" onClick="dismissModel()">Retour</button>


            <form id="delete-frm" method="POST" action="">
                @method('DELETE')
                @csrf
                <button type="submit" class="button red --jb-modal-close">Confirmer</button>
            </form>
        </footer>
    </div>
</div>
