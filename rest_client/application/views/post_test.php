<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div id="container">
    <h1>Testing a POST request</h1>

    <div id="body">

        <h2><a href="<?php echo site_url(); ?>">Home</a></h2>
        <h2><a href="<?php echo site_url('rest-server'); ?>">Tests Home</a></h2>

        <h3>
            Result:
        </h3>

        <code><pre><?php var_dump($response); ?></pre></code>

        <h3>
            Status Code:
        </h3>

        <code><pre><?php echo html_escape($status_code); ?></pre></code>

        <h3>
            Content Type:
        </h3>

        <code><pre><?php echo html_escape($content_type); ?></pre></code>

    </div>

    <p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>
