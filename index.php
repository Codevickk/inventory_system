<?php require_once('header.php') ?>

<?php 

require_once 'config/Database.php';
require_once 'models/Computer.php';

$database = new Database();
$conn = $database->getConnection();
$computer = new Computer($conn);

$page = isset($_GET['page']) ? $_GET['page'] :  1;
$records_per_page = 20;
$from_record_num = ($records_per_page * $page) - $records_per_page;

$computers = $computer->readAll($from_record_num, $records_per_page);

?>
      <div class="main">
        <section class="computers">
            <div class="add-btn-container  text-right">
                <button type="button" class="btn btn-primary add-btn" data-toggle="modal" data-target="#addInventoryModal" data-backdrop="static" data-keyboard="false">Add New <i class="fas fa-plus"></i></button>
            </div>
            <hr>
            <div class="computers-table-container table-responsive">
                <table class="table table-hover table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Item</th>
                            <th scope="col">Type</th>
                            <th scope="col">Model</th>
                            <th scope="col">Serial No</th>
                            <th scope="col">Location(campus)</th>
                            <th scope="col">Housing</th>
                            <th scope="col">Captured Date <br> (yyyy-mm-dd)</th>
                            <th scope="col">Relocation Date <br> (yyyy-mm-dd)</th>
                            <th scope="col">New Location</th>
                            <th scope="col">New Housing</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                      <?php 
                      $sn = 1;
                      while($row = $computers->fetch(PDO::FETCH_ASSOC)):?>
                        <tr id="<?php echo $row['computer_id'] ?>">
                            <th scope="row"><?php echo $sn ?></th>
                            <td><?php echo $row['item']; ?></td>
                            <td><?php echo $row['type']; ?></td>
                            <td><?php echo $row['model'] ?></td>
                            <td><?php echo $row['serial_no'] ?></td>
                            <td><?php echo $row['campus'] ?></td>
                            <td><?php echo $row['housing'] ?></td>
                            <td><?php echo  $row['cap_date'] ?></td>
                            <td><?php echo  $row['relo_date'] ?></td>
                            <td><?php echo $row['new_location'] ?></td>
                            <td><?php echo $row['new_housing'] ?></td>
                            <td>

                              <button 
                                class="btn btn-secondary mr-1" 
                                data-toggle="modal" 
                                data-target="#editInventoryModal" 
                                data-backdrop="static" 
                                data-keyboard="false"
                                data-computer_id="<?php  echo $row['computer_id']?>"
                                data-item="<?php echo $row['item']?>"
                                data-type="<?php echo $row['type']?>"
                                data-model="<?php echo $row['model']?>"
                                data-serial_no="<?php echo $row['serial_no']?>"
                                data-campus="<?php echo $row['campus']?>"
                                data-housing="<?php echo $row['housing']?>"
                                data-cap_date="<?php echo $row['cap_date']?>"
                                data-relo_date="<?php echo $row['relo_date']?>"
                                data-new_location="<?php echo $row['new_location']?>"
                                data-new_housing="<?php echo $row['new_housing']?>"
                                >
                                Edit <i class="fas fa-pen"></i>
                              </button>
                              <button class="btn btn-danger deleteInventory"> Delete <i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                      <?php $sn++; endwhile; ?>
                    </tbody>
                </table>
            </div>
        </section>
        <?php $total_rows = $computer->countAll(); ?>

        <?php  include('paging.php'); ?>
      </div>


<!--  MODALS  -->
<?php  include 'addModal.php'; ?>
<?php include 'editModal.php'; ?>
<!-- ./MODALS -->


<?php require_once('footer.php') ?>