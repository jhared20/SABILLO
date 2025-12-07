<?php
include "../includes/connections.php";

if(isset($_POST['btn_submit'])){

    $customer = $_POST['sales_customer'];
    $product = $_POST['sales_product'];
    $quantity = (float)$_POST['sales_quantity'];
    $price = (float)$_POST['sales_price'];
    $payment = @$_POST['sales_payment'];
    $member = @$_POST['sales_member'];

    $total = $quantity * $price;

    $sql = "INSERT INTO sales (customer, product, quantity, price, total, payment_mode, member_type)
            VALUES ('$customer', '$product', '$quantity', '$price', '$total', '$payment', '$member')";
    
    if ($conn->query($sql) === TRUE) {
        echo '<script>alert("Sale Submitted Successfully!");</script>';
        $_POST = array();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

if(isset($_POST['btn_reset'])){
    echo '<script>alert("Form Reset Successfully!");</script>';
}

$conn->close();
?>

<h5 class="card-title">Sales Form</h5>
<form class="row g-3 needs-validation" method="POST" action="index.php?page=Registration_form">
    <div class="col-md-12">
        <div class="form-floating">
            <input type="text" class="form-control" id="floatingCustomer" placeholder="Customer Name" name="sales_customer">
            <label for="floatingCustomer">Customer Name</label>
            <div class="invalid-feedback">Please enter the customer name.</div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-floating">
            <input type="text" class="form-control" id="floatingProduct" placeholder="Product Name" name="sales_product">
            <label for="floatingProduct">Product Name</label>
            <div class="invalid-feedback">Please enter the product name.</div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="form-floating">
            <input type="number" class="form-control" id="floatingQuantity" placeholder="Quantity" name="sales_quantity">
            <label for="floatingQuantity">Quantity</label>
            <div class="invalid-feedback">Please enter quantity.</div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="form-floating">
            <input type="number" class="form-control" id="floatingPrice" placeholder="Price" name="sales_price">
            <label for="floatingPrice">Price</label>
            <div class="invalid-feedback">Please enter price.</div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-floating">
            <select class="form-select" id="floatingPayment" name="sales_payment">
                <option selected disabled>Choose Payment Mode</option>
                <option value="GCash">GCash</option>
                <option value="Cash">Cash</option>
                <option value="Debit Card">Debit Card</option>
            </select>
            <label for="floatingPayment">Mode of Payment</label>
            <div class="invalid-feedback">Please select a payment mode.</div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-floating">
            <select class="form-select" id="floatingMember" name="sales_member">
                <option selected disabled>Choose Member Type</option>
                <option value="Gold">Gold</option>
                <option value="Silver">Silver</option>
                <option value="Bronze">Bronze</option>
            </select>
            <label for="floatingMember">Member Type</label>
            <div class="invalid-feedback">Please select a member type.</div>
        </div>
    </div>

    <div class="text-center">
        <button type="submit" class="btn btn-primary" name="btn_submit">Submit</button>
        <button type="submit" class="btn btn-secondary" name="btn_reset">Reset</button>
    </div>
</form>
