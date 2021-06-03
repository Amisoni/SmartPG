<?Php
include './header.php';
include './sidebar.php';
?>
<div class="ks-column ks-page">
    <div class="ks-page-header">
        <section class="ks-title">
            <h3>FeedBack List</h3>
        </section>
    </div>
    <div class="ks-page-content">
        <div class="ks-page-content-body ks-content-nav">
            <div class="ks-nav-body">
                <div class="ks-nav-body-wrapper">
                    <table id="ks-datatable" class="table table-striped table-bordered" width="100%">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Feedback</th>
                                <th>User Name</th>
                            </tr>
                        </thead>
                        <?php
                        include './includes/connection.php';

                        $query = "select registration.user_id , registration.f_name,registration.l_name , feedback.* from feedback left join registration on registration.user_id=feedback.user_id";

                        $result = mysqli_query($con, $query);
                        if ($result) {
                            while ($row = mysqli_fetch_array($result)) {
                                echo "<tr>"
                                . "<td>$row[id]</td>"
                                . "<td>$row[description]</td>"
                                . "<td>$row[f_name] $row[l_name] </td></tr>";
                            }
                        }
                        ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


