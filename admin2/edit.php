<?php
include '../conn.php';

function logError($message)
{
    error_log($message, 3, '../log/php-errors.log');
}


if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $stmt = $conn->prepare("SELECT * FROM menu WHERE id = ?");
    if ($stmt === false) {
        logError("Prepare failed: " . htmlspecialchars($conn->error));
        die("Prepare failed: " . htmlspecialchars($conn->error));
    }
    $stmt->bind_param('s', $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $data = $result->fetch_assoc();

    if (!$data) {
        logError("Data not found for ID: " . $id);
        echo "Data tidak ditemukan!";
        exit();
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $section_1 = $_POST['section_1'];
    $section_2 = $_POST['section_2'];
    $section_3 = $_POST['section_3'];
    $section_4 = $_POST['section_4'];
    $section_5 = $_POST['section_5'];

    date_default_timezone_set('Asia/Jakarta');
    $time = date('Y-m-d H:i:s', time());

    try {
        $stmt = $conn->prepare("UPDATE menu SET title = ?, section_1 = ?, section_2 = ?, section_3 = ?, section_4 = ?, section_5 = ?, updated_at = ? WHERE id = ?");
        if ($stmt === false) {
            logError("Prepare failed: " . htmlspecialchars($conn->error));
            die("Prepare failed: " . htmlspecialchars($conn->error));
        }
        $stmt->bind_param('ssssssss', $title, $section_1, $section_2, $section_3, $section_4, $section_5, $time, $id);
        if ($stmt->execute()) {
            header("Location: index.php");
            exit();
        } else {
            logError("Execute failed: " . htmlspecialchars($stmt->error));
            echo "Error: " . htmlspecialchars($stmt->error);
        }
    } catch (Exception $e) {
        logError("Exception: " . $e->getMessage());
        echo "Error: " . $e->getMessage();
    }

    $stmt->close();
    $conn->close();
}
?>

<?php include 'partials/head.php'; ?>

<body id="page-top">
    <div id="wrapper">
        <?php include 'partials/sidebar.php'; ?>
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <?php include 'partials/navbar.php'; ?>
                <div class="container-fluid">
                    <h1 class="h3 mb-2 text-gray-800">Edit Menu</h1>
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 d-flex justify-content-between align-items-center">
                            <h6 class="m-0 font-weight-bold text-primary">Form Edit</h6>
                            <button type="submit" form="editForm" class="btn btn-primary">Update Menu</button>
                        </div>
                        <div class="card-body">
                            <?php if (isset($data)) : ?>
                                <form id="editForm" action="" method="post">
                                    <div class="form-group">
                                        <label for="title">Title</label>
                                        <input type="text" class="form-control" id="title" name="title" value="<?php echo $data['title'] ?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="section_1">Section 1</label>
                                        <textarea name="section_1" class="form-control" rows="15" placeholder="Section 1..."><?php echo htmlspecialchars($data['section_1'] ?? ''); ?></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="section_2">Section 2</label>
                                        <textarea name="section_2" class="form-control" rows="15" placeholder="Section 2..."><?php echo htmlspecialchars($data['section_2'] ?? ''); ?></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="section_3">Section 3</label>
                                        <textarea name="section_3" class="form-control" rows="15" placeholder="Section 3..."><?php echo htmlspecialchars($data['section_3'] ?? ''); ?></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="section_4">Section 4</label>
                                        <textarea name="section_4" class="form-control" rows="15" placeholder="Section 4..."><?php echo htmlspecialchars($data['section_4'] ?? ''); ?></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="section_5">Section 5</label>
                                        <textarea name="section_5" class="form-control" rows="15" placeholder="Section 5..."><?php echo htmlspecialchars($data['section_5'] ?? ''); ?></textarea>
                                    </div>
                                </form>
                            <?php else : ?>
                                <p>Data tidak ditemukan!</p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php include 'partials/footer.php'; ?>
        </div>
    </div>

    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <?php include 'partials/modal.php'; ?>

    <script src="assets/tinymce/js/tinymce/tinymce.min.js"></script>
    <script type='text/javascript'>
        tinymce.init({
            selector: 'textarea',
            plugins: ' code anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed linkchecker a11ychecker tinymcespellchecker permanentpen powerpaste advtable advcode editimage advtemplate ai mentions tinycomments tableofcontents footnotes mergetags autocorrect typography inlinecss markdown',
            toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat | code',
            tinycomments_mode: 'embedded',
            license_key: 'hqg6c15o9ymi9hrk3qoz9wt1oeaprtauunnqj0jyw41t062t'
        });
    </script>

    <?php include 'partials/script.php'; ?>
</body>

</html>