<?php
include '../conn.php';

date_default_timezone_set('Asia/Jakarta');


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $section_1 = $_POST['section_1'];
    $section_2 = $_POST['section_2'];
    $section_3 = $_POST['section_3'];
    $section_4 = $_POST['section_4'];
    $section_5 = $_POST['section_5'];
    $time = date('Y-m-d H:i:s', time());
    

    try {
        $stmt = $conn->prepare("INSERT INTO Artikel (title, section_1, section_2, section_3, section_4, section_5, created_at, updated_at) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
        if ($stmt === false) {
            die("Prepare failed: " . htmlspecialchars($conn->error));
        }
        $stmt->bind_param('ssssssss', $title, $section_1, $section_2, $section_3, $section_4, $section_5, $time, $time);

        if ($stmt->execute()) {
            header("Location: index.php");
            exit();
        } else {
            echo "Error: " . htmlspecialchars($stmt->error);
        }
    } catch (Exception $e) {
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
                            <form id="addForm" action="" method="post">
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" class="form-control" id="title" name="title" required>
                                </div>
                                <div class="form-group">
                                    <label for="section_1">Content</label>
                                    <textarea name="section_1" class="form-control" rows="15" placeholder="Section 1"></textarea>
                                </div>

                                <!-- <div class="form-group">
                                    <label for="section_2">Section 2</label>
                                    <textarea name="section_2" class="form-control" rows="15" placeholder="Section 2...."></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="section_3">Section 3</label>
                                    <textarea name="section_3" class="form-control" rows="15" placeholder="Section 3...."></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="section_4">Section 4</label>
                                    <textarea name="section_4" class="form-control" rows="15" placeholder="Section 4...."></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="section_5">Section 5</label>
                                    <textarea name="section_5" class="form-control" rows="15" placeholder="Section 5...."></textarea>
                                </div> -->
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

    <?php
    include 'partials/script.php';
    ?>

</body>

</html>