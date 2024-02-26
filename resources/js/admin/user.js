// import axios from "axios";

$(function () {
    $("#example1").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false
    });


    $(".custom-control-input, .role-select").change(function(){
        let trElement = $(this).closest('tr');
        let isActive = $(trElement).find('.custom-control-input').prop('checked');
        let role = $(trElement).find('.role-select').find("option:selected").val();

        axios.post('/admin/user/' + trElement.data('id'), {
            'is_active': isActive,
            'role': role,
        }, {
            headers: {
                "X-Requested-With": "XMLHttpRequest",
            },
        }).then(response => {
            $('#user-status-' + response.data.user_id).text(response.data.is_active);
            toastr.success('User was updated');
        }).catch(error => {
            if (error.response.status === 422) {
                toastr.error('Validation error: ' + error.response.data.message);
            } else {
                toastr.error('Server error: ' + error.message);
            }
        })
    });
});


