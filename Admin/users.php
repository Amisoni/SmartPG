<?Php
include './sidebar.php';
include './header.php';
?>
<div class="ks-column ks-page">
    <div class="ks-page-header">
        <section class="ks-title">
            <h3>Register Users</h3>
        </section>
    </div>
    <div class="ks-page-content">
        <div class="ks-page-content-body ks-content-nav">
            <div class="ks-nav-body">
                <div class="ks-nav-body-wrapper">
                    <table id="ks-datatable" class="table table-striped table-bordered" width="100%">
                        <thead>
                            <tr>
                                <th>First Name</th>
                                <th>Middle Name</th>
                                <th>Last Name</th>
                                <th>Address</th>
                                <th>Pin Code</th>
                                <th>City</th>
                                <th>Birth Date</th>
                                <th>Gender</th>
                                <th>Email</th>
                                <th>Mobile Number</th>
                                <th>Profile</th>
                            </tr>
                        </thead>
                        <?php
                        include './includes/connection.php';

                        $query = "SELECT * FROM `registration` where user_id!=1";

                        $result = mysqli_query($con, $query);
                        if ($result) {
                            while ($row = mysqli_fetch_array($result)) {
                                echo "<tr>"
                                . "<td>$row[f_name]</td>"
                                . "<td>$row[m_name]</td>"
                                . "<td>$row[l_name]</td>"
                                . "<td>$row[address]</td>"
                                . "<td>$row[pincode]</td>"
                                . "<td>$row[city]</td>"
                                . "<td>$row[dob]</td>"
                                . "<td>$row[gender]</td>"
                                . "<td>$row[email]</td>"
                                . "<td>$row[contact_no]</td>"
                                . "<td><img src=$row[profile_photo] width='70' height='70'></td></tr>";
                            }
                        }
                        ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

