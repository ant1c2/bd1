<!-- общий заголовок страниц -->

<div id="high_div">
 	<span id="obj_get_id" class="hidden"> <!-- параметр гет запроса -->
 		<?php
      $obj_get_txt=get_op_obj();
 			echo $obj_get_txt;
 		?>
	</span>

  <span id="syn_now_id" class="hidden"> <!-- синоним текущего объекта ??? надо еще имя файла выделить !!! ?? где оно выделяется ??-->
    <?php
      echo get_synonym_gl($obj_get_txt);
    ?>
  </span>

 	<span id="dir_get_id" class="hidden">
 		<?php
 			echo get_dir();
 		?>
	</span>

  	<script>
    	$("#high_div").css("width", String(document.body.clientWidth-20)+"px");
  	</script>

  	<img id="pict_logo" src="pict/pict_logo1.jpg?<?php echo time(); ?>" width="20" height="20">

  	<!-- <header id="zagl_div_id" class="txt_norm"> -->
 	<span id="zagl_div_id" class="txt_norm">
    	FFF СЛОГАН СЛОГАН СЛОГА СЛОГАН СЛОГАН СЛОГАН
	</span>
	<!-- </header> -->
</div>
