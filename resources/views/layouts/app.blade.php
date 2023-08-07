<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/5.0.7/sweetalert2.min.css">
    
    
    
    <style>
        .alert-success.alertcustom{
            display: flex;
            flex-direction: row-reverse;
            justify-content: space-between;
        }

        .alert-none{
            display: none !important;
        }

        span.close-btn{
            cursor: pointer;
        }
        .swal2-container.in {
            opacity: 1;
        }

        .al-center{
            align-items: center !important;
        }
        
        .scroller{
            max-height: 340px;
            overflow-y: scroll;
        }
        .opa-zero{
            opacity: 0 !important;
        }

        .navbar-custom{
            width: 100%;
            display: flex;
            justify-content: end;
            padding: 7px 6%;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-custom">
        <ul class="navbar-nav ">
        <li><a class="nav-link text-light" href="{{ route('product.home') }}">Home</a></li>
            <li class="nav-item">
                <a class="nav-link text-light" href="/crud">Product</a>
            </li>
            <li class="nav-item login opa-zero">
                <a class="nav-link text-light" href=""></a>
            </li>
            <li class="nav-item login opa-zero">
                <a class="nav-link text-light" href=""></a>
            </li>
            <li class="nav-item login opa-zero">
                <a class="nav-link text-light" href=""></a>
            </li><li class="nav-item login opa-zero">
                <a class="nav-link text-light" href=""></a>
            </li><li class="nav-item login opa-zero">
                <a class="nav-link text-light" href=""></a>
            </li>
            <li class="nav-item login">
                <a class="nav-link text-light" href="admin">Login</a>
            </li>

            
        </ul>
    </nav>

    @if($message = Session::get('success'))
    <div class="alert alert-success alert-block alertcustom">
        <span class="close-btn">X</span>
        <strong>{{ $message }}</strong>
    </div>
    @endif
    @yield('main')

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>  
    
</body>
</html>
        <script>
            function confirmation(ev){
                ev.preventDefault();
                var urlToRedirect=ev.currentTarget.getAttribute('href');
                console.log(urlToRedirect);
                swal({
                    title:"Are you sure want to Delete",
                    text:"You want be able to revert this delete",
                    icon:"warning",
                    buttons : true,
                    dangarMode : true,

                })
                .then((willCancel)=>{
                    if (willCancel) {
                        window.location.href=urlToRedirect;
                    }

                });
            }
        </script>

<script>
    
  
    $(document).ready(function(){
        $('.close-btn').on('click', function(){
            $('.alert-success').addClass('alert-none');
        });

        $('#previous-button').on('click', function(){
            let countPrevious = $(this).attr('data-count');
            let countNext = $('#next-button').attr('data-count');
            $(this).attr('data-count',parseInt(countPrevious)-1);
            $('#next-button').attr('data-count',parseInt(countNext)-1);

            if(countPrevious==1){
                $('#previous-button').hide();
            }
            else{
                $('#previous-button').show();
            }
        });

        $('#next-button').on('click', function(){
            let countPrevious = $('#previous-button').attr('data-count');
            let countNext = $(this).attr('data-count');
            $('#previous-button').attr('data-count',parseInt(countPrevious)+1);
            $(this).attr('data-count',parseInt(countNext)+1);
            // alert($(this).attr('data-count'));
            $('#previous-button').show();
        });

   
    });
       
</script>