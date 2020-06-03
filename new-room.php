<?php
//get room details
//include_once __DIR__ . '/partials/create/server-create.php';

// Head

include __DIR__ . '/partials/template/head.php';
?>
    

<?php // header
include __DIR__ . '/partials/template/header.php'
?>

    <section class="room_data container mt-5">
        <div class="row">
            <div class="rooms_data__title col-10 offset-1 mb-2">
                <h2>Add New Room</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-10 offset-1 mb-2 p-0">
            <form action="./partials/create/server-create.php" method="POST">
                <div class="form-group">
                    <label for="room_number">Room number</label>
                    <input class="form-control" type="number"
                    name="room_number" id="room_number" 
                    placeholder="Insert room number">
                </div>
                <div class="form-group">
                    <label for="beds">Beds</label>
                    <input class="form-control" type="number"
                    name="beds" id="beds" 
                    placeholder="Insert number of beds">
                </div>
                <div class="form-group">
                    <label for="floor">Floor</label>
                    <input class="form-control" type="number"
                    name="floor" id="floor" 
                    placeholder="Insert floor">
                </div>
                <div class="form-group text-right">
                    <input class="btn btn-primary" type="submit" value="Create">
                </div>
            </form>
            </div> 
            
        </div>       
    </section>
</main>

<?php // footer
    include __DIR__ . '/partials/template/footer.php';
?>


    