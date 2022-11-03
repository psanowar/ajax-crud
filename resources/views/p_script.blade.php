<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script type="text/javascript">
      $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });
    </script>

    <script type="text/javascript">
      $(document).ready(function(){
        $('.add_product').click(function(e){
          e.preventDefault(); 

          let nam = $('#name').val();
          let dam = $('#price').val();

          // console.log(nam+dam);

          $.ajax({

            url:"{{ route('add.product') }}",
            method:'post',
            data:{name:nam,price:dam},
            success:function(res){

              if(res.status == 'success'){
                $('#addModal').modal('hide');
                $('#addProdcutModal')[0].reset();
                $('.table').load(location.href+' .table');
              }

            },error:function(err){

              let error = err.responseJSON;

              $.each(error.errors, function(ind, vale){
                $('.errorMessage').append('<span class="text-danger">'+vale+'</span>'+'<br>');
              });

            }

          });

        });
      });
    </script>