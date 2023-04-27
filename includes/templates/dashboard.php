<div class="bui-container">
    <div class="bui-container-inner">

        <h1><?php esc_html_e('Bulk Image Upload', 'bulk_image_upload'); ?></h1>

        <?php if (array_key_exists('is_connected_to_service', $args) && $args['is_connected_to_service'] === false) { ?>

            <div class="bui-description">
                <?php esc_html_e("Connect your store to Bulk Image Upload. We need permission to manage your products.", 'bulk_image_upload'); ?>
            </div>

            <?php
            $url = urlencode(trailingslashit(get_home_url())) . '&returnUrl=' . urlencode(get_admin_url(null, 'admin.php?page=bulk-image-upload'));
            echo '<a href="' . esc_url($url) . '" class="button button-primary ' . '">' . esc_html__('Connect', 'bulk_image_upload') . '</a>';
            ?>

        <?php } elseif (array_key_exists('is_connected_to_drive', $args) && $args['is_connected_to_drive'] === false) { ?>

            <div class="bui-description">
                <?php esc_html_e("Connect to Google Drive. We need permission to access product images.", 'bulk_image_upload'); ?>
            </div>

            <?php
            $url = urlencode(trailingslashit(get_home_url())) . '&returnUrl=' . urlencode(get_admin_url(null, 'admin.php?page=bulk-image-upload'));
            echo '<a href="' . esc_url($url) . '" class="button button-primary ' . '">' . esc_html__('Connect to Google Drive', 'bulk_image_upload') . '</a>';
            ?>

        <?php } else { ?>

            <?php if (array_key_exists('is_upload_created', $args) && $args['is_upload_created'] === false) { ?>
                <div class="bui-description">
                    <?php esc_html_e("Congrats! You are ready to create your first upload.", 'bulk_image_upload'); ?>
                </div>
            <?php } ?>

            <?php
            $url = urlencode(trailingslashit(get_home_url())) . '&returnUrl=' . urlencode(get_admin_url(null, 'admin.php?page=bulk-image-upload'));
            echo '<a href="' . esc_url($url) . '" class="button button-primary ' . '">' . esc_html__('Create New Upload', 'bulk_image_upload') . '</a>';
            ?>

        <?php } ?>

        <script type="text/javascript">
            jQuery(document).ready(function () {
                console.log('hello');
            });
        </script>
    </div>
</div>