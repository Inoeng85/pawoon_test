
<div id="container">
    <h1>Accessing the REST Server Using the Curl Library</h1>

    <div id="body">

        <h2><a href="<?php echo site_url(); ?>">Home</a></h2>

        <h3>
            Result:
        </h3>

        <code><pre><?php var_dump($response); ?></pre></code>

<?php /*
        <h3>
            Debug Information:
        </h3>

        <?php $this->curl->debug(); ?>
*/ ?>

    </div>

    <p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>