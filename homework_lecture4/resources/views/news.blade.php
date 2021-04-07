!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>News</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css"
          rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row">
        <!-- News Text-->
        <div class="col-lg-12">
            page content: {{$page_content}}
        </div>
        <!-- News Text -->


<a href="#" class="previous">&laquo; Previous</a>
<a href="#" class="next">Next &raquo;</a>

<a href="#" class="previous round">&#8249;</a>
<a href="#" class="next round">&#8250;</a>

        <div class="col-lg-12" style="margin-top: 100px">
            <nav aria-label="...">
                <ul class="pagination">
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item active" aria-current="page">
                        <a class="page-link" href="#">2</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                </ul>
            </nav>
        </div>
        <!-- // Pagination -->
    </div>
</div>


</body>
</html>
