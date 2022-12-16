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
        
    }
    body{
        background-image: url('https://c.wallhere.com/photos/c2/39/video_games_Xbox_Forza_Horizon_5_minozum-2068693.jpg!d');
    }
    #but{
        margin-left: -2%;
    }
    .form-control{
        border-radius: 100px;
        width: 50%;
    }
    label{
        font-size:20px ;
        
    }
    button{
        border-radius: 180px;
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
                <form action="{{ route('login.action') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label><b>Mail</b><span class="text-danger">*</span></label>
                        <input class="form-control" type="username" name="username" value="{{ old('username') }}" />
                    </div>
                    <div class="mb-3">
                        <label><b>Mật Khẩu </b> <span class="text-danger">*</span></label>
                        <input class="form-control" type="password" name="password" />
                    </div>
                    <div class="mb-3" id="but">
                        <button class="btn btn-primary"><b>Đăng Nhập</b></button>
                        <a class="btn btn-danger" href="forgotPassword"> <b>Quên mật khẩu</b></a>
                       <a class="btn btn-danger" href="/" style="background-color: rgb(211, 93, 244);"> <b>Trở Về</b></a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
</body>

