<?php
include __DIR__ . '/partials/show/server-show.php';

// Head

include __DIR__ . '/partials/template/head.php';
?>


<?php // header
include __DIR__ . '/partials/template/header.php'
?>

    <section class="room_data container mt-5">
        <div class="row">
            <div class="rooms_data__title col-10 offset-1 mb-2">
                <h2>Info room <?php echo $room['room_number']; ?></h2>
            </div>
        </div>
        <div class="row">
            <div class="card col-4 offset-1">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item d-flex justify-content-between">
                        <span class="title-item-list">ID:</span> <span><?php echo $room['id']; ?></span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between">
                        <span class="title-item-list">Room Number:</span> <span><?php echo $room['room_number']; ?></span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between">
                        <span class="title-item-list">Beds:</span> <span><?php echo $room['beds']; ?></span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between">
                        <span class="title-item-list">Floor:</span> <span><?php echo $room['floor']; ?></span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row mt-4">
            <div class="btn-backHome col-10 offset-1 mb-2">
                <a class="btn btn-primary" href="./" role="button">&lt; Home</a>
                <a class="btn btn-success border-0"" href="./edit.php?id=<?php echo $room['id']; ?>" role="button"> Update</a>
            </div>
        </div>
        
    </section>

</main>

<?php // footer
    include __DIR__ . '/partials/template/footer.php';
?>