<!-- container-fluid : s -->
<div class="container-fluid  wide">

  <!-- Page Heading -->
  <div class="page-header">
    <h1>Community reporting management</h1>
  </div>

  <!-- body : s -->
  <div class="bg_wh mt20">
    <div class="table-responsive">
      <form name="form_default" id="form_default" method="post">
      <table class="search_table">
        <colgroup>
          <col style="width:120px">
          <col style="width:330px">
          <col style="width:120px">
          <col style="width:330px">
        </colgroup>
        <tbody>
          <tr>
            <th style="text-align:center;">Reporting Member Name</th>
            <td>
              <input name="member_name" id="member_name" class="form-control">
            </td>
            <th style="text-align:center;">Reporting Member ID</th>
            <td>
              <input name="member_id" id="member_id" class="form-control">
            </td>
          </tr>
          <tr>
            <th style="text-align:center;">Reported Member Name</th>
            <td>
              <input name="reported_member_name" id="reported_member_name" class="form-control">
            </td>
            <th style="text-align:center;">Reported Member ID</th>
            <td>
              <input name="reported_member_id" id="reported_member_id" class="form-control">
            </td>
          </tr>
          <tr>
            <th style="text-align:center;">Type of report</th>
            <td>
              <label class="checkbox-inline"><input type="radio" name="report_type" id="report_type_all" value="" checked> In All</label>
              <label class="checkbox-inline"><input type="radio" name="report_type" value="0" > Abusive and blaming post </label>
              <label class="checkbox-inline"><input type="radio" name="report_type" value="1" > lewd writing</label>
              <label class="checkbox-inline"><input type="radio" name="report_type" value="2" > Other bad manners</label>
            </td>
            <th style="text-align:center;">Publication Status</th>
            <td>
              <label class="checkbox-inline"><input type="radio" name="display_yn" id="display_yn" value="" checked>In All</label>
              <label class="checkbox-inline"><input type="radio" name="display_yn" value="Y" >Publishing</label>
              <label class="checkbox-inline"><input type="radio" name="display_yn" value="N" >Blind</label>
            </td>
          </tr>
        </tbody>
      </table>
      </form>
      <div class="text-center mt20">
        <a class="btn btn-success" href="javascript:void(0)" onclick="default_list_get(1);">Search</a>
      </div>
    </div>
    <!-- search : e -->

    <div class="bg_wh mb20" id="list_ajax"></div>

  </div>
  <!-- body : e -->

</div>
<!-- container-fluid : e -->
<input type="text" name="page_num" id="page_num" value="1"  style="display:none">

<script>

//엔터키 시 검색
window.addEventListener('keydown', function(event){
  if (window.event.keyCode == 13) {
    // 엔터키가 눌렸을 때 실행할 내용
    default_list_get(1);
  }
})

  $(document).ready(function(){
    setTimeout("default_list_get($('#page_num').val())", 10);
  })

  function default_list_get(page){
    $('#page_num').val(page);

    var formData = {
      'member_name' :  $('#member_name').val(),
      'member_id' :  $('#member_id').val(),
      'reported_member_name' :  $('#reported_member_name').val(),
      'reported_member_id' :  $('#reported_member_id').val(),
      'report_type' :  $("input[name='report_type']:checked").val(),
      'display_yn' :  $("input[name='display_yn']:checked").val(),
      'page_num' : page,
    };

    $.ajax({
      url      : "/<?=mapping('board_report')?>/board_report_list_get",
      type     : "POST",
      dataType : "html",
      async    : true,
      data     : formData,
      success: function(result) {
        $('#list_ajax').html(result);
      }
    });
  }

  function board_display_yn_mod_up(board_idx, display_yn){

    var formData = {
      "board_idx" : board_idx,
      "display_yn" : display_yn
    };

    $.ajax({
      url      : "/<?=mapping('board')?>/board_display_yn_mod_up",
      type     : 'POST',
      dataType : 'json',
      async    : true,
      data     : formData,
      success: function(result){
        if(result.code == "0"){
          alert(result.code_msg);
        }else{
          alert(result.code_msg);
          default_list();
        }
      }
    });
  }

</script>
