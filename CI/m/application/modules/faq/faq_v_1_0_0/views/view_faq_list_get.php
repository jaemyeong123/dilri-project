
<?php
$display =(count($result_list)<1)? "block":"none";

if(!empty($result_list)){
	foreach($result_list as $row){

		switch ($this->nationcode)
		 {
			case 'us':
					$row->title = $row->title_us;
					$row->contents = $row->contents_us;
				break;
				case 'kr':
						$row->title = $row->title_kr;
						$row->contents = $row->contents_kr;
					break;
					case 'bd':
						$row->title = $row->title_bd;
						$row->contents = $row->contents_bd;
						break;
		}
?>

<li class="accordion">
	<p class="trigger"><img src="/images/i_question.png" class="question"><?=$row->title?></p>
	<div class="answer_wrap panel">
		<?=nl2br($row->contents)?>
	</div>
</li>

<?php
		}
	}
?>

<script type="text/javascript">
	$(document).ready(function(){
		$("#total_block").val('<?=$total_block ?>');
	});

</script>
