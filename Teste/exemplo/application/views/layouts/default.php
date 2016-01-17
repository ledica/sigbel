<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>{title}</title>
        <meta name="viewport" content="width=device-width">
        {metas}
        
        <link rel="icon" href="<?php echo base_url('favicon.ico') ?>" type="image/x-icon" />
        <link rel="shortcut icon" href="<?php echo base_url('favicon.ico') ?>" type="image/x-icon" />
        
        <style>
          body {
          padding-top: 100px;
          }
        </style>
        <link rel="stylesheet" href="<?php echo base_url('assets/css/custom-theme/jquery-ui-1.8.16.custom.css') ?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap-responsive.min.css') ?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/main.css?ver=1.03') ?>">
        {styles}

        <script type="text/javascript"> 
            var CI = { 
              'base_url': '<?php echo base_url(); ?>'
            }; 
        </script> 
        <script src="<?php echo base_url('assets/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"') ?>"></script>
    </head>
    <body>
        {menu}
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
        <div class="container">
            {content}
        </div>

        <div id="removeModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="removeModalLabel" aria-hidden="true">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h3 id="myModalLabel">Are you sure?</h3>
          </div>
          <div class="modal-body">
              <div class="alert alert-block">
                  <h4>Warning!</h4>
                  <p>This action cannot be undone. Are you sure you want to continue?</p>
              </div>
          </div>
          <div class="modal-footer">
            <a href="{url}" class="btn btn-warning">Yes, I know what I'm doing.</a>
            <button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Cancel</button>
          </div>
        </div>
        
        <script src="<?php echo base_url('assets/js/vendor/jquery-1.8.3.min.js') ?>"></script>
        <script src="<?php echo base_url('assets/js/vendor/bootstrap.min.js?ver=1.00') ?>"></script>
        <script src="<?php echo base_url('assets/js/vendor/bootstrap-inputmask.min.js?ver=1.00') ?>"></script>
        <script src="<?php echo base_url('assets/js/vendor/tinymce/tinymce.min.js?ver=1.00') ?>"></script>
        <script src="<?php echo base_url('assets/js/plugins.js?ver=1.00') ?>"></script>
        <script src="<?php echo base_url('assets/js/main.js?ver=1.04') ?>"></script>
        {scripts}

    </body>
</html>
