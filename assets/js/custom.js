$(document).ready(function() {

	/*******  ADD INVENTORY FUNCTION  *****/
	$('#submitAddInventory').on('click', function(e) {
        e.preventDefault();
        $(this).attr('disabled', true);
        $(this).html("<i class='fas fa-spinner'></i>")
        var data = $('#addInventoryForm').serialize();

		// Process the form
		$.ajax({
			url: 'apis/add.php',
			method: 'POST',
			data: data,
			success: function(res) {
				res = JSON.parse(res);
				success = res['status'];
				if (success) {
					// res['msg] would be a string here
					alert(res['msg']);
					window.location.href = 'index.php';
				} else {
					// res['msg] would be an array here
					$.each(res['msg'], function(index, message) {
						alert(message);
					});
				}
			},
			error: function() {
				alert('An error occured, try again later');
			}
		});
    });
    

/* EDIT INVENTORY FORM INIT */
$('#editInventoryModal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget) // Button that triggered the modal
    // Extract info from data-* attributes
    var computerID = button.data('computer_id');
    var item = button.data('item');
    var type = button.data('type');
    var model = button.data('model');
    var serialNo = button.data('serial_no');
    var campus = button.data('campus');
    var housing = button.data('housing');
    var capDate = button.data('cap_date');    
    var reloDate = button.data('relo_date');    
    var newLocation = button.data('new_location');    
    var newHousing = button.data('new_housing');    

    // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
    // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
    var modal = $(this);
    modal.find('#computerID').val(computerID);
    modal.find('#item').val(item);
    modal.find('#type').val(type);
    modal.find('#model').val(model);
    modal.find('#serialNo').val(serialNo);    
    modal.find('#campus').val(campus);    
    modal.find('#housing').val(housing);    
    modal.find('#capDate').val(capDate);    
    modal.find('#reloDate').val(reloDate);    
    modal.find('#newLocation').val(newLocation);    
    modal.find('#newHousing').val(newHousing);    


  })

/*******  EDIT INVENTORY FUNCTION  *****/
$('#submitEditInventory').on('click', function(e) {
    e.preventDefault();
    $(this).attr('disabled', true);
    $(this).html("<i class='fas fa-spinner'></i>")
    var data = $('#editInventoryForm').serialize();

    // Process the form
    $.ajax({
        url: 'apis/edit.php',
        method: 'POST',
        data: data,
        success: function(res) {
            res = JSON.parse(res);
            success = res['status'];
            if (success) {
                // res['msg] would be a string here
                alert(res['msg']);
                window.location.href = 'index.php';
            } else {
                // res['msg] would be an array here
                $.each(res['msg'], function(index, message) {
                    alert(message);
                });
            }
        },
        error: function() {
            alert('An error occured, try again later');
        }
    });
});


/*******  DELETE INVENTORY FUNCTION  *****/
$('.deleteInventory').on('click', function(e) {
    e.preventDefault();

    if(confirm("Are you sure you want to delete this record?")){
    var computerID = $(this).parents("tr").attr("id");
    data = "computerID=" + computerID;
    // Process the form
    $.ajax({
        url: 'apis/delete.php',
        method: 'POST',
        data: data,
        success: function(res) {
            res = JSON.parse(res);
            success = res['status'];
            if (success) {
                // res['msg] would be a string here
                alert(res['msg']);
                window.location.href = 'index.php';
            } else {
                // res['msg] would be an array here
                $.each(res['msg'], function(index, message) {
                    alert(message);
                });
            }
        },
        error: function() {
            alert('An error occured, try again later');
        }
    });
}
});


});
