<div class="table-responsive">

  <div class="row table_title">
    <div class="col-lg-6"> &nbsp;<i class="fa fa-check" aria-hidden="true"></i> &nbsp;Search Results : <strong><?=$result_list_count?></strong> Case</div>
    <div class="col-lg-6 text-right"> &nbsp;
      <a class="btn btn-success" href="javascript:void(0)" onClick="do_excel_down()">Download Excel</a>
    </div>
  </div>

    <table class="table table-bordered">
      <thead>
        <tr>
          <th width="50">No</th>
          <th width="100">Namw</th>
          <!-- <th width="100">카테고리</th> -->
          <th width="*">내용</th>
          <!-- <th width="150">주제</th> -->
          <th width="60">Number of recommendations</th>
          <th width="60">Number of Scrap </th>
          <th width="60">Number of views</th>
          <th width="60">Number of reported</th>
          <th width="60">Comments &<br>replies</th>
          <th width="100">BEST Settings</th>
          <th width="80">State</th>
          <th width="150">Date and time of registration</th>
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
            <!-- <td>카테고리 ----</td> -->
            <td ><a href="/<?=mapping('board')?>/board_detail?board_idx=<?=$row->board_idx?>&history_data=<?=$history_data?>" style="display:block;display:-webkit-box;-webkit-line-clamp:2; -webkit-box-orient:vertical; overflow:hidden;text-overflow:ellipsis;"><?=$row->contents?></a></td>
            <!-- <td>주제--</td> -->
            <td><?=$row->recommend_cnt?></td>
            <td><?=$row->scrap_cnt?></td>
            <td><?=$row->view_cnt?></td>
            <td><?=$row->report_cnt?></td>
            <td><?=$row->reply_cnt?></td>
            <td>
              <?php if($row->best_yn == "N"){ ?>
                <label class="switch">
                  <input type="checkbox" onchange="best_yn_mod_up(<?=$row->board_idx?>, 'Y');">
                  <span class="check_slider"></span>
                </label>
              <?php }else if($row->best_yn == "Y"){ ?>
                <label class="switch">
                  <input type="checkbox" onchange="best_yn_mod_up(<?=$row->board_idx?>, 'N');" checked>
                  <span class="check_slider"></span>
                </label>
              <?php } ?>
            </td>
            <td><?php if($row->display_yn == 'Y'){echo "Publishing";} elseif($row->display_yn == 'N'){echo "Blind";}?></td>
            <td><?=$row->ins_date?></td>
          </tr>
        <?php
            }
          }else{
        ?>
        <tr>
          <td colspan="15">
            <?=no_contents('0')?>
          </td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
	<?=$paging?>
</div>
