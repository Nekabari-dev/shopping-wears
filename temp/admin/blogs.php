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
                                
                                <th>Author</th>
                                <th>Title</th>
                                <th>Status</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                           

                                    <tr>
                                        <td>#1</td>
                                        <td>test</td>
                                        <td>Poco</td>
                                        <!-- <td><?php echo $content; ?></td> -->
                                        <td>Poco</td>
                                        <td>
                                            <button value="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#edit-modal">
                                                <i class="bx bx-pencil"></i>
                                            </button>
                                        </td>
                                        <td>
                                            <button value="#" class="btn btn-danger delete-btn">
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
                                                            <label class="form-label">Author</label>
                                                            <input type="text" name="name" class="form-control" value="<?php echo htmlspecialchars($name); ?>" required />
                                                        </div>


                                                        <div class="form-group my-2">
                                                            <label class="form-label">Blog Title</label>
                                                            <input type="text" name="title" class="form-control" value="<?php echo htmlspecialchars($title); ?>" required />
                                                        </div>

                                                        <div class="form-group my-2">
                                                            <label class="form-label">Content</label>
                                                            <textarea id="content-<?php echo $id; ?>" name="content" class="form-control" required><?php echo htmlspecialchars($content); ?></textarea>
                                                        </div>
                                                        <div class="form-group my-2">
                                                            <label class="form-label">Image</label>
                                                            <input type="file" name="image" class="form-control" />
                                                            <?php if ($image) { ?>
                                                                <img src="../uploads/<?php echo $image; ?>" alt="Current Image" class="img-fluid mt-2" />
                                                            <?php } ?>
                                                        </div>

                                                        <div class="form-group my-2">
                                                            <label class="form-label">
                                                                Category
                                                            </label>
                                                            <select name="category_id" class="form-select">
                                                                <?php
                                                                $query = "SELECT id, name FROM blog_categories";
                                                                $result = mysqli_query($conn, $query);

                                                                while ($row = mysqli_fetch_assoc($result)) {
                                                                    echo '<option value="' . $row['id'] . '">' . $row['name'] . '</option>';
                                                                }
                                                                ?>
                                                            </select>
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
                    <div class="form-group my-2">
                        <label class="form-label">Author</label>
                        <input type="text" name="name" class="form-control" required />
                    </div>

                    <div class="form-group my-2">
                        <label class="form-label">Blog Title</label>
                        <input type="text" name="title" class="form-control" required />
                    </div>
                    <div class="form-group my-2">
                        <label class="form-label">Content</label>
                        <textarea id="content" name="content" class="form-control" required></textarea>
                    </div>
                    <div class="form-group my-2">
                        <label class="form-label">Thumbnail</label>
                        <input type="file" name="image" class="form-control" />
                    </div>

                    <div class="form-group my-2">
                        <label class="form-label">
                            Category
                        </label>
                        <select name="category_id" class="form-select">
                            <?php
                            $query = "SELECT id, name FROM blog_categories";
                            $result = mysqli_query($conn, $query);

                            while ($row = mysqli_fetch_assoc($result)) {
                                echo '<option value="' . $row['id'] . '">' . $row['name'] . '</option>';
                            }
                            ?>
                        </select>
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
require "footer.php";
?>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        new FroalaEditor('#content', {
            events: {
                'initialized': function() {
                    console.log('Froala Editor initialized for Create Blog Modal');
                },
                'image.uploaded': function(response) {
                    console.log('Image uploaded successfully', response);
                },
                'image.error': function(error) {
                    console.log('Image upload error', error);
                }
            },
            imageUploadURL: 'upload.php',
            imageUploadParams: {
                id: 'content'
            },
            imageUploadMethod: 'POST',
            imageMaxSize: 5 * 1024 * 1024,
            imageAllowedTypes: ['jpeg', 'jpg', 'png', 'gif'],
            imageUploadToS3: false,
            toolbarButtons: ['undo', 'redo', '|', 'bold', 'italic', 'underline', '|', 'image', 'link', '|', 'alignLeft', 'alignCenter', 'alignRight', 'alignJustify', '|', 'formatOL', 'formatUL', 'outdent', 'indent', '|', 'clearFormatting', 'print', 'spellChecker']
        });

        document.querySelectorAll('[id^="content-"]').forEach(textarea => {
            new FroalaEditor(`#${textarea.id}`, {
                events: {
                    'initialized': function() {
                        console.log(`Froala Editor initialized for Edit Blog Modal with ID: ${textarea.id}`);
                    },
                    'image.uploaded': function(response) {
                        console.log('Image uploaded successfully', response);
                    },
                    'image.error': function(error) {
                        console.log('Image upload error', error);
                    }
                },
                imageUploadURL: 'upload.php',
                imageUploadParams: {
                    id: textarea.id
                },
                imageUploadMethod: 'POST',
                imageMaxSize: 5 * 1024 * 1024,
                imageAllowedTypes: ['jpeg', 'jpg', 'png', 'gif'],
                imageUploadToS3: false,
                toolbarButtons: ['undo', 'redo', '|', 'bold', 'italic', 'underline', '|', 'image', 'link', '|', 'alignLeft', 'alignCenter', 'alignRight', 'alignJustify', '|', 'formatOL', 'formatUL', 'outdent', 'indent', '|', 'clearFormatting', 'print', 'spellChecker']
            });
        });

        <?php
        $get_blogs = mysqli_query($conn, "SELECT id FROM blogs");
        while ($blog = mysqli_fetch_assoc($get_blogs)) {
            $id = $blog['id'];
            echo "new FroalaEditor('#content-$id', {
            events: {
                'initialized': function () {
                    console.log('Froala Editor initialized for Edit Modal with ID $id');
                }
            }
        });";
        }
        ?>
    });

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
                        location.replace('blogs');
                    });
            },
            error: function() {
                swal('Oops', 'An error occurred while deleting', 'error');
            }
        });
    }
</script>