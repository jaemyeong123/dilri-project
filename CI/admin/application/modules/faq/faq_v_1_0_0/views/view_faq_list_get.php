<div class="row table_title">
	<div class="col-lg-6"> &nbsp;<i class="fa fa-check" aria-hidden="true"></i> &nbsp;search result. : <strong><?=number_format($result_list_count)?></strong> Case</div>
	<div class="col-lg-6 text-right"> &nbsp;<a href="/<?=mapping('faq')?>/faq_reg" class="btn btn-success">Registration</a></div>
</div>

<form name="form_default" id="form_default" method="post">
	<table class="table table-bordered">
	  <thead>
	    <tr>
	      <th width="50">No</th>
				<th width="100">Classification</th>
	      <th width="*">Title</th>
	      <th width="200">Registration date</th>
	    </tr>
	  </thead>
	  <tbody>
	    <?php
	      if(!empty($result_list)){
	        foreach($result_list as $row){
	    ?>
	      <tr>
	        <td>
	          <?=$no--?>
	        </td>
					<td>
						<?=$this->global_function->get_faq_type($row->faq_type)?>
	        </td>
	        <td>
	          <a href="/<?=mapping('faq')?>/faq_detail?faq_idx=<?=$row->faq_idx?>&history_data=<?=$history_data?>"><?=$row->title_kr?></a>
	        </td>
	        <td>
	         <?=$this->global_function->date_Ymd_hyphen($row->ins_date)?>
	        </td>
	      </tr>
	    <?php
	        }
	      }else{
	    ?>
			<tr>
	      <td colspan="3">
	        <?=no_contents('0')?>
	      </td>
	    </tr>
	    <?php
	      }
	    ?>

	  </tbody>
	</table>
</form>

<?=$paging?>
