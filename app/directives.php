<?php
namespace App; // Only the namespace is required; don't need to `use` anything.

add_action('after_setup_theme', function () {
  
   /**
     * Create @asset() Blade directive
     */
    sage('blade')->compiler()->directive('asset', function ($asset) {
        return "<?= " . __NAMESPACE__ . "\\asset_path({$asset}); ?>";
    });

    /**
     * Create @shortcode() Blade directive
     */
    sage('blade')->compiler()->directive('shortcode', function ($shortcode) {
        return '<?= do_shortcode(' . $shortcode . '); ?>';
    });

    /**
     * Create @icon() Blade directive
     *
     * Usage: @icon('google-plus')
     */
    sage('blade')->compiler()->directive('icon', function ($icon) {
        return sprintf('<span aria-hidden="true" class="fa-%s"></span>', trim($icon, "'"));
    });

});    