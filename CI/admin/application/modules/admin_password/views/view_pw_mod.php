
  <div class="container-fluid">
    <!-- Page Heading -->
    <div class="page-header">
			<h1>Set password</h1>
		</div>

    <!-- body : s -->
    <div class="bg_wh mt20">
      <div class="table-responsive">
        <form name="form_default" id="form_default" method="post">
          <section>
            <!-- top -->
            <div class="row table_title">
              <div class="col-lg-6"> &nbsp;<i class="fa fa-check" aria-hidden="true"></i> &nbsp;Edit  Password</div>
            </div>
            <!-- top  -->
            <table class="table table-bordered td_left">
  						<tbody>
  							<tr>
  								<th width="150">Current password</th>
  								<td colspan="3"><div class="form-group"><input class="form-control" type="password" name="admin_pw" id="admin_pw"></div></td>
  							</tr>
                <tr>
  								<th width="150">New password</th>
  								<td colspan="3"><div class="form-group"><input class="form-control" type="password" name="admin_new_pw" id="admin_new_pw"></div></td>
  							</tr>
                <tr>
  								<th width="150">Confirm new password</th>
  								<td colspan="3"><div class="form-group"><input class="form-control" type="password" name="admin_re_pw" id="admin_re_pw"></div></td>
  							</tr>
  						</tbody>
  					</table>
          </section>
        </form>

        <div class="row">
          <div class="col-lg-12 text-right">
            <a href="javascript:history.go(-1)" class="btn btn-gray">Cancellation</a>
            <a href="javascript:void(1)" class="btn btn-success" onclick="default_mod()">Edit</a>
          </div>
        </div>
      </div>
    </div>
    <!-- body : e -->
  </div>
  <!-- container-fluid : e -->
<script>

function default_mod() {
  $.ajax({
    url: "/admin_password/pw_mod_up",
    type: 'POST',
    dataType: 'json',
    async: true,
    data: $("#form_default").serialize(),
    beforeSend:default_validate,
    success: function(result) {
      if(result==0){
        alert('Password has not been changed.');//비밀번호 변경되지 않았습니다.
      }else if(result==2){
        alert('Please enter your password.');//비밀번호를 입력해주세요.
      }else if(result==3){
        alert('The password is different. Please enter it again');//비밀번호가 다릅니다. 다시입력해주세요
      }else if(result==4){
        alert('The current password is different. Please enter it again');//현재 비밀번호가 다릅니다. 다시입력해주세요
      }else{
        alert('Password has been changed.'); //비밀번호가 변경되었습니다.
        location.href ='/main';
      }
    }
  });
}
//유효성 체크
var default_validate = function() {

}

</script>
