<?php
  $filename="커뮤니티 관리_".date('Ymd');
	header( "Content-type: application/vnd.ms-excel; charset=utf-8" );
	header( "Expires: 0" );
	header( "Cache-Control: must-revalidate, post-check=0,pre-check=0" );
	header( "Pragma: public" );
	header( "Content-Disposition: attachment; filename=$filename.xls" );
?>

<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">

<table class="table table-bordered">
	<thead>
    <tr>
      <th width="50">No</th>
      <th width="100">Name</th>
      <!-- <th width="100">카테고리</th> -->
      <th width="*">Content</th>
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
    		foreach ($result_list as $row){
    ?>
    <tr>
      <td><?=$no--?></td>
      <td><?=$row->member_name?></td>
      <!-- <td>카테고리 ----</td> -->
      <td ><?=$row->contents?></td>
      <!-- <td>주제--</td> -->
      <td><?=$row->recommend_cnt?></td>
      <td><?=$row->scrap_cnt?></td>
      <td><?=$row->view_cnt?></td>
      <td><?=$row->report_cnt?></td>
      <td><?=$row->reply_cnt?></td>
      <td>
        <?php if($row->best_yn == "N"){ ?>
          Best et al
        <?php }else if($row->best_yn == "Y"){ ?>
          Best
        <?php } ?>
      </td>
      <td><?php if($row->display_yn == 'Y'){echo "Publishing";} elseif($row->display_yn == 'N'){echo "Blind";}?></td>
      <td><?=$row->ins_date?></td>
    </tr>
		<?php
		    }
			}
		?>
	</tbody>
</table>
