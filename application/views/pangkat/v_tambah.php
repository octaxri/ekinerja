<style>
    td{
        vertical-align: middle !important;font-family: "gotham";
    }
</style>
<form id="frmJabatan" method="post">
    <table class="table">


            <tr>
                <td>Golongan</td>
                <td>
                    <input type="text" class="form-control " name="Golongan">
                </td>
            </tr>
            <tr>
                <td>Pangkat</td>
                <td><input type="text" class="form-control " name="Pangkat" ></td>
            </tr>

            <tr>
                <td></td>
                <td style="text-align: right;"><button class="btn btn-primary">Simpan</button></td>

    </table>
</form>

<script>

    $("#frmJabatan").submit(function (e) {
        e.preventDefault();
        var frmJabatan = $("#frmJabatan");
        var form = getFormData(frmJabatan);
        $.ajax({
            type: "POST",
            url: "admin/c_pangkat/aksi_tambah",
            data: JSON.stringify(form),
            dataType: 'json'
        }).done(function (response) {
            if (response.status === 1) {
                alert(response.ket);
                $('.close').click();
                menu('admin/c_pangkat');
            } else {
                alert(response.ket);
            }
        });

    });
</script>