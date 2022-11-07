<!-- container-fluid : s -->
<div class="container-fluid">
  <!-- Page Heading -->
	<div class="page-header">
		<h1>Banner Registration</h1>
	</div>

  <!-- body : s -->
  <div class="bg_wh mt20">
		<div class="table-responsive">
      <form name="form_default" id="form_default" method="post">
  			<table class="table table-bordered td_left">
          <colgroup>
            <col style="width:15%">
            <col style="width:35%">
            <col style="width:15%">
            <col style="width:35%">
          </colgroup>
					<tbody>
						<tr>
							<th><span class="text-danger">*</span>Banner</th>
							<td colspan=3>
                  <input class="form-control" type="text" name="title" id="title" value="">
              </td>
						</tr>
						<tr>
							<th style="height:200px;">
								<p><span class="text-danger">*</span>Banner image</p>
								<p>(690x148)</p>
								<input type="button" class="btn btn-xs btn-default" id="file1" value="File Upload" onclick="file_upload_click('img','image','1','150','150','.jpg ,.png');">
							</th>
							<td style="vertical-align:top;" colspan=3>
								<div class="view_img">
									<ul class="img_hz" id="img" ></ul>
								</div>
								<p>You can upload one png or jpg file</p>
							</td>
						</tr>
            <tr>
              <th>URL</th>
              <td colspan=3><input class="form-control" name ="link_url" id ="link_url" placeholder="http://www.example.co.kr" autocomplete="off"></td>
            </tr>
            <tr>
              <th style="height:50px;">Banner Location</th>
              <td colspan="3">
								<label class="radio-inline"><input type="radio" name="banner_type" value="0" checked >&nbsp;Main</label> &nbsp;&nbsp;&nbsp;&nbsp;
								<label class="radio-inline"><input type="radio" name="banner_type" value="1">&nbsp;Community</label>
              </td>
            </tr>
					</tbody>
				</table>
      </form>
      <div>
				<a href="javascript:void(0)" onclick="default_list();" class="btn btn-gray">List</a>
				<a href="javascript:void(0)" onclick="default_reg();" class="btn btn-success" style="float:right;">Registration</a>
			</div>
    </div><!-- table-responsive -->
  </div>
  <!-- body : e -->
</div>
  <!-- container-fluid : e -->
<script>

  // 베너 등록
  function default_reg() {
    $.ajax({
      url      : "/<?=mapping('banner')?>/banner_reg_in",
      type     : 'POST',
      dataType : 'json',
      async    : true,
      data     : $('#form_default').serialize(),
      success  : function(result) {
        if(result.code == '-1'){
  				alert(result.code_msg);
  				$("#"+result.focus_id).focus();
  				return;
  			}
  			// 0:실패 1:성공
  			if(result.code == 0) {
  				alert(result.code_msg);
  			} else {
  				alert(result.code_msg);
  				location.href = "/<?=mapping('banner')?>/banner_list";
  			}
      }
    });
  }

  // 뒤로가기
  function default_list(){
      location.href ="/<?=mapping('banner')?>/banner_list";
  }

</script>
