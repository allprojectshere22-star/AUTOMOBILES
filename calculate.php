
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GST Calculator</title>
</head>
<body>

<h1>GST Calculator</h1>

<?php
$amount = 35000;
$gst_rate = 0.18;
$gst_amount = 0;
$total_amount = 0;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $gst_amount = $amount * $gst_rate;
    $total_amount = $amount + $gst_amount;
}
?>



<?php
if ($gst_amount > 0) {
    echo "<h2>Results:</h2>";
    echo "Amount: ₹" . number_format($amount, 2) . "<br>";
    echo "GST (18%): ₹" . number_format($gst_amount, 2) . "<br>";
    echo "Total Amount (including GST): ₹" . number_format($total_amount, 2) . "<br>";
}
?>

</body>
</html>