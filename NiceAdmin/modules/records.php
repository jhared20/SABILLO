<?php
include "../includes/connections.php";

$page = isset($_GET['p']) ? (int)$_GET['p'] : 1;
if($page < 1) $page = 1;

$per_page = 10;
$start = ($page - 1) * $per_page;

$result = $conn->query("SELECT * FROM sales ORDER BY id DESC LIMIT $start, $per_page");
$result_total = $conn->query("SELECT * FROM sales");
$total_records = $result_total->num_rows;
$total_pages = ceil($total_records / $per_page);
?>


<h5 class="card-title mb-0">Sales Records</h5>

<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Customer</th>
            <th>Product</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Total</th>
            <th>Payment Mode</th>
            <th>Member Type</th>
            <th>Date</th>
        </tr>
    </thead>
    <tbody>
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["id"] . "</td>";
                echo "<td>" . $row["customer"] . "</td>";
                echo "<td>" . $row["product"] . "</td>";
                echo "<td>" . $row["quantity"] . "</td>";
                echo "<td>" . $row["price"] . "</td>";
                echo "<td>" . $row["total"] . "</td>";
                echo "<td>" . $row["payment_mode"] . "</td>";
                echo "<td>" . $row["member_type"] . "</td>";
                echo "<td>" . $row["created_at"] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='9'>No records found</td></tr>";
        }
        ?>
    </tbody>
</table>

<div class="d-flex justify-content-between align-items-center">
    <p class="mb-0">Showing <?php echo ($start + 1); ?> to <?php echo min($start + $per_page, $total_records); ?> of <?php echo $total_records; ?> entries</p>
    
    <nav aria-label="Page navigation">
        <ul class="pagination">
            <?php
            // Previous button
            if($page > 1){
                echo '<li class="page-item"><a class="page-link" href="index.php?page=Records&p=' . ($page - 1) . '">Previous</a></li>';
            } else {
                echo '<li class="page-item disabled"><span class="page-link">Previous</span></li>';
            }
            
            // Page numbers
            $i = 1;
            while($i <= $total_pages){
                if($i == $page){
                    echo '<li class="page-item active"><span class="page-link">' . $i . '</span></li>';
                } else {
                    echo '<li class="page-item"><a class="page-link" href="index.php?page=Records&p=' . $i . '">' . $i . '</a></li>';
                }
                $i = $i + 1;
            }
            
            // Next button
            if($page < $total_pages){
                echo '<li class="page-item"><a class="page-link" href="index.php?page=Records&p=' . ($page + 1) . '">Next</a></li>';
            } else {
                echo '<li class="page-item disabled"><span class="page-link">Next</span></li>';
            }
            ?>
        </ul>
    </nav>
</div>
