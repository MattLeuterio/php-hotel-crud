<?php
include __DIR__ . '/partials/booking/server-booking.php';

// Head

include __DIR__ . '/partials/template/head.php';
?>
    

<?php // header
include __DIR__ . '/partials/template/header.php'
?>


    <section class="rooms_data container mt-5">
        <div class="row">
            <div class="rooms_data__title col-10 offset-1 mb-2">
                <h2>All Bookings</h2>
            </div>
        </div>
        <div class="row">
        <table class="table table-striped  table-sm col-10 offset-1">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Room ID</th>
                    <th>Configuration</th>
                    <th>Created</th>
                    <th>Updated</th>
                </tr>
            </thead>
            <tbody>
                <?php // loop room records
                    if(! empty($bookings) ) {
                        foreach($bookings as $b) { ?>

                            <tr>
                                <td><?php echo $b['id']; ?></td>
                                <td><?php echo $b['stanza_id']; ?></td>
                                <td><?php echo $b['configurazione_id']; ?></td>
                                <td><?php echo $b['created_at']; ?></td>
                                <td><?php echo $b['updated_at']; ?></td>
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


    