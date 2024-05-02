<?php if (session('messageCode')) :
                    var_dump(session('messageCode'));
    ?>
    <?php foreach (session('messageCode') as $message) : ?>
        <div class="alert">
            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
            <?= $message ?>
        </div>
        <?php break; ?>
    <?php endforeach; ?>
<?php endif; ?>
