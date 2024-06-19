<?php
if (isset($_GET['status'])) {
    if ($_GET['status'] == 'success') {
?>
        <div class="alert alert-success">
            <?php echo $_GET['message']; ?>
        </div>
    <?php
    }
    if ($_GET['status'] == 'fail') {
    ?>
        <div class="alert alert-danger">
            <?php echo $_GET['message']; ?>
        </div>
<?php
    }
}
?>




<?php
// Connect to database
$db = new PDO("mysql:host=localhost;dbname=your_db_name", "your_username", "your_password");
// Define page size
$page_size = 10;
// Count total number of records
$stmt = $db->query("SELECT COUNT(*) FROM your_table_name");
$total_records = $stmt->fetchColumn();
// Calculate total number of pages
$total_pages = ceil($total_records / $page_size);
// Get page number from URL parameter or set to 1
$page = isset($_GET['page']) ? $_GET['page'] : 1;
// Validate page number and make sure it is within range
if ($page < 1 || $page > $total_pages) {
    $page = 1;
}
// Calculate offset and limit for database query
$offset = ($page - 1) * $page_size;
$limit = $page_size;
// Execute database query and fetch data for current page
$stmt = $db->prepare("SELECT * FROM your_table_name LIMIT :offset, :limit");
$stmt->bindParam(':offset', $offset, PDO::PARAM_INT);
$stmt->bindParam(':limit', $limit, PDO::PARAM_INT);
$stmt->execute();
$data = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html>

<head>
    <title>Pagination Example</title>
    <style>
        /* Add some styling for your web page and pagination links or buttons */
    </style>
</head>

<body>
    <h1>Pagination Example</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
        </tr>
        <?php foreach ($data as $row) { ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['email']; ?></td>
            </tr>
        <?php } ?>
    </table>
    <div class="pagination">
        <?php for ($i = 1; $i <= $total_pages; $i++) { ?>
            <a href="?page=<?php echo $i; ?>" class="<?php echo $i == $page ? 'active' : ''; ?>">
                <?php echo $i; ?>
            </a>
        <?php } ?>
    </div>
    <script>
        // Add some functionality for your pagination links or buttons
    </script>
</body>

</html>