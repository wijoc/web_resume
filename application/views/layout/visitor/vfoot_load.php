    <!-- Core Script goes here-->
        <!-- Bootstrap core JavaScript -->
        <script src="<?php echo base_url() ?>assets/plugins/jquery/jquery.min.js"></script>
        <script src="<?php echo base_url() ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Additional Script -->
        <?php 
            switch ($assets){
                case (in_array('timeline', $assets)):
                    echo "<!-- Custom styles for this template -->
                    <script src='".base_url()."'assets/extra/timeline/timeline.js'></script>' \n";
                    break;
                default:
                    echo '';
                    break;
            }
        ?>