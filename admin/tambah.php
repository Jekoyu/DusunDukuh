<?php
include '../conn.php';
date_default_timezone_set('Asia/Jakarta');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $content = $_POST['content'];
    $status = $_POST['status'];  
    $time = date('Y-m-d H:i:s', time());

    $scheduled_at = null;
    if ($status === 'draft' && isset($_POST['scheduled_at'])) {
        $scheduled_at = $_POST['scheduled_at'];
    }

    $conn->begin_transaction();
    try {
        $stmt = $conn->prepare("INSERT INTO posts (title, content, status, scheduled_at, created_at, updated_at) VALUES (?, ?, ?, ?, ?, ?)");
        if ($stmt === false) {
            die("Prepare failed: " . htmlspecialchars($conn->error));
        }
        $stmt->bind_param('ssssss', $title, $content, $status, $scheduled_at, $time, $time);

        if (!$stmt->execute()) {
            throw new Exception("Error inserting post: " . htmlspecialchars($stmt->error));
        }
        $post_id = $stmt->insert_id;

        if (isset($_FILES['images'])) {
            $total_files = count($_FILES['images']['name']);
            for ($i = 0; $i < $total_files; $i++) {
                $file_name = $_FILES['images']['name'][$i];
                $file_tmp = $_FILES['images']['tmp_name'][$i];
                $target_dir = "assets/uploads/";
                $target_file = $target_dir . basename($file_name);

                if (getimagesize($file_tmp) === false) {
                    echo "File {$file_name} is not an image.<br>";
                    continue;
                }

                if (move_uploaded_file($file_tmp, $target_file)) {
                    $image_url = __dir__ . $target_file;
                    $image_stmt = $conn->prepare("INSERT INTO images (post_id, image_url) VALUES (?, ?)");
                    $image_stmt->bind_param("is", $post_id, $image_url);
                    if (!$image_stmt->execute()) {
                        throw new Exception("Error inserting image: " . htmlspecialchars($image_stmt->error));
                    }
                }
            }
        }

        $conn->commit();

        header("Location: index.php");
        exit();
    } catch (Exception $e) {
        $conn->rollback();
        echo "Error: " . $e->getMessage();
    }
    $conn = null;
}
?>

<?php
include 'partials/head.php';
?>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        <?php
        include 'partials/sidebar.php';
        ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <!-- Topbar -->
                <?php
                include 'partials/navbar.php';
                ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Tambah Artikel</h1>
                    <!-- Form Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 d-flex justify-content-between align-items-center">
                            <h6 class="m-0 font-weight-bold text-primary">Tambah Artikel</h6>
                            <button type="submit" form="addForm" class="btn btn-primary">Simpan</button>
                        </div>
                        <div class="card-body">
                            <form id="addForm" action="" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" class="form-control" id="title" name="title" required>
                                </div>
                                <div class="form-group">
                                    <label for="content">Content</label>
                                    <textarea name="content" class="form-control" rows="15" placeholder="Content"></textarea>
                                </div>

                                <!-- Select untuk status -->
                                <div class="form-group">
                                    <label for="status">Status</label>
                                    <select name="status" id="status" class="form-control" onchange="toggleDateTimePicker()">
                                        <option value="published">Published</option>
                                        <option value="draft">Draft</option>
                                        <option value="archived">Archived</option>
                                    </select>
                                </div>

                                <!-- DateTime Picker (Hanya muncul saat status draft) -->
                                <div class="form-group" id="datetime-container" style="display: none;">
                                    <label for="datetime">Schedule Upload</label>
                                    <input type="datetime-local" name="scheduled_at" id="datetime" class="form-control">
                                </div>

                                <!-- Upload Gambar -->
                                <div class="form-group">
                                    <label for="images">Upload Gambar</label>
                                    <input type="file" name="images[]" id="images" class="form-control" multiple accept="image/*">
                                    <small class="form-text text-muted">Pilih beberapa gambar untuk diunggah.</small>
                                </div>

                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </form>
                        </div>

                    </div>
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php
            include 'partials/footer.php';
            ?>
            <!-- End of Footer -->
        </div>
        <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <?php
    include 'partials/modal.php';
    ?>

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

    <script type="text/javascript">
        function toggleDateTimePicker() {
            const status = document.getElementById("status").value;
            const datetimeContainer = document.getElementById("datetime-container");

            if (status === "draft") {
                datetimeContainer.style.display = "block";
            } else {
                datetimeContainer.style.display = "none";
            }
        }

        window.onload = function() {
            toggleDateTimePicker();
        }
    </script>

    <?php
    include 'partials/script.php';
    ?>

</body>

</html>