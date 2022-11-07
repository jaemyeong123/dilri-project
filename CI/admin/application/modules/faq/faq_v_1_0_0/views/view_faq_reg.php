<!-- container-fluid : s -->
<div class="container-fluid">
  <!-- Page Heading -->
  <div class="page-header">
    <h1>FAQ Registration</h1>
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
              <th><span class="text-danger">*</span> Classification </th>
              <td colspan=3>
                <select class="form-control w_auto" name="faq_type" id="faq_type">
                  <option value="">In All</option>
                  <?for($i=1;$i<=11;$i++){?>
                    <? if($i!=9){ ?>
                      <option value="<?=$i?>"><?=$this->global_function->get_faq_type($i)?></option>
                    <? } ?>
                  <?}?>
                </select>
              </td>
            </tr>
            <tr>
              <th><span class="text-danger">*</span> Title<br>(En/Kr/Bdt) </th>
              <td colspan=3>
                  <!-- <input name="title" id="title" type="text" class="form-control"> -->
                <input name="title_kr" id="title_kr" type="text" class="form-control">
                <input name="title_us" id="title_us" type="text" class="form-control">
                <input name="title_bd" id="title_bd" type="text" class="form-control">
              </td>
            </tr>
            <tr>
              <th colspan="4">
                <span class="text-danger" >*</span> content (En/Kr/Bdt)
              </th>
            </tr>
            <tr>
              <td colspan="4" class="table_left" colspan="3">
                  <!-- <textarea class="input_default textarea_box" name="contents" id="contents" placeholder="내용"></textarea> -->
                <textarea class="input_default textarea_box_kr" name="contents_kr" id="contents_kr" placeholder="내용(한국어)"></textarea>
                <textarea class="input_default textarea_box_us" name="contents_us" id="contents_us" placeholder="내용(영어)"></textarea>
                <textarea class="input_default textarea_box_bd" name="contents_bd" id="contents_bd" placeholder="내용(뱅골어)"></textarea>
              </td>
            </tr>
            <tr>
             <th>노출 여부</th>
               <td colspan="3">
                   <label class="switch">
                     <input type="checkbox" name="state" id="state" value="Y" checked>
                     <span class="check_slider"></span>
                   </label>
               </td>
             </tr>
          </tbody>
        </table>
      </form>

      <div class="mt15">
        <a class="btn btn-gray" href="javascript:void(0" onclick="default_list();">List</a>
        <a class="btn btn-success" href="javascript:void(0)" onclick="default_reg();" style="float:right;">Registration</a>
      </div>
    </div>
  </div>
  <!-- body : e -->

</div>
<!-- container-fluid : e -->

<script>

  // faq 목록
  function default_list(){
      location.href ="/<?=mapping('faq')?>/faq_list";
  }

  // faq 등록
  function default_reg(){

    $.ajax({
  		url      : "/<?=mapping('faq')?>/faq_reg_in",
  		type     : 'POST',
  		dataType : 'json',
  		async    : true,
  		data     : $("#form_default").serialize(),
  		success: function(result){
        if(result.code == "-1"){
          alert(result.code_msg);
          $("#"+result.focus_id).focus();
        }else{
          alert("Successfully registered.");
          location.href = '/<?=mapping('faq')?>';
        }
  		}
  	});
  }

</script>
