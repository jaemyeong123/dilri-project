<div class="table-responsive">

  <div class="row table_title">
    <div class="col-lg-6"> &nbsp;<i class="fa fa-check" aria-hidden="true"></i> &nbsp;Search Results : <strong><?=$result_list_count?></strong> Case</div>
  </div>

  <form name="form_default" id="form_default" method="post">
    <table class="table table-bordered">
      <thead>
        <tr>
          <th width="50">No</th>
          <th width="100">Reporting<br />Member Name</th>
          <th width="100">Reporting<br />Member ID</th>
          <th width="100">Reported<br />Member Name</th>
          <th width="100">Reported<br />Member ID</th>
          <th width="100">Report tarImport post</th>
          <th width="*">Reasons for reporting</th>
          <th width="100">Date of reporting</th>
          <th width="100">Publication Status</th>
        </tr>
      </thead>
      <tbody>
        <?php
          if(!empty($result_list)){
            foreach($result_list as $row){
          		switch ($row->report_type) {
          			case '0' : $report_type ='Abusive and blaming post '; break;
                case '1' : $report_type='lewd writing'; break;
          			case '2' : $report_type='Other bad manners'; break;
          			}
        ?>
          <tr>
            <td><?=$no--?></td>
            <td><?=$row->member_name?></td>
            <td><?=$row->member_id?></td>
            <td><a href="/<?=mapping('member')?>/member_detail?member_idx=<?=$row->reported_member_idx?>&history_data=<?=$history_data?>"> <?=$row->reported_member_name?></a>
            </td>
            <td><?=$row->reported_member_id?></td>
            <td>
              <button type="button" class="btn btn-primary" onclick="location.href='/<?=mapping('board')?>/board_detail?board_idx=<?=$row->board_idx?>' ">Read the original comments</button>
            </td>
            <td><?=$row->report_contents?></td>
            <td><?=$this->global_function->date_Ymd_hyphen($row->ins_date)?></td>
            <td><?=($row->display_yn=='Y')?'Publishing':'Blind'?></td>
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
  </form>
	<?=$paging?>
</div>
