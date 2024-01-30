<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
     <script src="./alert.js"></script>
    <?php
        if(isset($_SESSION['status']) && $_SESSION['status']!= "")
        {
         ?>   
            <script>
                swal({
                    title: "<?php echo $_SESSION['status']; ?>",
                    // text: "You clicked the button!",
                    icon: "success",
                    button: "Tiếp Tục",
                    });
            </script>
        <?php
            unset($_SESSION['status']);
        }
    ?> 