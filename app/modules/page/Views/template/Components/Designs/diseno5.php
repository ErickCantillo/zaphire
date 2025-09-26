<div class="contenido" style="background-image: url('/images/<?= $contenido['detalle']->contenido_fondo_imagen ?>'); height: 50vh;">
    <div class="design-5">
        <div class="titulo-5">
            <?= print_r($contenido['hijos'][0]['detalle']->contenido_descripcion, true) ?>
        </div>
        <div class="descripcion-5">
            <?= print_r($contenido['hijos'][1]['detalle']->contenido_descripcion, true) ?>
        </div>

        <div class="hero-buttons">
            <a href="#" class="btn-primary">Ver más</a>
        </div>
    </div>

</div>

<style>
   
    .design-5 {
        min-width: 40vw;
        padding-left: 5vw;
    }

    .descripcion-5 p {
        font-size: 1.2rem;
        line-height: 1.6;
        color: #e5e7eb;
        font-size: 1.4rem;
    }
</style>