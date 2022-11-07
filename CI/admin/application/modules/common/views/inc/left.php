<?php $arr_right = explode(',',$this->admin_right); ?>


<div id="wrapper">

  <!-- Navigation : s-->
  <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">

    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/member_v_1_0_0"><?=SERVICE_NAME;?> Centralized management</a>
    </div>
      <li class="dropdown"><a href="/admin_password/pw_mod"><i class="fa fa-cog"></i> Change password</a></li>
      <li class="dropdown"><a href="javascript:void(0)" onclick="logout_action()"><i class="fa fa-power-off"></i> Log out</a></li>
    </ul>

    <script type="text/javascript">
      function logout_action(){
        if (!confirm("Are you sure you want to log out?")) {
          return;
        }
        location.href="/logout";
      }
    </script>

<script type="text/javascript">

</script>

    <div class="collapse navbar-collapse navbar-ex1-collapse">

      <!-- side-nav : s -->
      <ul class="nav navbar-nav side-nav">

        <li class="side_nav_top">
          <p><strong><?=$this->admin_name?></strong> <span> Welcome.</span></p>
          <p><span>ID : <?=$this->admin_id?></span></p>
        </li>

       <?php if(in_array('0', $arr_right)){?>
        <!-- section 1 : 회원관리 -->
        <li <?php if($this->uri->segment(1)==mapping('member')){ echo "class='active';";}?>>
          <a href="/<?=mapping('member')?>">
            <i class="fa fa-user"></i>
            <span>Member management</span>
          </a>
        </li>
        <!-- section 1 : 회원관리 -->
        <?}?>

        <?php if(in_array('1', $arr_right)){?>
        <!-- section 2 : 포인트관리 -->
        <li <?php if($this->uri->segment(1)==mapping('member_point')){ echo "class='active';";}?>>
          <a href="/<?=mapping('member_point')?>">
            <i class="fa fa-bell"></i>
            <span>Point Management</span>
          </a>
        </li>
        <!-- section 2 : 포인트관리 -->
        <?}?>

        <?php if(in_array('2', $arr_right)){?>
        <!-- section 3 : 상품관리 -->
        <li <?php if($this->uri->segment(1)==mapping('product')){ echo "class='active';";}?>>
          <a href="/<?=mapping('product')?>">
            <i class="fa fa-bookmark"></i>
            <span>Product management</span>
          </a>
        </li>
        <!-- section 3 : 상품관리 -->
        <?}?>

        <?php if(in_array('3', $arr_right)){?>
        <!-- section 4 : 커뮤니티관리 -->
        <li class="<?php if($this->uri->segment(1)==mapping('board')) echo "active";?>">
          <a href="/<?=mapping('board')?>">
            <i class="fa fa-comments"></i>
            <span>Community Management</span>
          </a>
        </li>
        <!-- section 4 : 커뮤니티관리 -->
        <?}?>

        <?php if(in_array('4', $arr_right)){?>
        <!-- section 5 : 신고 관리 -->
        <li class="<?php if($this->uri->segment(1)==mapping('product_report')|| $this->uri->segment(1)==mapping('board_reply_report')|| $this->uri->segment(1)==mapping('board_report')|| $this->uri->segment(1)==mapping('ticket_product')) echo "active";?>">
          <a href="#" data-toggle="collapse" data-target="#admin_report">
            <i class="fa fa-bell-slash"></i>
            <span>Reporting Management</span> &nbsp;<i class="fa fa-caret-down"></i>
          </a>

          <ul id="admin_report" class="collapse <?php if($this->uri->segment(1)==mapping('product_report')|| $this->uri->segment(1)==mapping('board_reply_report')|| $this->uri->segment(1)==mapping('board_report')  ){ echo "in";}?>" aria-expanded="true">
            <li><a href="/<?=mapping('product_report');?>">Product declaration management</a></li>
            <li><a href="/<?=mapping('board_report');?>">Community Reporting Management</a></li>
            <li><a href="/<?=mapping('board_reply_report');?>">Community comment reporting management</a></li>
          </ul>
        </li>
        <!-- section 5 : 신고 관리 -->
        <?}?>

        <?php if(in_array('5', $arr_right)){?>
        <!-- section 6 : 추천검색어관리 -->
        <li class="<?php if($this->uri->segment(1)==mapping('recommend')) echo "active";?>">
          <a href="/<?=mapping('recommend')?>">
            <i class="fa fa-check"></i>
            <span>Manage recommended search words</span>
          </a>
        </li>
        <!-- section 6 : 추천검색어관리 -->
        <?}?>

        <?php if(in_array('6', $arr_right)){?>
        <!-- section 7 : 금지어 관리 -->
        <li class="<?php if($this->uri->segment(1)==mapping('forbidden_search')) echo "active";?>">
          <a href="/<?=mapping('forbidden_search')?>">
            <i class="fa fa-ban"></i>
            <span>Managing Prohibited Words</span>
          </a>
        </li>
        <!-- section 7 : 금지어 관리 -->
        <?}?>

        <?php if(in_array('7', $arr_right)){?>
        <!-- section 8 : 통계 -->
        <li class="<?php if($this->uri->segment(1)==mapping('statistic')) echo "active";?>">
          <a href="/<?=mapping('statistic')?>">
            <i class="fa fa-calculator"></i>
            <span>Statistics</span>
          </a>
        </li>
        <!-- section 8 : 통계 -->
        <?}?>

        <?php if(in_array('8', $arr_right)){?>
        <!-- section 9 : 배너관리 -->
        <li class="<?php if($this->uri->segment(1)==mapping('banner')) echo "active";?>">
          <a href="/<?=mapping('banner')?>">
            <i class="fa fa-align-justify"></i>
            <span>Banner management</span>
          </a>
        </li>
        <!-- section 9 : 배너관리 -->
        <?}?>

        <?php if(in_array('9', $arr_right)){?>
        <!-- section 10 : 카테고리 관리 -->
        <li class="<?php if($this->uri->segment(1)==mapping('category_management')) echo "active";?>">
          <a href="/<?=mapping('category_management')?>">
            <i class="fa fa-book"></i>
            <span>Manage Categories</span>
          </a>
        </li>
        <!-- section 10 : 카테고리 관리  -->
        <?}?>

        <?php if(in_array('10', $arr_right)){?>
        <!-- section 11 : 고객센터 -->
        <li class="<?php if($this->uri->segment(1)==mapping('notice') || $this->uri->segment(1)==mapping('faq')|| $this->uri->segment(1)==mapping('qa')) echo "active";?>">
          <a href="#" data-toggle="collapse" data-target="#admin_notice">
            <i class="fa fa-comments"></i>
            <span>Customer Service</span> &nbsp;<i class="fa fa-caret-down"></i>
          </a>

          <ul id="admin_notice" class="collapse <?php if($this->uri->segment(1)==mapping('notice') || $this->uri->segment(1)==mapping('faq')|| $this->uri->segment(1)==mapping('qa')){ echo "in";}?>" aria-expanded="true">
            <li><a href="/<?=mapping('notice');?>">Manage notifications</a></li>
            <li><a href="/<?=mapping('faq');?>">FAQ Management</a></li>
            <li><a href="/<?=mapping('qa');?>">1:1 Contact Management</a></li>
          </ul>
        </li>
        <!-- section 11 : 고객센터 -->
        <?}?>

        <?php if(in_array('11', $arr_right)){?>
        <!-- section 12 : 약관 관리-->
        <li class="<?php if($this->uri->segment(1)==mapping('terms')) echo "active";?>">
          <a href="#"  data-toggle="collapse" data-target="#admin_terms">
            <i class="fa fa-bookmark"></i>
            <span>Terms and Conditions Management</span>
          </a>
          <ul id="admin_terms" class="collapse <?php if($this->uri->segment(1)==mapping('terms')) echo "in";?>" aria-expanded="true">
            <li><a href="/<?=mapping('terms');?>">Terms and Conditions Management</a></li>
          </ul>
        </li>
        <!-- section 12 : 약관 관리-->
        <?}?>

        <?php if(in_array('12', $arr_right)){?>
        <!-- section 13 : 관리자 관리 -->
        <li class="<?php if($this->uri->segment(1)==mapping('suboperator')) echo "active";?>">
          <a href="#"  data-toggle="collapse" data-target="#admin_suboperator">
            <i class="fa fa-address-card"></i>
            <span>Administrator Management</span>
          </a>
          <ul id="admin_suboperator" class="collapse <?php if($this->uri->segment(1)==mapping('suboperator')) echo "in";?>" aria-expanded="true">
            <li><a href="/<?=mapping('suboperator');?>">Administrator Management</a></li>
          </ul>
        </li>
        <!-- section 13 : 관리자 관리 -->
        <?}?>

      </ul>
      <!-- side-nav : e -->

    </div>
  </nav>
  <!-- Navigation : e -->

  <div id="page-wrapper">
