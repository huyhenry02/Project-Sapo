<p>
    Xin chào {{$user->username}}<br>
    # Xác thực địa chỉ email<br>
    Nhấp vào nút bên dưới để xác thực địa chỉ email của bạn:<br>
    <a href="{{route('actived.admin',['user' => $user->id])}}">Click vào đây để tiếp tục</a>
    <br>
    Nếu bạn không yêu cầu xác nhận địa chỉ email, không cần thực hiện bất kỳ hành động nào.
    Cảm ơn bạn<br>
</p>

