<style>
    #container {
        display: grid;
        width: 250px;
        margin: auto;
        text-align: center;
    }

    img {
        max-width: calc(100% - 20px);
        margin: 10px;

    }
</style>
<div class="page-wrapper">
    <!--page-content-wrapper-->
    <div class="page-content-wrapper">
        <div class="page-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-md-flex align-items-center mb-3">
                <div class="breadcrumb-title pr-3">Anasayfa</div>
                <div class="pl-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="javascript:;"><i class='bx bx-home-alt'></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Blog Ekle</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <!--end breadcrumb-->

            <div class="card radius-15">
                <div class="card-body">
                    <div class="card-title">
                        <h4 class="mb-0">Detaylar</h4>
                    </div>
                    <hr />
                    <form method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Çalışma Adı:</label>
                            <input type="text" class="form-control" name="name" placeholder="Blog Adı">
                        </div>
                        <div class="form-group">
                            <select class="form-control form-control-sm">
                                <option>Kategori</option>
                                <?php foreach ($categories as $row) { ?>
                                    <option value="<?= $row->catname ?>"><?= $row->catname ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Görsel:</label>
                            <button class="btn btn-light m-1 radius-30 px-5">
                                <input type='file' name="file" id='file-input'>
                            </button>
                            <div id='container'>
                                <img id='preview'>
                            </div>
                        </div>
                        <button type="submit" name="add" class="btn btn-light m-1 radius-30 px-5">
                            <i class="bx bx-like mr-1"></i>
                            Ekle
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--end page-content-wrapper-->
</div>
<!--end page-wrapper-->
<!--start overlay-->
<script>
    var input = document.querySelector("#file-input");

    document.querySelector("button").addEventListener("click", function() {
        input.click();
    });

    input.addEventListener("change", preview);

    function preview() {
        var fileObject = this.files[0];
        var fileReader = new FileReader();
        fileReader.readAsDataURL(fileObject);
        fileReader.onload = function() {
            var result = fileReader.result;
            var img = document.querySelector("#preview");
            img.setAttribute("src", result);
        };
    }
</script>
</div>
</div>
<div class="overlay toggle-btn-mobile"></div>
</div>