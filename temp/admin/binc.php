<?php


require "header.php";


?>

<div class="row">
    <div class="col-12">
        <div class="card bg-white">
            <div class="card-header h3 text-dark">
                Blogs
                <button class="float-end btn btn-primary" data-bs-toggle="modal" data-bs-target="#create-modal">
                    + Create Blog
                </button>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table" id="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Content</th>
                                <th>Status</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $get_blogs = mysqli_query($conn, "SELECT * FROM blogs ORDER BY id DESC");
                            if (mysqli_num_rows($get_blogs) > 0) {
                                while ($blog = mysqli_fetch_assoc($get_blogs)) {
                                    $id = $blog['id'];
                                    $title = $blog['title'];
                                    $content = $blog['content'];
                                    $image = $blog['image'];
                                    $status = $blog['status'];
                            ?>

                                    <tr>
                                        <td><?php echo $id; ?></td>
                                        <td><?php echo $title; ?></td>
                                        <td><?php echo $content; ?></td>
                                        <td><?php echo $status; ?></td>
                                        <td>
                                            <button value="<?php echo $id; ?>" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#edit-modal-<?php echo $id; ?>">
                                                <i class="bx bx-pencil"></i>
                                            </button>
                                        </td>
                                        <td>
                                            <button value="<?php echo $id; ?>" class="btn btn-danger delete-btn" onclick="confirmDelete(<?php echo $id; ?>)">
                                                <i class="bx bx-trash"></i>
                                            </button>
                                        </td>
                                    </tr>

                                    <!-- Edit Modal -->
                                    <div class="modal fade" id="edit-modal-<?php echo $id; ?>">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header h3 text-dark">
                                                    Edit Blog
                                                    <button class="btn btn-close" data-bs-dismiss="modal"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" enctype="multipart/form-data">
                                                        <input type="hidden" name="id" value="<?php echo $id; ?>" />
                                                        <div class="form-group my-2">
                                                            <label class="form-label">Blog Title</label>
                                                            <input type="text" name="title" class="form-control" value="<?php echo $title; ?>" required />
                                                        </div>

                                                        <div class="form-group my-2">
                                                            <label class="form-label">Content</label>
                                                            <textarea id="content" name="content" class="form-control" required><?php echo htmlspecialchars($content); ?></textarea>
                                                        </div>
                                                        <div class="form-group my-2">
                                                            <label class="form-label">Image</label>
                                                            <input type="file" name="image" class="form-control" />
                                                            <?php if ($image) { ?>
                                                                <img src="../uploads/<?php echo $image; ?>" alt="Current Image" class="img-fluid mt-2" />
                                                            <?php } ?>
                                                        </div>
                                                        <div class="form-group my-2">
                                                            <label class="form-label">Status</label>
                                                            <select name="status" class="form-select">
                                                                <option value="draft" <?php if ($status == "draft") {
                                                                                            echo "selected";
                                                                                        } ?>>Draft</option>
                                                                <option value="published" <?php if ($status == "published") {
                                                                                                echo "selected";
                                                                                            } ?>>Published</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group m-3">
                                                            <button name="edit" class="btn btn-primary">Edit Blog</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                            <?php
                                }
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Create Modal -->
<div class="modal fade" id="create-modal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header h3 text-dark">
                Create Blog
                <button class="btn btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form method="post" enctype="multipart/form-data">
                    <input type="hidden" id="hidden-content" name="content" />
                    <div class="form-group my-2">
                        <label class="form-label">Blog Title</label>
                        <input type="text" name="title" class="form-control" required />
                    </div>
                    <div class="form-group my-2">
                        <label class="form-label">Content</label>
                        <textarea id="content" name="content" class="form-control" required></textarea>
                    </div>

                    <div class="form-group my-2">
                        <label class="form-label">Status</label>
                        <select name="status" class="form-select">
                            <option value="draft">Draft</option>
                            <option value="published">Published</option>
                        </select>
                    </div>
                    <div class="form-group m-3">
                        <button name="create" class="btn btn-primary">Create Blog</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require "footer.php";

if (isset($_POST['edit'])) {
    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $content = mysqli_real_escape_string($conn, $_POST['content']);
    $status = mysqli_real_escape_string($conn, $_POST['status']);

    $slug = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $title), '-'));

    $image_name = $_FILES['image']['name'];
    if ($image_name) {
        $image_tmp = $_FILES['image']['tmp_name'];
        $unique_image_name = uniqid() . '-' . basename($image_name);
        $target_dir = "../uploads/";
        $target_file = $target_dir . $unique_image_name;
        move_uploaded_file($image_tmp, $target_file);
    }

    $update_query = "UPDATE blogs SET title='$title', content='$content', status='$status', slug='$slug'";
    if ($image_name) {
        $update_query .= ", image='$unique_image_name'";
    }
    $update_query .= " WHERE id='$id'";

    $update = mysqli_query($conn, $update_query);
    if ($update) {
?>
        <script>
            Swal.fire('Great', 'Blog updated', 'success')
                .then(() => {
                    location.replace('blogs');
                });
        </script>
    <?php
    } else {
    ?>
        <script>
            Swal.fire('Oops', 'An error occurred', 'error');
        </script>
<?php
    }
}

