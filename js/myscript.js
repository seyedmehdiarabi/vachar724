$(document).ready(function(){$("#tab2").hide(),$("#tab3").hide(),$("#tab4").hide(),$("#tab5").hide(),$("#tab6").hide(),$("#tab7").hide(),$("#tab8").hide(),$(".tabs-menu a").click(function(t){t.preventDefault();var a=$(this).attr("href");$(".tab-grid").not(a).css("display","none"),$(a).fadeIn("slow")})});