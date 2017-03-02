<?php
require_once "View/view_parts/top.php";
require_once "View/view_parts/header.php";
require_once "View/view_parts/bradcump.php";
?>

    <!-- =-=-=-=-=-=-= Our Services =-=-=-=-=-=-= -->
    <section class="custom-padding">
        <div class="container">
            <div class="row">
                <div id="services-2">
                    <!--******************************** One Lesson Start ******************************** -->
                    <?php
                    if (isset($_GET["page"])) {
                        $page = $_GET["page"];
                        $file = "BMLibby/" . $page . ".txt";
                        $count = 0;
                        if (file_exists($file)) {
                            $handle = fopen($file, "r");
                            if ($handle) {
                                while (($line = fgets($handle)) !== false) {
                                    $strAry = explode(":", $line);
                                    $count++;
                                    //Echo Each Lesson Start
                                    echo "<div class='col-lg-6 col-md-6  col-sm-6' style='border:1px solid #ffc627;'>";
                                    echo "<p class='product-name'><a href='product-details.html' class='product-name' style='color:brown'>သင္ခန္းစာ $count </a></p>";
                                    echo "<p>$strAry[0]</p>";
                                    echo "<a href='$strAry[1]'><button class='btn btn-warning pull-right' type='button'>Download</button></a>";
                                    echo "</div>";
                                    //Echo Each Lesson End

                                }
                                fclose($handle);
                            } else {
                                echo "File Opening Error";
                            }
                        } else {
                            echo "File Not Exist";
                        }
                    }

                    ?>
                    <!--******************************** One Lesson End ******************************** -->
                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- Row End -->
        </div>
        <!-- end container -->
    </section>
    <!-- =-=-=-=-=-=-= Our Services-end =-=-=-=-=-=-= -->


<?php
require_once "View/view_parts/footer.php";
require_once "View/view_parts/base.php";
?>