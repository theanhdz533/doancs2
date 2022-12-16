<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
</head>
<style>
    .row{
        display: flex;
        justify-content: center;
        margin-left: 15%;
    }
    .main{
        margin-top: 150px;
        background-color: rgba(117, 234, 244, 0.6);
        
    }
    body{
        background-image: url('https://c.wallhere.com/photos/ec/b4/Lamborghini_Lamborghini_Aventador_car_luxury_cars_red_cars_reflection_dark_CGI-1505347.jpg!d');
    }
    #but{
        margin-left: 10%;
    }
    .form-control{
        border-radius: 100px;
        width: 50%;
    }
    label{
        font-size:20px ;
        color: rgb(238, 255, 0);
        font-weight: 500;
    }
    button{
        border-radius: 20px;
    }
</style>
<body>
    <div class="main">
        <div class="row">
            <div class="col-md-6">
                @if(session('success'))
                <p class="alert alert-success">{{ session('success') }}</p>
                @endif
                @if($errors->any())
                @foreach($errors->all() as $err)
                <p class="alert alert-danger">{{ $err }}</p>
                @endforeach
                @endif
                <form action="{{ route('forgotPassword.action') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label>Email của bạn<span class="text-danger">*</span></label>
                        <input class="form-control" type="text" name="email" required/>
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-primary" #but>Quên mật khẩu</button>
                        <a class="btn btn-danger" href="/">Trở Về</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
</body>

