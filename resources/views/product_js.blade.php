
 <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>



 <script>

     $.ajaxSetup({
         headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
       }
});

 </script>






<script>

            $(document). ready( function(){

             $(document).on('click', '.add_product', function(e){

                    e.preventDefault();
                    let name =$('#name').val();
                    let product =$('#product').val();
                    //console.log(name+price);


             $.ajax({

                     url:"{{ route('add.product') }}",
                     method: 'POST',
                     data: {

                                name:name,
                                product:product,
                            },


                    success:function(res){


                        if(res.status='success'){

                         $('#addModal').modal('hide');
                         $('#addPrductfrom')[0].reset();
                        }

                },error:function(err){
                let error = err.responseJSON;
                $.each(error.errors, function(index, value){

                $('.errormsgContainer').append('<spand class="text-danger">' + value + '</spand>' + '<br>');


});



},
});
})

});


</script>
