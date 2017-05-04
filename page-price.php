<?php



get_header(); ?>
<div class="row price1">
    <div class="col-md-7"><h1>Прайс-лист всех услуг</h1></div>
    <div class="col-md-3"><h4>Cкачать файл Excel</h4></div>
    <div class="col-md-2"><a download href="<?php bloginfo('template_directory'); ?>/price.xlsx"><img src="<?php bloginfo('template_directory'); ?>/img/excel.png"></img></a></div>
</div>
<div id="primary" class="content-area">
<main id="main" class="site-main" role="main">


<article id="post-20" class="post-20 page type-page status-publish hentry">
<header class="entry-header">

</header><!-- .entry-header -->

	<div class="entry-content" style="display: none">
<link href="http://rem048.od.ua/wp-content/plugins/calculated-fields-form/templates/06/style.css?ver=pro" type="text/css" rel="stylesheet" property="stylesheet"><form name="cp_calculatedfieldsf_pform_1" id="cp_calculatedfieldsf_pform_1" action="?" method="post" enctype="multipart/form-data" class="cp_cff_clean" data-evalequations="1" autocomplete="on" novalidate="novalidate"><pre style="display:none;"><!--noptimize--><script>form_structure_1=[[{"form_identifier":"","name":"fieldname1","shortlabel":"","index":0,"ftype":"fdropdown","userhelp":"","userhelpTooltip":false,"csslayout":"","title":"\u0423\u0440\u043e\u0432\u0435\u043d\u044c \u0440\u0435\u043c\u043e\u043d\u0442\u0430","size":"medium","required":true,"choiceSelected":"","showDep":false,"choices":["\u041a\u043e\u0441\u043c\u0435\u0442\u0438\u0447\u0435\u0441\u043a\u0438\u0439 \u0440\u0435\u043c\u043e\u043d\u0442","\u041a\u0430\u043f\u0438\u0442\u0430\u043b\u044c\u043d\u044b\u0439","\u0415\u0432\u0440\u043e\u0440\u0435\u043c\u043e\u043d\u0442","\u042d\u043a\u0441\u043a\u043b\u044e\u0437\u0438\u0432\u043d\u044b\u0439 V.I.P."],"choicesVal":["1300","1800","2300","3600"],"choicesDep":[[],[],[],[]],"fBuild":{},"parent":""},{"form_identifier":"","name":"fieldname2","shortlabel":"","index":1,"ftype":"fdropdown","userhelp":"","userhelpTooltip":false,"csslayout":"","title":"\u0422\u0438\u043f \u043c\u0430\u0442\u0435\u0440\u0438\u0430\u043b\u043e\u0432","size":"medium","required":false,"choiceSelected":"First Choice - First Choice","showDep":false,"choices":["\u0421\u043e\u0431\u0441\u0442\u0432\u0435\u043d\u043d\u044b\u0435","\u0411\u0435\u0437 \u043c\u0430\u0442\u0435\u0440\u0438\u0430\u043b\u043e\u0432"],"choicesVal":["",""],"choicesDep":[[],[]],"fBuild":{},"parent":""},{"form_identifier":"","name":"fieldname4","shortlabel":"","index":2,"ftype":"ftextarea","userhelp":"","userhelpTooltip":false,"csslayout":"","title":"\u041f\u043b\u043e\u0449\u0430\u0434\u044c \u043a\u0432.\u043c.","predefined":"","predefinedClick":false,"required":true,"size":"small","minlength":"","maxlength":"","rows":"1","fBuild":{},"parent":""},{"form_identifier":"","name":"fieldname3","shortlabel":"","index":3,"ftype":"fCalculated","userhelp":"","userhelpTooltip":false,"csslayout":"","title":"\u0421\u0442\u043e\u0438\u043c\u043e\u0441\u0442\u044c \u0440\u0430\u0431\u043e\u0442","predefined":"","required":true,"size":"medium","toolbar":"default|mathematical","eq":"fieldname4*fieldname1","suffix":"","prefix":"","decimalsymbol":".","groupingsymbol":"","dependencies":[{"rule":"","complex":false,"fields":[""]}],"readonly":true,"hidefield":false,"fBuild":{},"parent":""}],{"0":{"title":"","description":"","formlayout":"left_aligned","formtemplate":"cp_cff_clean","evalequations":1,"autocomplete":1},"formid":"cp_calculatedfieldsf_pform_1"}];</script><!--/noptimize--></pre>
<div id="fbuilder">
<div id="fbuilder_1">
<div id="formheader_1"><div class="fform" id="field"><h2></h2><span></span></div></div>
<div id="fieldlist_1" class="left_aligned">
    <div class="pb0 pbreak" page="0">
          <div class="fields col-md-3" id="field_1-0">
               <label for="fieldname1_1">Уровень ремонта<span class="r">*</span></label>
               <div class="dfield">
                    <select id="fieldname1_1" name="fieldname1_1" class="field medium required valid">
                         <option value="1300" vt="Косметический ремонт">Косметический ремонт</option>
                         <option value="1800" vt="Капитальный">Капитальный</option>
                         <option value="2300" vt="Евроремонт">Евроремонт</option>
                         <option value="3600" vt="Эксклюзивный V.I.P.">Эксклюзивный V.I.P.</option>
                    </select>
                    <span class="uh"></span>
               </div>
                    <div class="clearer"></div>
                    <div class="clearer"></div>
          </div>
          <div class="fields col-md-3" id="field_1-1">
               <label for="fieldname2_1">Тип материалов</label>
               <div class="dfield">
                    <select id="fieldname2_1" name="fieldname2_1" class="field medium">
                         <option value="" vt="Собственные">Собственные</option>
                         <option value="" vt="Без материалов">Без материалов</option>
                    </select><span class="uh"></span>
               </div>
               <div class="clearer"></div>
               <div class="clearer"></div>
          </div>
          <div class="fields col-md-3" id="field_1-2">
               <label for="fieldname4_1">Площадь кв.м.<span class="r">*</span></label>
               <div class="dfield">
                    <textarea rows="1" id="fieldname4_1" name="fieldname4_1" minlength="" maxlength="" class="field small required" data-previousvalue="">
                          </textarea><span class="uh"></span>
               </div>
               <div class="clearer"></div>
          </div>
          <div class="fields col-md-3" id="field_1-3" style="">
               <label>Стоимость работ<span class="r">*</span></label>
               <div class="dfield">
                    <input id="fieldname3_1" name="fieldname3_1" readonly="" class="codepeoplecalculatedfield field medium required valid" type="text" value="" dep="" notdep=""><span class="uh"></span></div>
                    <div class="clearer"></div>
          </div>
     </div>
