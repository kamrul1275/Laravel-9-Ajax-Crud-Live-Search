<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <title>ajax crud!</title>
  </head>
  <body>






<div class="container">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8"><h1 class="my-5">Ajax Crud</h1>

        <a href="" class="btn btn-primary py-2" data-bs-toggle="modal" data-bs-target="#addModal"> Add Product</a>
            <table class="table  table-bordered">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>
                        <a href=""  class="btn btn-success"> <i class="las la-edit"></i>Edit</a>
                        <a href="" class="btn btn-danger"><i class="las la-trash"></i>Delete</a>
                    </td>
                  </tr>


                </tbody>
              </table>



        </div>
        <div class="col-md-2"><</div>
    </div>
</div>


@include('add_product_modal');

@include('product_js');



  </body>
</html>
