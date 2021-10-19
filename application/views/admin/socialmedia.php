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
                            <li class="breadcrumb-item active" aria-current="page">Sosyal Medya Hesapları</li>
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
                            <label>Facebook:</label>
                            <input type="text" class="form-control" name="facebook" value="<?= getsocialmedia()->facebook ?>">
                        </div>

                        <div class="form-group">
                            <label>Instagram:</label>
                            <input type="text" class="form-control" name="instagram" value="<?= getsocialmedia()->instagram ?>">
                        </div>
                        <div class="form-group">
                            <label>Behance:</label>
                            <input type="text" class="form-control" name="behance" value="<?= getsocialmedia()->behance ?>">
                        </div>

                        <button type="submit" name="save" class="btn btn-light m-1 radius-30 px-5">
                            <i class="bx bx-like mr-1"></i>
                            Kaydet
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