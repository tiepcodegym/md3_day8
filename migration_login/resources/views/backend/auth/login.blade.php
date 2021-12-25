@toastr_css
<form method="post">
    @csrf
    <input type="text" name="email" placeholder="Nhap email">
    <input type="password" name="password" placeholder="Nhap pw">
    <button type="submit">Dang nhap</button>

</form>

<a href="{{route("register.showFormRegister")}}">Dang ky</a>
@jquery
@toastr_js
@toastr_render
