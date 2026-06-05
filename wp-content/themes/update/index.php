<?php get_header(); ?>

<div class="content">
    <div class="grid-3d">

        <?php
        $models = array(
            "model4.gltf",
            "model2.glb",
            "glassDoorCabinet.glb",
            "model3.glb"
        );

        foreach ($models as $model) :
        ?>

        <div class="card-3d">

            <div class="viewer-wrapper">
                <model-viewer
                    src="<?php echo get_template_directory_uri(); ?>/<?php echo $model; ?>"
                    auto-rotate
                    camera-controls
                    shadow-intensity="1"
                    exposure="1"
                    environment-image="neutral"
                    onclick="openViewer('<?php echo get_template_directory_uri(); ?>/<?php echo $model; ?>')">
                </model-viewer>
            </div>

            <a class="download-btn"
               href="<?php echo get_template_directory_uri(); ?>/<?php echo $model; ?>"
               download>
               ⬇ Download
            </a>

        </div>

        <?php endforeach; ?>

    </div>
</div>

<!-- FULLSCREEN MODAL -->
<div id="viewerModal" class="modal">
    <span class="close" onclick="closeViewer()">✕</span>
    <model-viewer id="fullModel"
        auto-rotate
        camera-controls
        shadow-intensity="1"
        exposure="1"
        environment-image="neutral">
    </model-viewer>
</div>

<script>
function openViewer(src) {
    document.getElementById("viewerModal").style.display = "flex";
    document.getElementById("fullModel").src = src;
}

function closeViewer() {
    document.getElementById("viewerModal").style.display = "none";
}
</script>

<?php get_footer(); ?>