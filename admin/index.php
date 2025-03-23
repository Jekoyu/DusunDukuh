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
                    <div class="card shadow  mb-4">
                        <div class="card-header py-3 d-flex justify-content-between align-items-center">
                            <h6 class="m-0 font-weight-bold text-primary">Artikel</h6>
                            <a href="tambah.php" class="btn btn-sm btn-primary"><i class="fas fa-plus"></i> Tambah</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <div class="form-group row">
                                    <label for="statusFilter" class="col-sm-2 col-form-label">Filter Status</label>
                                    <div class="col-sm-2">
                                        <select id="statusFilter" class="form-control form-control-sm">
                                            <option value="">All</option>
                                            <option value="published">Published</option>
                                            <option value="draft">Draft</option>
                                            <option value="archived">Archived</option>
                                        </select>
                                    </div>
                                </div>

                                <table class="table table-bordered table-stiped" id="dataTable" width="100%" cellspacing="0">
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
            var table = $('#dataTable').DataTable({
                "ajax": "data.php",
                "columns": [{
                        "data": null,
                        "render": function(data, type, row, meta) {
                            return meta.row + 1 + table.page.info().start;
                        }
                    },
                    {
                        "data": "title"
                    },
                    {
                        "data": "content",
                        "render": function(data, type, row) {
                            var words = data.split(' ');
                            var truncatedContent = words.slice(0, 5).join(' ') + (words.length > 5 ? '...' : '');
                            return truncatedContent;
                        }
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
                        "data": "scheduled_at",
                        "class": "text-center",
                        "render": function(data, type, row) {
                            if (row.status == "published" || row.status == "archived") {
                                return '-';
                            } else {
                                const date = new Date(data);
                                const options = {
                                    weekday: 'long',
                                    day: 'numeric',
                                    month: 'long',
                                    year: 'numeric'
                                };
                                return new Intl.DateTimeFormat('id-ID', options).format(date);
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
                    },
                    {
                        "data": "created_at",
                        "visible": false
                    }
                ],
                "order": [
                    [6, 'desc']
                ]
            });

            $('#statusFilter').on('change', function() {
                var statusFilter = $(this).val();
                if (statusFilter) {
                    table.column(3).search(statusFilter).draw(); 
                } else {
                    table.column(3).search('').draw();
                }
            });
        });
    </script>

</body>

</html>