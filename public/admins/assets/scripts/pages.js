$(document).ready(function () {
    $(document).on("click", ".select-all", function (e) {
        if ($(this).is(":checked")) {
            $(".select-row").prop("checked", true);
        } else {
            $(".select-row").prop("checked", false);
        }
    });
    $(document).on("click", ".page-link", function (e) {
        $(".select-all").prop("checked", false);
    });
    $(document).on("change", ".import-excel", function (e) {
        let data = new FormData();
        let type = $(this).data("upload");
        let url = $(this).data("url");
        let files = $(this)[0].files[0];
        data.append("file", files);
        data.append("type", type);
        data.append("week", $("#list-week").val());
        $.ajax({
            type: "POST",
            url: url,
            data: data,
            dataType: "JSON",
            contentType: false,
            cache: false,
            processData: false,
            success: (data) => {
                alertify.success(data.message);
                $("#table-ajax .table").DataTable().ajax.reload();
                $(".btn-import-en").data("import", 1);
            },
            error: (xhr) => {
                alertify.error(xhr.responseJSON.message);
            },
        });
    });
    $(document).on("click", "#add-tag", function (e) {
        let data = new FormData();
        let name = $(this).data("value");
        let url = $(this).data("url");
        data.append("name", name);
        let tag = $("#tags");
        $.ajax({
            type: "POST",
            url: url,
            data: data,
            dataType: "JSON",
            contentType: false,
            cache: false,
            processData: false,
            success: (data) => {
                alertify.success(data.message);
                tag.append(
                    '<option value="' +
                        data.data.id +
                        '" selected>' +
                        data.data.name +
                        "</option>"
                );
            },
            error: (xhr) => {
                alertify.error(xhr.responseJSON.message);
            },
        });
    });
    $(document).on("click", ".btn-import-en", function (e) {
        e.preventDefault();
        if ($(this).data("import") == 0) {
            alert($(this).data("alert"));
            return false;
        }
        $(".import-excel-en").click();
    });
    $(document).on("click", ".btn-import-vi", function (e) {
        e.preventDefault();
        $(".import-excel-vi").click();
    });
});
