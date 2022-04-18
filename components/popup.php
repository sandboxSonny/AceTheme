<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/dist/styles/component-popup.css">

<div id="site_popup" class="modal">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title"><?php the_field('popup_title', 'option'); ?></h5>
            <a class="close">
                <span aria-hidden="true">&times;</span>
            </a>
        </div>
        <div class="modal-body">
            <p><?php the_field('popup_content', 'option'); ?></p>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-primary"><?php the_field('popup_button_text', 'option'); ?></button>
        </div>
    </div>
</div>