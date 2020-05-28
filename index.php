<?php
include __DIR__ . '/partials/home/server-home.php';

// Head

include __DIR__ . '/partials/template/head.php';
?>


    
<main class="main-content container">
        <?php // header
        include __DIR__ . '/partials/template/header.php'
        ?>

    <section class="rooms_data container mt-5">
        <div class="row">
            <div class="rooms_data__title col-10 offset-1 mb-2">
                <h2>All Hotel Rooms</h2>
            </div>
        </div>
        <div class="row">
        <table class="table table-sm col-10 offset-1">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Number</th>
                    <th>Floor</th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php // loop room records
                    if(! empty($rooms) ) {
                        foreach($rooms as $room) { ?>

                            <tr>
                                <td><?php echo $room['id']; ?></td>
                                <td><?php echo $room['room_number']; ?></td>
                                <td><?php echo $room['floor']; ?></td>
                                <td>
                                    <a href="./show.php?id=<?php echo $room['id']; ?>"><button type="button" class="btn btn-primary">Info</button></a>
                                </td>
                                <td>
                                    <a href=""><button type="button" class="btn btn-success">Update</button></a>
                                </td>
                                <td>
                                    <a href=""><button type="button" class="btn btn-danger">Delete</button></a>
                                </td>
                            </tr>

                       <?php }
                    }
                ?>
            </tbody>
        </table>
        </div>
    </section>

</main>

<?php // footer
    include __DIR__ . '/partials/template/footer.php';
?>


    