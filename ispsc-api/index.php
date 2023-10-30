<?php

    include_once 'init.php';

    if (!Session::checkSession('isLoggedIn')) {
        header("Location: login.php");
    }

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ISPSC Control</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" type="text/css">
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" type="text/javascript"></script>
    <!-- JavaScript -->
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>


    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
</head>
<body>

    <div class="container py-5">

        <div class="row">
            <div class="col-md-3">
                <div class="d-flex justify-content-center">
                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Manage Announcements</button>
                        <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">Manange News</button>
                        <button class="nav-link"  type="button" role="tab" onclick="window.location='logout.php'">Logout</button>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab" tabindex="0">

                        <h3>Manage Announcements</h3>

                                <div class="table-responsive">
                                    <button type="button" class="btn btn-outline-success btn-sm" data-bs-toggle="modal" data-bs-target="#addAnnouncement">
                                        Add Announcement
                                    </button>

                                    <table class="table" id="announcement_table">
                                        <thead>
                                        <tr>
                                            <th scope="col">Announcement ID</th>
                                            <th scope="col">Announcement Content</th>
                                            <th scope="col">Date Announced</th>
                                            <th scope="col">Actions</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        $announcements_obj = new Announcements();
                                            $announcements = $announcements_obj->fetchAnnouncements();

                                        foreach ($announcements as $as):
                                        ?>
                                        <tr>
                                            <th scope="row"><?= $as['announcement_id'] ?></th>
                                            <td><?= $as['announcement_content'] ?></td>
                                            <td><?= $as['announcement_date'] ?></td>
                                            <td>
                                                <div class="btn-group" role="group" aria-label="Basic example">
                                                    <button type="button" data-id="<?= $as['announcement_id'] ?>" class="btn btn-primary edit_announcement">Edit</button>
                                                    <button type="button" data-id="<?= $as['announcement_id'] ?>" class="btn btn-danger delete_announcement">Delete</button>
                                                </div>
                                            </td>
                                        </tr>
                                        <?php
                                            endforeach;
                                        ?>
                                        </tbody>
                                    </table>
                                </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab" tabindex="0">

                        <h3>Manage News</h3>

                        <div class="table-responsive">
                            <button type="button" class="btn btn-outline-success btn-sm" data-bs-toggle="modal" data-bs-target="#addNews">
                                Add News
                            </button>
                            <table class="table" id="news_table">
                                <thead>
                                <tr>
                                    <th scope="col">News ID</th>
                                    <th scope="col">News Title</th>
                                    <th scope="col">News Content</th>
                                    <th scope="col">News Image</th>
                                    <th scope="col">Date Posted</th>
                                    <th scope="col">Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $news_obj = new News();
                                $newsArticles = $news_obj->fetchNews(); // Assuming you have a method to fetch news articles

                                foreach ($newsArticles as $news) :
                                    ?>
                                    <tr>
                                        <th scope="row"><?= $news['news_id'] ?></th>
                                        <td><?= $news['news_title'] ?></td>
                                        <td><?= $news['news_content'] ?></td>
                                        <td><img src="<?= $news['news_image'] ?>" width="200px"> </td>
                                        <td><?= $news['date_posted'] ?></td>
                                        <td>
                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                <button type="button" data-id="<?= $news['news_id'] ?>" class="btn btn-primary edit_news">Edit</button>
                                                <button type="button" data-id="<?= $news['news_id'] ?>" class="btn btn-danger delete_news">Delete</button>
                                            </div>
                                        </td>
                                    </tr>
                                <?php
                                endforeach;
                                ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
             </div>
        </div>
    </div>


    <div class="modal fade" id="addAnnouncement" tabindex="-1" aria-labelledby="addAnnouncement" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Set Announcement</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <form>
                        <label for="announcement_content">Enter announcement</label>
                        <div class="input-group mb-3">
                            <input type="hidden" id="announcement_id" name="announcement_id" >
                            <textarea id="announcement_content" name="announcement_content" rows="5" class="form-control" placeholder="Enter announcement"></textarea>
                        </div>

                        <div class="input-group mb-3">
                            <button type="button" id="save_announcement" name="save_announcement" class="btn btn-success">Save</button>
                        </div>
                    </form>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="addNews" tabindex="-1" aria-labelledby="addAnnouncement" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Set News</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <form>

                        <label for="news_title">News Title</label>
                        <div class="input-group mb-3">
                            <input type="text" name="news_title" id="news_title" placeholder="Enter News Title" class="form-control">
                        </div>

                         <label for="news_image">News Image</label>
                        <div class="input-group mb-3">
                            <input type="text" name="news_image" id="news_image" placeholder="Enter News Image (optional)" class="form-control" value="">
                        </div>

                        <label for="news_content">Enter announcement</label>
                        <div class="input-group mb-3">
                            <textarea id="news_content" name="news_content" rows="5" class="form-control" placeholder="Enter announcement"></textarea>
                        </div>

                        <div class="input-group mb-3">
                            <button type="button" id="save_news" name="save_news" class="btn btn-success">Save</button>
                        </div>
                    </form>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="editAnnouncement" tabindex="-1" aria-labelledby="addAnnouncement" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Announcement</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <form>
                        <label for="edit_announcement_content">Enter announcement</label>
                        <div class="input-group mb-3">
                            <input type="hidden" id="announcement_id" name="announcement_id">
                            <textarea id="edit_announcement_content" name="edit_announcement_content" rows="5" class="form-control" placeholder="Enter announcement"></textarea>
                        </div>

                        <div class="input-group mb-3">
                            <button type="button" id="save_announcement_edit" name="save_announcement_edit" class="btn btn-success">Save changes</button>
                        </div>
                    </form>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="editNews" tabindex="-1" aria-labelledby="addAnnouncement" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Edit News</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <form>

                        <label for="news_title">News Title</label>
                        <div class="input-group mb-3">
                            <input type="hidden" id="edit_news_id" name="edit_news_id">
                            <input type="text" name="edit_news_title" id="edit_news_title" placeholder="Enter News Title" class="form-control">
                        </div>

                        <label for="news_image">News Image</label>
                        <div class="input-group mb-3">
                            <input type="text" name="edit_news_image" id="edit_news_image" placeholder="Enter News Image (optional)" class="form-control">
                        </div>

                        <label for="news_content">Enter announcement</label>
                        <div class="input-group mb-3">
                            <textarea id="edit_news_content" name="edit_news_content" rows="5" class="form-control" placeholder="Enter announcement"></textarea>
                        </div>

                        <div class="input-group mb-3">
                            <button type="button" id="save_news_edit" name="save_news_edit" class="btn btn-success">Save</button>
                        </div>
                    </form>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

    <script>
    const announcement_datatable = new simpleDatatables.DataTable("#announcement_table")

    $(document).ready(function (){


        $("#save_announcement_edit").on('click', function (){
            let announcement_content = $("#edit_announcement_content").val();
            let id = $("#announcement_id").val();
            $.ajax({
                type: "POST",
                url: 'ajax.php',
                data: {action: "updateAnnouncement", id:id, announcement_content: announcement_content},
                success: function (res) {
                    if (res === "true") {
                        location.reload();
                    }
                }
            })
        })

        $("#save_news").on('click', function (){
            let news_content = $("#news_content").val();
            let news_title = $("#news_title").val();
            let news_image = $("#news_image").val();
            $.ajax({
                type: "POST",
                url: 'ajax.php',
                data: {action: "addNews",
                    news_content: news_content,
                    news_title: news_title,
                    news_image: news_image},
                success: function (res) {
                    if (res === "true") {
                        location.reload();
                    }
                }
            })
        })

        $("#save_news_edit").on('click', function (){
            let id = $("#edit_news_id").val();
            let news_content = $("#edit_news_content").val();
            let news_title = $("#edit_news_title").val();
            let news_image = $("#edit_news_image").val();
            $.ajax({
                type: "POST",
                url: 'ajax.php',
                data: {action: "updateNews", id:id, news_content: news_content, news_title: news_title, news_image: news_image},
                success: function (res) {
                    if (res === "true") {
                        location.reload();
                    }
                }
            })
        })


        $("#save_announcement").on('click', function (){
            let announcement_content = $("#announcement_content").val();
            $.ajax({
                type: "POST",
                url: 'ajax.php',
                data: {action: "addAnnouncement", announcement_content: announcement_content},
                success: function (res) {
                    if (res === "true") {
                        location.reload();
                    }
                }
            })
        })

        $(document).on('click', '.delete_announcement', function () {
            let id  = $(this).data('id');
            alertify.confirm('Are you sure?', function(){
                $.ajax({
                    type: 'POST',
                    url: 'ajax.php',
                    data: {action: 'deleteAnnouncement', id: id},
                    success: function (res) {
                        if (res === "true") {
                            alertify.success("Deleted Successfully");
                            setTimeout(function() {
                                location.reload();
                            }, 2000);
                        }
                    }
                })
            }, function(){ alertify.error('Cancel')});
        });
        $(document).on('click', '.delete_news', function () {
            let id  = $(this).data('id');
            alertify.confirm('Are you sure?', function(){
                $.ajax({
                    type: 'POST',
                    url: 'ajax.php',
                    data: {action: 'deleteNews', id: id},
                    success: function (res) {
                        if (res === "true") {
                            alertify.success("Deleted Successfully");
                            setTimeout(function() {
                                location.reload();
                            }, 2000);
                        }
                    }
                })
            }, function(){ alertify.error('Cancel')});
        });

        $(document).on('click', '.edit_announcement', function (){
            let id  = $(this).data('id');
            var modal = new bootstrap.Modal(document.getElementById('editAnnouncement'));

            $.ajax({
                type: "POST",
                url: 'ajax.php',
                data: {action: 'fetchAnnouncementById', id: id},
                success: function (res) {
                    var data = JSON.parse(res);
                    $("#edit_announcement_content").val(data.announcement_content)
                    $("#announcement_id").val(id)
                }
            })

            modal.show()

        })

        $(document).on('click', '.edit_news', function (){
            let id  = $(this).data('id');
            var modal = new bootstrap.Modal(document.getElementById('editNews'));

            $.ajax({
                type: "POST",
                url: 'ajax.php',
                data: {action: 'fetchNewsById', id: id},
                success: function (res) {
                    var data = JSON.parse(res);
                    $("#edit_news_content").val(data.news_content)
                    $("#edit_news_title").val(data.news_title)
                    $("#edit_news_image").val(data.news_image)
                    $("#edit_news_id").val(id)
                }
            })

            modal.show()

        })

    });
</script>
</body>
</html>