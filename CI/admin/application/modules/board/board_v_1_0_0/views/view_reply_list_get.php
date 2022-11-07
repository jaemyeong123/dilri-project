
    <table class="table table-bordered">
      <thead>
        <tr>
          <th width="50">No</th>
          <th width="100">Author's nickname</th>
          <th width="*">Content</th>
          <th width="100">Type</th>
          <th width="100">One comment writer</th>
          <th width="100">Number of reports</th>
          <th width="150">Date and time of registration</th>
          <th width="150">State</th>
        </tr>
      </thead>
      <tbody>
        <?php
          if(!empty($result_list)){
            foreach($result_list as $row){
        ?>
          <tr>
            <td><?=$no--?></td>
            <td><?=$row->member_name?></td>
            <td><?=$row->reply_comment?></td>
            <td><?php echo $row->depth == 0? "Comments":"reply"; ?></td>
            <td><?=$row->parent_member_name?></td>
            <td><?=$row->report_cnt?></td>
            <td><?=$row->ins_date?></td>
            <td>
              <a class="btn btn-success" href="javascript:void(0)" onclick="display_yn_mod_up('<?=$row->board_reply_idx?>', '<?php echo $row->display_yn == "Y"? "N":"Y"; ?>');"><?php echo $row->display_yn == "Y"? "Blind":"Unlocking the Blind"; ?></a>
            </td>
          </tr>
        <?php
            }
          }else{
        ?>
        <tr>
          <td colspan="9">
            <?=no_contents('0')?>
          </td>
        </tr>
        <?php } ?>
      </tbody>
    </table>

	<?=$paging?>

<input type="hidden" name="page_num" id="page_num" value="<?=$page_num ?>">

<script type="text/javascript">

// 댓글 노출여부 상태 수정
function display_yn_mod_up(board_reply_idx, display_yn){

  var page_num = $('#page_num').val();

  var formData = {
    "board_reply_idx" : board_reply_idx,
    "display_yn" : display_yn
  };

  $.ajax({
    url      : "/<?=mapping('board')?>/display_yn_mod_up",
    type     : 'POST',
    dataType : 'json',
    async    : true,
    data     : formData,
    success: function(result){
      if(result.code == "0"){
        alert(result.code_msg);
      }else{
        alert(result.code_msg);
        reply_list_get(page_num);
      }
    }
  });
}


</script>
