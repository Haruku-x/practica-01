let produ;
$.post(base_url + '?/cProducts/getProduc', {
        d: '1'
    },
    function(data) {
        let r = JSON.parse(data);
        produ = r;
        $.each(r, function(i, item) {
            $('#opc_nombre_prod').append('<option value="' + item.id + '">' + item.nombre + '</option>";');
        });

    }
);

$('#opc_nombre_prod').change(function() {
    let value = $(this).val();
    if (value >= 0) {
        $('#txt_Nombre').val(produ[value - 1].nombre);
        $('#txt_Marca').val(produ[value - 1].marca);
        $('#txt_Modelo').val(produ[value - 1].modelo);
        $('#txt_Precio').val(produ[value - 1].precio);
        if ($("#txt_Precio").val() > 0 && $("#txt_Cant").val() > 0) {
            $("#txt_Total").val($("#txt_Cant").val() * $("#txt_Precio").val());
        } else {
            $("#txt_Total").val('');
        }
    }
});


$('input[type=checkbox]').on('change', function(e) {
    if ($('input[type=checkbox]:checked').length > 2) {
        $(this).prop('checked', false);
    }
});


$('#txt_Cant').on('change keyup', function(e) {
    if ($("#txt_Precio").val() > 0) {
        $("#txt_Total").val($("#txt_Cant").val() * $("#txt_Precio").val());
    } else {
        $("#txt_Total").val('');
    }
});


$('#btn_cancelar').on('click', function(e) {
    $('#opc_nombre_prod').val($("#opc_nombre_prod option:first").val());
    $('#txt_Marca').val('');
    $('#txt_Modelo').val('');
    $('#txt_Precio').val('');
    $("#txt_Total").val('');
    $('input[type=checkbox]').prop('checked', false);
});