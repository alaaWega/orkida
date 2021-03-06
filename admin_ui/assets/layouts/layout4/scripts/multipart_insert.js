$(document).ready(function()
{
///////////////////////////insert///////////////////////////////////////
    var options = {
        success:       afterSuccess,  // post-submit callback
        error:         error, // post-submit callback
        beforeSubmit: validateInputs
    };
    $('.addForm').ajaxForm(options);

    function validateInputs(data)
    {
        for (i = 0; i < data.length; i++) {
            if(data[i].value == "")
                return false;
        }
    }

    function error(error)
    {
        swal({
            title: error['responseJSON']['message'],
            type: "error",
            closeOnConfirm: false,
            confirmButtonText: "موافق!",
            confirmButtonColor: "#ff0000",
            allowOutsideClick: true
        });

    }

    function afterSuccess(res)
    {
        $('#addModal').modal('hide');
        swal({
            title: "تم التسجيل بنجاح",
            type: "success",
            closeOnConfirm: false,
            confirmButtonText: "موافق!",
            confirmButtonColor: "#ec6c62",
            allowOutsideClick: true
        });
        $('.addForm')[0].reset();
        oTable.draw();
    }

    ///////////////////////////////////Update//////////////////////////////////////
    var options_update = {
        success:       afterSuccess_update,  // post-submit callback
        error:         error_update,  // post-submit callback
        beforeSubmit: validateInputsUpdate
    };
    $('.editForm').ajaxForm(options_update);

    function validateInputsUpdate(data)
    {
        for (i = 0; i < data.length; i++) {
            if(data[i].name != "icon")
                if(data[i].name != "image")
                    if(data[i].name != "logo")
                            if(data[i].value == "")
                                return false;
        }
    }

    function error_update(error)
    {
        swal({
            title:error['responseJSON']['message'],
            type: "error",
            closeOnConfirm: false,
            confirmButtonText: "موافق!",
            confirmButtonColor: "#ff0000",
            allowOutsideClick: true
        });
        // $('#editModal').modal('hide');
    }

    function afterSuccess_update(res)
    {
        swal({
            title: "تم التحديث بنجاح",
            type: "success",
            closeOnConfirm: false,
            confirmButtonText: "موافق!",
            confirmButtonColor: "#ec6c62",
            allowOutsideClick: true
        });
        $('.editForm')[0].reset();
        $('#editModal').modal('hide');
        oTable.draw();
    }

});