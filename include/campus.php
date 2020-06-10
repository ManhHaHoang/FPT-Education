<div id="campus" class="component">
    <div class="box-title txt-center">
        Campus life
    </div>
    <img src="/images/campus.png" alt="">
    <div class="campus-contain">
        <?php for ($i=1; $i < 5; $i++) { ?>
            <a class="campus-item" href="#">
                <img src="/images/video-<?= $i ?>.png" alt="">
            </a>
        <?php }?>
    </div>
</div>
