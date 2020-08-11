<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Bootstrap</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/whatsapp.css">
</head>

<body>
    <div id="carouselId" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselId" data-slide-to="0" class="active"></li>
            <li data-target="#carouselId" data-slide-to="1"></li>
            <li data-target="#carouselId" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <img data-src="holder.js/900x500/auto/#777:#555/text:First slide" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                    <h3>Title</h3>
                    <p>Description</p>
                </div>
            </div>
            <div class="carousel-item">
                <img data-src="holder.js/900x500/auto/#666:#444/text:Second slide" alt="Second slide">
                <div class="carousel-caption d-none d-md-block">
                    <h3>Title</h3>
                    <p>Description</p>
                </div>
            </div>
            <div class="carousel-item">
                <img data-src="holder.js/900x500/auto/#666:#444/text:Third slide" alt="Third slide">
                <div class="carousel-caption d-none d-md-block">
                    <h3>Title</h3>
                    <p>Description</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselId" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselId" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div id="accordianId" role="tablist" aria-multiselectable="true">
        <div class="card">
            <div class="card-header" role="tab" id="section1HeaderId">
                <h5 class="mb-0">
                    <a data-toggle="collapse" data-parent="#accordianId" href="#section1ContentId" aria-expanded="true"
                        aria-controls="section1ContentId">
                        Section 1
                    </a>
                </h5>
            </div>
            <div id="section1ContentId" class="collapse in" role="tabpanel" aria-labelledby="section1HeaderId">
                <div class="card-body">
                    Section 1 content
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" role="tab" id="section2HeaderId">
                <h5 class="mb-0">
                    <a data-toggle="collapse" data-parent="#accordianId" href="#section2ContentId" aria-expanded="true"
                        aria-controls="section2ContentId">
                        Section 2
                    </a>
                </h5>
            </div>
            <div id="section2ContentId" class="collapse in" role="tabpanel" aria-labelledby="section2HeaderId">
                <div class="card-body">
                    Section 2 content
                </div>
            </div>
        </div>
    </div>
    <div class="alert alert-success" role="alert">
        <h4 class="alert-heading"></h4>
        <p></p>
        <p class="mb-0"></p>
    </div>
    <footer class="page-footer font-small blue">
        <div class="footer-copyright text-center py-3"> 2020 Copyright:
            <a href="">Iswandi</a>
        </div>

    </footer>

    <a class="fixed-whatsapp"
        href="https://api.whatsapp.com/send?phone=+6285314371327 & text=Hallo.. saya ingin apa ya ?"
        rel="nofollow noopener" target="_blank" title="whatsapp" style="z-index: 999;"></a>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>



</body>

</html>