</div>
</div>
</div>
<div class="clearer"></div>
</form>
<script> if( typeof jQuery != 'undefined' ) var jQueryBK = jQuery.noConflict(); </script>
<script type="text/javascript" src="http://rem048.od.ua/wp-content/plugins/calculated-fields-form/../../../wp-includes/js/jquery/jquery.js"></script>
<script type="text/javascript" src="http://rem048.od.ua/wp-content/plugins/calculated-fields-form/../../../wp-includes/js/jquery/ui/core.min.js"></script>
<script type="text/javascript" src="http://rem048.od.ua/wp-content/plugins/calculated-fields-form/../../../wp-includes/js/jquery/ui/datepicker.min.js"></script>
<script type="text/javascript" src="http://rem048.od.ua/wp-content/plugins/calculated-fields-form/../../../wp-includes/js/jquery/ui/widget.min.js"></script>
<script type="text/javascript" src="http://rem048.od.ua/wp-content/plugins/calculated-fields-form/../../../wp-includes/js/jquery/ui/position.min.js"></script>
<script type="text/javascript" src="http://rem048.od.ua/wp-content/plugins/calculated-fields-form/../../../wp-includes/js/jquery/ui/tooltip.min.js"></script>
<script type="text/javascript" src="http://rem048.od.ua/wp-content/plugins/calculated-fields-form/../../../wp-includes/js/jquery/ui/mouse.min.js"></script>
<script type="text/javascript" src="http://rem048.od.ua/wp-content/plugins/calculated-fields-form/../../../wp-includes/js/jquery/ui/slider.min.js"></script>
<script>
if( typeof fbuilderjQuery == 'undefined') var fbuilderjQuery = jQuery.noConflict( );
if( typeof jQueryBK != 'undefined' ) jQuery = jQueryBK;
</script>
<script type="text/javascript" src="http://rem048.od.ua/wp-content/plugins/calculated-fields-form/js/jQuery.stringify.js"></script>
<script type="text/javascript" src="http://rem048.od.ua/wp-content/plugins/calculated-fields-form/js/jquery.validate.js"></script>
<script type="text/javascript" src="http://rem048.od.ua/wp-content/plugins/calculated-fields-form/js/cache/all.js?ver=1.0.123"></script>

