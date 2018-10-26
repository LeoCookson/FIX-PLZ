<?php include(APPROOT . "/views/includes/header.php"); ?>

<div class="row">
    <div class="col-sm-12">
    <h1><?php echo $data['title']; ?></h1>
    <hr>
        <table class="table">
            <thead class="myheader">
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Day</th>
                    <th>Time</th>
                    <th>Msg</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $output ="";
                    foreach($data['APP'] as $item) {
                       
                        $output .= $item['FNAME'];
                        $output .= "</td><td>";
                        $output .= $item['LNAME'];
                        $output .= "</td><td>";
                        $output .= $item ['EMAIL'];
                        $output .= "</td><td>";
                        $output .= $item ['PHONE'];
                        $output .= "</td></tr>";
                        $output .= $item ['DAYOF'];
                        $output .= "</td></tr>";
                        $output .= $item ['TIMEOF'];
                        $output .= "</td></tr>";
                        $output .= $item ['MSG'];
                        $output .= "</td></tr>";
                    }
                    echo $output;
                ?>
            </tbody>
        </table>
    </div>
</div>

<?php include(APPROOT . "/views/includes/footer.php"); ?>