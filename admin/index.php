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
                            <h6 class="m-0 font-weight-bold text-primary">Artikel</h6>
                            <a href="tambah.php" class="btn btn-sm btn-primary"><i class="fas fa-plus"></i> Tambah</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr class="text-center">
                                            <th>#</th>
                                            <th>Judul</th>
                                            <th>Konten</th>
                                            <th>Status</th>
                                            <th>Jadwal</th>
                                            <th>Aksi</th>
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
                        "data": "content"
                    },
                    {
                        "data": "status",
                        "class": "text-center",
                        "render": function(data, type, row) {
                            if (data == "published") {
                                return '<span class="badge badge-success">' + "Published" + '</span>';
                            } else if (data == "archived") {
                                return '<span class="badge badge-danger">' + "Archived" + '</span>';
                            } else if (data == "draft") {
                                return '<span class="badge badge-warning">' + "Draft" + '</span>';
                            }

                        }
                    },
                    {
                        // "data": "scheduled_at",
                        "class": "text-center",
                        "render": function(data, type, row) {
                            if (row.status == "published") {
                                return '-';
                            } else if (row.status == "archived") {
                                return '-';
                            }else {
                                return row.scheduled_at;
                            }
                        }
                    },
                    {
                        "data": null,
                        "class": "text-center",
                        "render": function(data, type, row) {
                            return `
                                <div class="dropdown">
                                    <button class="btn btn-sm btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-bars"></i>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="edit.php?id=${row.id}">
                                            <i class="fas fa-edit"></i> Edit
                                        </a>
                                        <a class="dropdown-item" href="delete.php?id=${row.id}" onclick="return confirm('Apakah anda yakin untuk mengarsipkan artikel?');">
                                            <i class="fas fa-archive"></i> Archive
                                        </a>
                                    </div>
                                </div>
                            `;
                        }
                    }

                ]
            });
        });
    </script>

</body>

</html>