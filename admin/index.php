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

                    <div class="card shadow mb-4">
                        <div class="card-header py-3 d-flex justify-content-between align-items-center">
                            <h6 class="m-0 font-weight-bold text-primary">Menu</h6>
                            <a href="tambah.php" class="btn btn-sm btn-primary"><i class="fas fa-plus"></i> Tambah Menu</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Title</th>
                                            <th>Updated At</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
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

    <?php
    include 'partials/script.php';
    ?>
    <script>
        $(document).ready(function() {
            $('#dataTable').DataTable({
                "ajax": "data.php",
                "columns": [{
                        "data": null,
                        "render": function(data, type, row, meta) {
                            return meta.row + 1;
                        }
                    },
                    {
                        "data": "title"
                    },
                    {
                        "data": "updated_at"
                    },
                    {
                        "data": null,
                        "render": function(data, type, row) {
                            return '<a href="edit.php?id=' + row.id + '" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a> '
                            // '<a href="delete.php?id=' + row.id + '" class="btn btn-sm btn-danger" onclick="return confirm(\'Are you sure you want to delete this item?\');"><i class="fas fa-trash"></i></a>';
                            //'<a href="#" class="btn btn-sm btn-danger" onclick="return confirm(\'Are you sure you want to delete this item?\');"><i class="fas fa-trash"></i></a>';

                        }
                    }
                ]
            });
        });
    </script>

</body>

</html>