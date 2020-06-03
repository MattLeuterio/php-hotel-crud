<?php
include __DIR__ . '/partials/home/server-home.php';

// Head

include __DIR__ . '/partials/template/head.php';
?>
    

<?php // header
include __DIR__ . '/partials/template/header.php'
?>

<?php //allerts
if( !empty($_GET['del']) ) { ?>

    <div class="alert alert-success">
        Stanza cancellata con successo
    </div>

<?php } ?>

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
                                    <a class="text-primary" href="./show.php?id=<?php echo $room['id']; ?>">
                                        Info
                                    </a>
                                </td>
                                <td>
                                    <a class="text-success" href="./edit.php?id=<?php echo $room['id']; ?>">
                                    Update</a>
                                </td>
                                <td>
                                    <form action="./partials/delete/server-delete.php"
                                        method="POST">
                                        <input type="hidden" name="id" value="<?php echo $room['id']?>">
                                        <input class="btn btn-danger" type="submit" value="Delete">
                                    </form>
                                </td>
                            </tr>

                       <?php }
                    }
                ?>
            </tbody>
        </table>
        </div>
    </section>



<?php // footer
    include __DIR__ . '/partials/template/footer.php';
?>


    