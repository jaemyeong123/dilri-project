<!-- container-fluid : s -->
<div class="container-fluid wide">

  <!-- Page Heading -->
  <div class="page-header">
    <h1>Community Management</h1>
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
            <th style="text-align:center">Name</th>
            <td>
              <input name="member_name" id="member_name" class="form-control">
            </td>
            <th style="text-align:center">State</th>
            <td >
              <label class="radio-inline"><input type="radio" name="display_yn" checked="" value=""> In All</label>
              <label class="radio-inline"><input type="radio" name="display_yn" value="Y"> Publishing</label>
              <label class="radio-inline"><input type="radio" name="display_yn" value="N"> Blind</label>
            </td>
          </tr>
          <tr>
            <th style="text-align:center">Comments &reply</th>
            <td >
              <input name="contents" id="contents" class="form-control">
            </td>
            <th style="text-align:center">Keywords</th>
            <td>
              <input name="hash_tag" id="hash_tag" class="form-control">
            </td>
          </tr>

          <tr>
            <th style="text-align:center">Sort</th>
            <td>
              <select name="orderby" id="orderby" class="form-control w_auto">
                <option value="">Please select.</option>
                <option value="0">Registration date descending order</option>
                <option value="1">Number of recommendations in descending order</option>
                <option value="2">Number of comments descending order</option>
              </select>
            </td>
            <th style="text-align:center">Best</th>
            <td >
              <label class="radio-inline"><input type="radio" name="best_yn" checked="" value=""> In All</label>
              <label class="radio-inline"><input type="radio" name="best_yn" value="Y"> Best</label>
              <label class="radio-inline"><input type="radio" name="best_yn" value="N"> Best et al</label>
            </td>
          </tr>
          <tr>
            <th style="text-align:center">Number of comments descending order</th>
            <td colspan="3">
              <input name="s_date" id="s_date" class="form-control datepicker">&nbsp;<i class="fa fa-calendar-o"></i>&nbsp;~&nbsp;
              <input name="e_date" id="e_date" class="form-control datepicker">&nbsp;<i class="fa fa-calendar-o"></i>
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
  });

  //카테고리 리스트 가져오기
  function default_list_get(page){

    $('#page_num').val(page);

    var formData = {
      'member_name' :  $('#member_name').val(),
      'best_yn' :  $("input[name='best_yn']:checked").val(),
      'display_yn' :  $("input[name='display_yn']:checked").val(),
      'contents' : $('#contents').val(),
      'hash_tag' : $('#hash_tag').val(),
      'title' : $('#title').val(),
      's_date' : $('#s_date').val(),
      'e_date' : $('#e_date').val(),
      'orderby' :  $("select[name='orderby']").val(),
      'history_data' : window.history.length,
      'page_num' : page,
    };

    $.ajax({
      url      : "/<?=mapping('board')?>/board_list_get",
      type     : "POST",
      dataType : "html",
      async    : true,
      data     : formData,
      success: function(result) {
        $('#list_ajax').html(result);
      }
    });
  }

  // 인기상품 설정 상태 수정
  function best_yn_mod_up(board_idx, best_yn){

    var formData = {
      "board_idx" : board_idx,
      "best_yn" : best_yn
    };

    $.ajax({
      url      : "/<?=mapping('board')?>/best_yn_mod_up",
      type     : 'POST',
      dataType : 'json',
      async    : true,
      data     : formData,
      success: function(result){
        if(result.code == "0"){
          alert(result.code_msg);
        }else{
          alert(result.code_msg);
          default_list_get($('#page_num').val());
        }
      }
    });
  }


  // 엑셀 다운로드
  var do_excel_down = function() {
    document.form_default.action ="/<?=mapping('board')?>/board_list_excel";
    document.form_default.submit();
  }
</script>
