<div id="{{$id}}" class="modal w-full h-full">
    <div class=" modal-background --jb-modal-close"></div>
    <div class="modal-card">
        <header class="modal-card-head">
            <p class="modal-card-title">{{ $name }}</p>
        </header>
        <section class="modal-card-body" id="{{$id}}-content">
   
        </section>

        <footer class="modal-card-foot">
            <button class="button --jb-modal-close" onClick="dismissModel1('{{$id}}')">Retour</button>
        </footer>
    </div>
</div>
