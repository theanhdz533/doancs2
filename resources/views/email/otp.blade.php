<style>
    .main {
        margin-top: 100px;
        display: flex;
        flex-direction: row;
        justify-content: center;
        height: 150px;
        background-color: antiquewhite;
        flex-wrap: wrap;
        align-content: space-around;
        
    }
    input, button{
        font-size: 30px;
        
    }
</style>
<div class="main">
    <form action="{{ route('otp') }}" method="POST">
        @csrf
        <input type="text" value="{{ $mailData }}" name="username" style="display: none;">
        <input type="text" name="otp" placeholder="Nhập mã xác nhận">
        <button type="submit" >Xác nhận</button>
    </form>
    <form action="{{ route('otp_resend') }}" method="POST" style="margin-left: 10px;">
        @csrf
        <input type="text" value="{{ $mailData }}" name="username" style="display: none;">
        <button type="submit">Gửi lại mã xác nhận</button>
    </form>
</div>
