<form action="#" method="POST">
    @csrf
    <input type="hidden" name="_method" value="PUT">
    <div class="form-group">
    <label>Nama</label>
    <input type="text" name="name" value="" class="form-control">
    </div>
    <div class="form-group">
    <label>email</label>
    <input type="email" name="email" class="form-control">
    </div>
    <div class="form-group">
    <label>password</label>
    <input type="password" name="password" class="form-control">
    </div>
</form>