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
        background-color: rgba(139, 163, 165,0.6);
        
    }
    body{
        background-image: url('https://c.wallhere.com/photos/b2/9d/Buggati_Forza_Horizon_5_Hypercar_car-2123901.jpg!d');
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
                @if($errors->any())
                @foreach($errors->all() as $err)
                <p class="alert alert-danger">{{ $err }}</p>
                @endforeach
                @endif
                <form action="{{ route('register.action') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label>Họ Và Tên<span class="text-danger">*</span></label>
                        <input class="form-control" type="text" name="name" value="{{ old('name') }}" />
                    </div>
                    <div class="mb-3">
                        <label>Email<span class="text-danger">*</span></label>
                        <input class="form-control" type="username" name="username" value="{{ old('username') }}" />
                    </div>
                    <div class="mb-3">
                        <label>Mật Khẩu<span class="text-danger">*</span></label>
                        <input class="form-control" type="password" name="password" />
                    </div>
                    <div class="mb-3">
                        <label>Nhập Lại Mật Khẩu<span class="text-danger">*</span></label>
                        <input class="form-control" type="password" name="password_confirm" />
                    </div>
                    <div class="mb-3"  id="but">
                        <button class="btn btn-primary">Đăng Ký</button>
                        <a class="btn btn-danger" href="/">Trở Về</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
     
</body>
