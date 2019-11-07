<script>
var sound = new Howl({
    src: ['http://localhost:8000/onlineshop/assets/Files/music/tungyeu.mp3']
});
$(document).ready(() => {
    $(document).on('click', '#music', function() {
        sound.play();
    });
    $(document).on('dblclick', '#music', function() {
        sound.stop();
    });
});
</script>