<script type="text/javascript">
/* <![CDATA[ */
var cp_calculatedfieldsf_fbuilder_config_1={"obj":{"pub":true,"identifier":"_1","messages":{"required":"This field is required.","email":"Please enter a valid email address.","datemmddyyyy":"Please enter a valid date with this format(mm\/dd\/yyyy)","dateddmmyyyy":"Please enter a valid date with this format(dd\/mm\/yyyy)","number":"Please enter a valid number.","digits":"Please enter only digits.","max":"Please enter a value less than or equal to {0}.","min":"Please enter a value greater than or equal to {0}.","previous":"Previous","next":"Next","pageof":"Page {0} of {0}","minlength":"Please enter at least {0} characters.","maxlength":"Please enter no more than {0} characters.","equalTo":"Please enter the same value again."}}} /* ]]&gt; */
</script>

</div><!-- .entry-content -->

<!-- .entry-footer -->
</article><!-- #post-## -->
</main></div>
<!-- #main -->

    <ul class="accordion">
  <li class="accordion__item js-contentToggle ">
	  <div class="accordion__trigger js-contentToggle__trigger">Демонтажные работы</div>
    <div class="accordion__content is-hidden js-contentToggle__content">
      <div class="price-list_table">


               <?php $data = wp_excel_cms_get("demontag"); ?>
 <div class="container">
	 <div class="row price-title">
		   <div class="col-md-6 col-xs-5">Цены на основные виды работ</div>
		    <div class="col-md-2 col-xs-2">Eд. изм.</div>
			<div class="col-md-1 col-xs-1" >Цена(грн.)</div>
			<div class="col-md-1 col-xs-1">Кол-во</div>
			<div class="col-md-2 col-xs-2" >Сумма</div>
	   </div>
		  </div>
  <?php foreach($data as $entry): ?>
   <div class="container price-cell">

	   <div class="row ">
			<div class="col-md-6 col-xs-5"><?php echo $entry[0]; ?></div>
			<div class="col-md-2 col-xs-2"><?php echo $entry[1]; ?></div>
			<div class="col-md-1 col-xs-1 value_calc" ><?php echo $entry[2]; ?></div>
			<div class="col-md-1 col-xs-1"><input type="text"  value="" class="number_calc" name="number_calc" size="3"></div>
			<div class="col-md-2 col-xs-2 result" ><input type="text"  value="" class="result" size="3"></div>
		</div>
	</div>
   <?php endforeach; ?>
      </div>
    </div>
  </li>
  <li class="accordion__item js-contentToggle isClose">
    <div class="accordion__trigger js-contentToggle__trigger">Общестроительные работы</div>
    <div class="accordion__content is-hidden js-contentToggle__content">
		<div class="price-list_table">

               <?php $data = wp_excel_cms_get("stroika"); ?>

	<div class="container">
	 <div class="row price-title">
		   <div class="col-md-6 col-xs-5">Цены на основные виды работ</div>
		    <div class="col-md-2 col-xs-2">Eд. изм.</div>
			<div class="col-md-1 col-xs-1" >Цена(грн.)</div>
			<div class="col-md-1 col-xs-1">Кол-во</div>
			<div class="col-md-2 col-xs-2" >Сумма</div>
	   </div>
		  </div>
  <?php foreach($data as $entry): ?>
   <div class="container price-cell">
	   <div class="row">
			<div class="col-md-6 col-xs-5"><?php echo $entry[0]; ?></div>
			<div class="col-md-2 col-xs-2"><?php echo $entry[1]; ?></div>
			<div class="col-md-1 value_calc col-xs-1" ><?php echo $entry[2]; ?></div>
			<div class="col-md-1 col-xs-1"><input type="text"  value="" class="number_calc" name="number_calc" size="3"></div>
			<div class="col-md-2 col-xs-2 result"><input type="text"  value="" class="result" size="3"></div>
		</div>
	</div>
   <?php endforeach; ?>
      </div>
    </div>
  </li>
  <li class="accordion__item js-contentToggle">
    <div class="accordion__trigger js-contentToggle__trigger" >Отделочные работы</div>
    <div class="accordion__content is-hidden js-contentToggle__content">
		<div class="price-list_table">
               <?php $data = wp_excel_cms_get("otdelochnie"); ?>

