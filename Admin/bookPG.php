<?Php
include './header.php';
include './sidebar.php';
?>
<div class="ks-column ks-page">
    <div class="ks-page-header">
        <section class="ks-title">
            <h3>Book PG List</h3>
        </section>
    </div>
    <div class="ks-page-content">
        <div class="ks-page-content-body ks-content-nav">
            <div class="ks-nav-body">
                <div class="ks-nav-body-wrapper">
                    <table id="ks-datatable" class="table table-striped table-bordered" width="100%">
                        <thead>
                            <tr>
                                <th>PG Name</th>
                                <th>PG Price</th>
                                <th>PG Amenities</th>
                                <th>PG Address</th>
                                <th>Deposite Amount</th>
                                <th>PG Description</th>
                                <!--<th>Status</th>-->
                                <th>User Name</th>
                                <th>Images</th>
                            </tr>
                        </thead>
                        <?php
                        include './includes/connection.php';

                        $query = "select registration.user_id , registration.f_name,registration.l_name , add_pg_detail.* from add_pg_detail left join registration on registration.user_id=add_pg_detail.user_id where status = 'UnAvailable' ";

                        $result = mysqli_query($con, $query);
                        if ($result) {
                            while ($row = mysqli_fetch_array($result)) {
                                echo "<tr>"
                                . "<td>$row[pg_name]</td>"
                                . "<td>$row[pg_price]</td>"
                                . "<td>$row[pg_amenities]</td>"
                                . "<td>$row[pg_address]</td>"
                                . "<td>$row[deposite]</td>"
                                . "<td>$row[pg_description]</td>"
                                . "<td>$row[f_name] $row[l_name] </td>"
                                . "<td><img src=$row[images] width='70' height='70'></td></tr>";
                            }
                        }
                        ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


