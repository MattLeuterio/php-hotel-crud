<?php
//get room details
include_once __DIR__ . '/partials/update/server-edit.php';

// Head

include __DIR__ . '/partials/template/head.php';
?>

<?php //allerts
if( !empty($_GET['del']) ) { ?>

    <div class="alert alert-success">
        Stanza cancellata con successo
    </div>

<?php } ?>
    

<?php // header
include __DIR__ . '/partials/template/header.php'
?>

    <section class="room_data container mt-5">
        <div class="row">
            <div class="rooms_data__title col-10 offset-1 mb-2">
                <h2>Edit Room</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-10 offset-1 mb-2 p-0">
            <form action="./partials/update/server-update.php" method="post">
                <div class="form-group">
                    <label for="room_number">Room number</label>
                    <input class="form-control" type="number"
                    name="room_number" id="room_number" 
                    value="<?php echo $room['room_number']; ?>">
                </div>
                <div class="form-group">
                    <label for="beds">Beds</label>
                    <input class="form-control" type="number"
                    name="beds" id="beds" 
                    value="<?php echo $room['beds']; ?>">
                </div>
                <div class="form-group">
                    <label for="floor">Floor</label>
                    <input class="form-control" type="number"
                    name="floor" id="floor" 
                    value="<?php echo $room['floor']; ?>">
                </div>
                <div class="form-group text-right">
                    <input type="hidden" name="id" 
                    value="<?php echo $room['id']; ?>">
                    <input class="btn btn-primary" type="submit" value="Save">
                </div>
            </form>
            </div> 
            
        </div>       
    </section>
</main>

<?php // footer
    include __DIR__ . '/partials/template/footer.php';
?>


    