<div class="container">
	 <div class="row price-title">
		   <div class="col-md-6 col-xs-5">Цены на основные виды работ</div>
		    <div class="col-md-2 col-xs-2">Eд. изм.</div>
			<div class="col-md-1 col-xs-1" >Цена(грн.)</div>
			<div class="col-md-1 col-xs-1">Кол-во</div>
			<div class="col-md-2 col-xs-2" >Сумма</div>
	   </div>
		  </div>
  <?php foreach($data as $entry): ?>
   <div class="container price-cell">
	   <div class="row">
			<div class="col-md-6 col-xs-5"><?php echo $entry[0]; ?></div>
			<div class="col-md-2 col-xs-2"><?php echo $entry[1]; ?></div>
			<div class="col-md-1 col-xs-1 value_calc" ><?php echo $entry[2]; ?></div>
			<div class="col-md-1 col-xs-1"><input type="text"  value="" class="number_calc" name="number_calc" size="3"></div>
			<div class="col-md-2 col-xs-2 result" ><input type="text"  value="" class="result" size="3"></div>
		</div>
	</div>
   <?php endforeach; ?>
      </div>
    </div>
  </li>
  <li class="accordion__item js-contentToggle">
    <div class="accordion__trigger js-contentToggle__trigger">Электромонтажные работы</div>
    <div class="accordion__content is-hidden js-contentToggle__content">
		<div class="price-list_table">
               <?php $data = wp_excel_cms_get("electromontag"); ?>

<div class="container">
	 <div class="row price-title">
		   <div class="col-md-6 col-xs-5">Цены на основные виды работ</div>
		    <div class="col-md-2 col-xs-2">Eд. изм.</div>
			<div class="col-md-1 col-xs-1" >Цена(грн.)</div>
			<div class="col-md-1 col-xs-1">Кол-во</div>
			<div class="col-md-2 col-xs-2" >Сумма</div>
	   </div>
		  </div>
  <?php foreach($data as $entry): ?>
   <div class="container price-cell">
	   <div class="row">
			<div class="col-md-6 col-xs-5"><?php echo $entry[0]; ?></div>
			<div class="col-md-2 col-xs-2"><?php echo $entry[1]; ?></div>
			<div class="col-md-1 col-xs-1 value_calc" ><?php echo $entry[2]; ?></div>
			<div class="col-md-1 col-xs-1"><input type="text"  value="" class="number_calc" name="number_calc" size="3"></div>
			<div class="col-md-2 col-xs-2 result" ><input type="text"  value="" class="result" size="3"></div>
		</div>
	</div>
   <?php endforeach; ?>
      </div>
    </div>
  </li>
  <li class="accordion__item js-contentToggle">
    <div class="accordion__trigger js-contentToggle__trigger">Сантехнические работы</div>
    <div class="accordion__content is-hidden js-contentToggle__content">
		<div class="price-list_table">

               <?php $data = wp_excel_cms_get("santechnika"); ?>
