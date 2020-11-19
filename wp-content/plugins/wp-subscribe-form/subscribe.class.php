<?php
class p_subscribe {
    private static $instance;

    private function __construct() {
        add_filter('plugin_action_links_' . P_SUBSCRIBE_PLUGIN_BASE, [$this, 'plugin_action_links']);
        add_action('admin_enqueue_scripts', array($this, 'admin_styles'));
        //add_action('admin_init', array($this, 'admin_init'));
        add_action("wp_ajax_subscribe_forms_update_status", array($this, 'subscribe_forms_update_status'));

        add_action('admin_footer', array($this, 'add_deactivate_modal'));
        add_action('wp_ajax_subscribe_form_plugin_deactivate', array($this, 'subscribe_form_plugin_deactivate'));
    }

    public function add_deactivate_modal()
    {
        global $pagenow;

        if ('plugins.php' !== $pagenow) {
            return;
        }

        include 'includes/deactivate-form.php';
    }

    /* subscribe_form_plugin_deactivate start */
    public function subscribe_form_plugin_deactivate()
    {
		if ( ! current_user_can( 'manage_options' ) ) {
			wp_die(0); 
		}
		check_ajax_referer( 'subscribe_form_deactivate_nonce', 'nonce' );
        $postData = $_POST;
        $errorCounter = 0;
        $response = array();
        $response['status'] = 0;
        $response['message'] = "";
        $response['valid'] = 1;
        $reason = filter_input(INPUT_POST, 'reason', FILTER_SANITIZE_STRING);
        $nonce = filter_input(INPUT_POST, 'nonce', FILTER_SANITIZE_STRING);
        if (empty($reason)) {
            $errorCounter++;
            $response['message'] = "Please provide reason";
        } else if (empty($nonce)) {
            $response['message'] = esc_attr__("Your request is not valid", CHT_OPT);
            $errorCounter++;
            $response['valid'] = 0;
        } else {
            if (!wp_verify_nonce($nonce, 'subscribe_form_deactivate_nonce')) {
                $response['message'] = esc_attr__("Your request is not valid", CHT_OPT);
                $errorCounter++;
                $response['valid'] = 0;
            }
        }
        if ($errorCounter == 0) {
            global $current_user;
            $email = "none@none.none";
            if (isset($postData['email_id']) && !empty($postData['email_id']) && filter_var($postData['email_id'], FILTER_VALIDATE_EMAIL)) {
                $email = $postData['email_id'];
            }
            $domain = site_url();
            $user_name = $current_user->first_name . " " . $current_user->last_name;
            $subject = "Subscribe Forms was removed from {$domain}";
            $headers = "MIME-Version: 1.0\r\n";
            $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
            $headers .= 'From: ' . $user_name . ' <' . $email . '>' . PHP_EOL;
            $headers .= 'Reply-To: ' . $user_name . ' <' . $email . '>' . PHP_EOL;
            $headers .= 'X-Mailer: PHP/' . phpversion();
            ob_start();
            ?>
            <table border="0" cellspacing="0" cellpadding="5">
                <tr>
                    <th>Plugin</th>
                    <td>Subscribe Forms</td>
                </tr>
                <tr>
                    <th>Plugin Version</th>
                    <td><?php esc_attr_e(P_SUBSCRIBE_PLUGIN_VERSION) ?></td>
                </tr>
                <tr>
                    <th>Domain</th>
                    <td><?php echo esc_url($domain) ?></td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td><?php esc_attr_e($email) ?></td>
                </tr>
                <tr>
                    <th>Reason</th>
                    <td><?php esc_attr_e(nl2br($reason)) ?></td>
                </tr>
                <tr>
                    <th>WordPress Version</th>
                    <td><?php esc_attr_e(get_bloginfo('version')) ?></td>
                </tr>
                <tr>
                    <th>PHP Version</th>
                    <td><?php esc_attr_e(PHP_VERSION) ?></td>
                </tr>
            </table>
            <?php
            $content = ob_get_clean();
            $email_id = "gal@premio.io, karina@premio.io";
            wp_mail($email_id, $subject, $content, $headers);
            $response['status'] = 1;
        }
        echo json_encode($response);
        wp_die();
    }

    public function subscribe_forms_update_status() {
		if ( ! current_user_can( 'manage_options' ) ) {
			wp_die(0); 
		}
		check_ajax_referer( 'subscribe_forms_update_status', 'nonce' );
        if(!empty($_REQUEST['nonce']) && wp_verify_nonce($_REQUEST['nonce'], 'subscribe_forms_update_status')) {
            $status = filter_input(INPUT_POST, 'status', FILTER_SANITIZE_STRING);
            $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
            update_option("subscribe_forms_update_status", 2);
            if($status == 1) {
                $url = 'https://go.premio.io/api/update.php?email='.$email.'&plugin=subscribe_form';
                $handle = curl_init();
                curl_setopt($handle, CURLOPT_URL, $url);
                curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
                $response = curl_exec($handle);
                curl_close($handle);
            }
        }
    }

    public function plugin_action_links($links)
    {
        $links['pro'] = '<a class="upgrade-button" href="'.admin_url("edit.php?post_type=sfba_subscribe_form&page=upgrade_to_pro").'" >'.__( 'Upgrade', 'subscribe-form').'</a>';
        return $links;
    }

    public static function get_instance() {
        if (empty(self::$instance)) {
            self::$instance = new p_subscribe();
        }
        return self::$instance;
    }

    function admin_styles()
    {
        wp_register_style('wcp-css-handle', false);
        wp_enqueue_style('wcp-css-handle');
        $css = "
				.upgrade-button {color: #FF5983; font-weight: bold;}
			";
        wp_add_inline_style('wcp-css-handle', $css);
    }

    function admin_init() {
        $option = get_option("subscribe_forms_redirect_status", true);
        if ($option == "on") {
            update_option("subscribe_forms_redirect_status", "off");
            //wp_redirect(admin_url("post-new.php?post_type=sfba_subscribe_form"));
            //exit;
        }
    }
}
p_subscribe::get_instance();