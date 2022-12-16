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
    <form action="{{ route('sendReason') }}" method="POST">
        @csrf
        <input type="text" value="{{ $username }}" name="username" style="display: none;">
        <input type="text" value="{{ $id }}" name="id" style="display: none;">
        <input type="text" value="" name="reason" placeholder="Lý do đơn hàng bị hủy..." >
        <button type="submit" >Xác nhận</button>
    </form>
    
</div>
