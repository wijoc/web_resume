    <!-- Core CSS -->
        <!-- Bootstrap core CSS -->
        <link href="<?php echo base_url() ?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="<?php echo base_url() ?>assets/visitor/css/main-style.css" rel="stylesheet">

    <!-- Additional Stylesheet -->
        <?php 
            switch ($assets){
                case (in_array('timeline', $assets)):
                    echo "<!-- Custom styles for this template -->
                    <link href='".base_url()."assets/extra/timeline/timeline.css' rel='stylesheet'> \n";
                    break;
                default:
                    echo '';
                    break;
            }
        ?>