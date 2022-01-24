
<div class="modal fade" id="loginform">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title">Masuk</h3>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="login_wrap">
            <div class="col-md-12 col-sm-6">
              <form method="POST" action="{{ route('login') }}">
              @csrf
                <div class="form-group">
                  <input type="email" class="form-control" name="email" placeholder="Alamat E-Mail*">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control" name="password" placeholder="Password*">
                </div>
                <div class="form-group checkbox">
                  <input type="checkbox" id="remember">
               
                </div>
                <div class="form-group">
                  <input type="submit" name="login" value="Login" class="btn btn-block">
                </div>
              </form>
            </div>
           
          </div>
        </div>
      </div>
      <div class="modal-footer text-center">
        <p>Belum memiliki Akun? <a href="#signupform" data-toggle="modal" data-dismiss="modal">Daftar Disini</a></p>
        <p><a href="#forgotpassword" data-toggle="modal" data-dismiss="modal">Lupa Kata Sandi ?</a></p>
      </div>
    </div>
  </div>
</div>