<div class="container">
	 <div class="row price-title">
		   <div class="col-md-6 col-xs-5">Цены на основные виды работ</div>
		    <div class="col-md-2 col-xs-2">Eд. изм.</div>
			<div class="col-md-1 col-xs-1" >Цена(грн.)</div>
			<div class="col-md-1 col-xs-1">Кол-во</div>
			<div class="col-md-2 col-xs-2" >Сумма</div>
	   </div>
		  </div>

  <?php foreach($data as $entry): ?>
   <div class="container price-cell">
	   <div class="row">
			<div class="col-md-6 col-xs-5"><?php echo $entry[0]; ?></div>
			<div class="col-md-2 col-xs-2"><?php echo $entry[1]; ?></div>
			<div class="col-md-1 col-xs-1 value_calc" ><?php echo $entry[2]; ?></div>
			<div class="col-md-1 col-xs-1"><input type="text"  value="" class="number_calc" name="number_calc" size="2"></div>
			<div class="col-md-2 col-xs-2 result" ><input type="text"  value="" class="result" size="3"></div>
		</div>
	</div>
   <?php endforeach; ?>
      </div>
    </div>
  </li>
  <li class="accordion__item js-contentToggle">
    <div class="accordion__trigger js-contentToggle__trigger">Плиточные работы</div>
    <div class="accordion__content is-hidden js-contentToggle__content">
		<div class="price-list_table">
               <?php $data = wp_excel_cms_get("plitka"); ?>

<div class="container">
	 <div class="row">
		   <div class="col-md-6 col-xs-5">Цены на основные виды работ</div>
		    <div class="col-md-2 col-xs-2">Eд. изм.</div>
			<div class="col-md-1 col-xs-1" >Цена(грн.)</div>
			<div class="col-md-1 col-xs-1">Кол-во</div>
			<div class="col-md-2 col-xs-2" >Сумма</div>
	   </div>
		  </div>
  <?php foreach($data as $entry): ?>
   <div class="container price-cell">
	   <div class="row">
			<div class="col-md-6 col-xs-5"><?php echo $entry[0]; ?></div>
			<div class="col-md-2 col-xs-2"><?php echo $entry[1]; ?></div>
			<div class="col-md-1 col-xs-1 value_calc" ><?php echo $entry[2]; ?></div>
			<div class="col-md-1 col-xs-1"><input type="text"  value="" class="number_calc" name="number_calc" size="2"></div>
			<div class="col-md-2 col-xs-2 result" ><input type="text"  value="" class="result" size="3"></div>
		</div>
	</div>
   <?php endforeach; ?>
      </div>
    </div>
  </li>
</ul>
 <!--<?php $data = wp_excel_cms_get("pricelist"); ?>-->


<!--<?php foreach($data as $entry): ?>-->
<!--<div class="point"><div class="row ">-->
<!--                <div class="col-md-8 col-sm-8 col-xs-6"><?php echo $entry[0]; ?>-->
<!--</div>-->
<!--<div class="col-md-2 col-sm-2 col-xs-3"><?php echo $entry[1]; ?></div>-->
<!--<div class="col-md-2 col-sm-2 col-xs-3"><?php echo $entry[2]; ?></div>-->
<!--</div>-->


<!-- </div>-->

<!--<?php endforeach; ?>-->



<div class="row calc-result">
	<p >Итоговая стоимость: <span class="summa-result">0 грн</span></p></p>
	<div id="calculate">Рассчитать </div>

	</div>


<div class="row price2">
    <div class="col-md-6 col-sm-6 col-xs-6"><h1>Специальное предложение 99$</h1></div>
    <div class="col-md-2 col-xs-offset-4 col-sm-2 col-xs-2"><a download href="<?php bloginfo('template_directory'); ?>/99$.xlsx"><img src="<?php bloginfo('template_directory'); ?>/img/excel.png"></img></a></div>
</div>
<?php
get_footer();