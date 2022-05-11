<div class="table-responsive container">
    <table class="table table-striped" style="color:white;">
        <thead>
            <tr>
                <th scope="col" class="col-sm-2">#</th>
                <th scope="col" class="col-sm-6">Name</th>
                <th scope="col" class="col-sm-2">Time</th>
                <th scope="col" class="col-sm-2">Date</th>
            </tr>
        </thead>
        <tbody>
            <?php
                include('db/connect.php');
                $sqluser1 = "select count(*) as totaluser from records";
                $result1 = $db->query($sqluser1);
                $row1 = $result1->fetch_assoc();
                $totaluser = $row1['totaluser'];


                $sqluser = "select * from records";
                $result = $db->query($sqluser);
                $id=1;

                if ($result->num_rows) {
                    while ($row = $result->fetch_assoc()) {
            ?>

                <tr>
                    <td><?= $id; ?></td>
                    <td><?= $row['Name']; ?></td>
                    <td><?= $row['Time']; ?></td>
                    <td><?= $row['Date']; ?></td>
                </tr>

                <?php
                $id=$id+1;
                    }
                }
                else{
                    echo "No record found.";
                }
                ?>
        </tbody>
    </table>
    <h6 class="card-title">Total No of Records : <?=$totaluser;?></h6>
</div>