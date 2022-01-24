<script>
function checkAvailability() {
$("#loaderIcon").show();
jQuery.ajax({
url: "check_availability.php",
data:'emailid='+$("#emailid").val(),
type: "POST",
success:function(data){
$("#user-availability-status").html(data);
$("#loaderIcon").hide();
},
error:function (){}
});
}
</script>
<script type="text/javascript">
function valid()
{
if(document.signup.password.value!= document.signup.confirmpassword.value)
{
alert("Password and Confirm Password Field do not match  !!");
document.signup.confirmpassword.focus();
return false;
}
return true;
}
</script>
<div class="modal fade" id="signupform">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title">Daftar</h3>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="signup_wrap">
            <div class="col-md-12 col-sm-6">
              <form  method="POST" action="{{ route('register') }}">
              @csrf
                <div class="form-group">
                  <input type="text" class="form-control" name="name" placeholder="Nama Lengkap" required="required">
                </div>
                      <div class="form-group">
                  <input type="text" class="form-control" name="number" placeholder="No. Telepon" maxlength="13" required="required">
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" name="email" id="email" onBlur="checkAvailability()" placeholder="Alamat Email" required="required">
                   <span id="user-availability-status" style="font-size:12px;"></span> 
                </div>
                <div class="form-group">
                  <input type="password" class="form-control" name="password" placeholder="Password" required="required">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control" name="password_confirmation" placeholder="Konfirmasi Password" required="required">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="city" placeholder="Kota" required="required">
                </div>
                <div class="form-group checkbox">
                  <input type="checkbox" id="terms_agree" required="required" checked="">
                  <label for="terms_agree">Saya Setuju Dengan <a href="#">Syarat dan Ketentuan</a></label>
                </div>
                <div class="form-group">
                  <input type="submit" value="Sign Up" name="signup" id="submit" class="btn btn-block">
                </div>
              </form>
            </div>
            
          </div>
        </div>
      </div>
      <div class="modal-footer text-center">
        <p>Sudah Memili Akun? <a href="#loginform" data-toggle="modal" data-dismiss="modal">Masuk Disini</a></p>
      </div>
    </div>
  </div>
</div>