<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript" src="http://code.jquery.com/jquery-2.0.3.js"></script>
<script> 
$(document).ready(function(){ 
  $.ajax({ 
  type: "GET",//su dung phuong thuc get sub mit lem 
  url: "data.xml",//doc trang nhat nghe.xml 
  dataType: "xml",// khai bao voi trinh duyet dang du lieu la xml 
  success: function(xml) {//du lieu tra ve do vao bien xml 
         //xu ly dữ liệu dổ về 
         $(xml).find('khaigiang').each(function(){//tim các element khaigiang trong data xml  
     		var id = $(this).attr('id');//truy xuất vao doi tuong id  va gan vao bien id 
      	var time = $(this).find('time').text();//tim cac element lop trong doi tuong hien hanh 
      	vartieude = $(this).find('tieude').text();
      	var note = $(this).find('note').text();//tim cac element gia trong doi tuong hien hanh 
      	var kieubao = $(this).find('kieubao').text();
      	var thoigianbao = $(this).find('thoigianbao').text();
        	//xuat du lieu
        	var data = "<div>";//tao 1 the div de do du lieu ra 
      	  data +=     "<p>"+lop + "</p>";       
      	  data +=     "<p>"+ gia + "</p>";       
        	data += "</div>";//alert(data); 
      	  $(data).appendTo('#wrap'); 
    		}); 
        } 
    }); 
}); 
</script>

<?php