if (isset($_POST['create'])) {
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $content = mysqli_real_escape_string($conn, $_POST['content']);
    $status = mysqli_real_escape_string($conn, $_POST['status']);

    $slug = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $title), '-'));

    $image_name = $_FILES['image']['name'];
    if ($image_name) {
        $image_tmp = $_FILES['image']['tmp_name'];
        $unique_image_name = uniqid() . '-' . basename($image_name);
        $target_dir = "../uploads/";
        $target_file = $target_dir . $unique_image_name;
        move_uploaded_file($image_tmp, $target_file);
    }

    $insert_query = "INSERT INTO blogs (title, content, status, slug" . ($image_name ? ", image" : "") . ") VALUES ('$title', '$content', '$status', '$slug'" . ($image_name ? ", '$unique_image_name'" : "") . ")";

    $insert = mysqli_query($conn, $insert_query);

    if ($insert) {
        echo "<script>
            Swal.fire('Great', 'Blog created', 'success')
            .then(() => {
                location.replace('blogs');
            });
        </script>";
    } else {
        echo "<script>
            Swal.fire('Oops', 'An error occurred', 'error');
        </script>";
    }
}

?>

<script src="https://cdn.tiny.cloud/1/i22tdlr7im2hw09t8ierwwshh463aut8p1gnc58wai95u18g/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

<script>
    tinymce.init({
        selector: 'textarea#content',
        plugins: 'image code',
        toolbar: 'undo redo | link image | code',
        automatic_uploads: true,
        file_picker_types: 'image',
        images_upload_handler: function(blobInfo, success, failure) {
            const formData = new FormData();
            formData.append('file', blobInfo.blob(), blobInfo.filename());

            fetch('upload.php', {
                method: 'POST',
                body: formData
            }).then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                return response.json();
            }).then(result => {
                if (result && result.location) {
                    success(result.location);
                } else {
                    failure('Image upload failed.');
                }
            }).catch(error => {
                failure('Image upload failed: ' + error.message);
            });
        },
        setup: function(editor) {
            editor.on('change', function() {
                editor.save();
            });
        }
    });

    document.querySelector('form').addEventListener('submit', function(event) {
        var content = tinymce.get('content').getContent();
        document.getElementById('hidden-content').value = content;
    });
</script>




<script>
    function confirmDelete(id) {
        swal({
                title: "Are you sure?",
                text: "Once deleted, you will not be able to recover this Post!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    deletePackage(id);
                }
            });
    }

    function deletePackage(id) {
        $.ajax({
            type: 'POST',
            url: 'db.php',
            data: {
                delete: true,
                id: id
            },
            success: function(response) {
                swal('Great', 'Post Deleted', 'success')
                    .then(() => {
                        location.replace('blogs')
                    });
            },
            error: function() {
                swal('Oops', 'An error occurred while deleting', 'error');
            }
        });
    }
</script>