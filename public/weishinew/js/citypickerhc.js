function citypicker(){
		
	console.log(JSON.stringify(LAreaData,null," "))
	var cityindex = ["A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z"];
	//打印城市
	for(var e = 0;e<cityindex.length;e++){
		var $cityindex = "<div" + " "+ "num =" + cityindex[e] +">"+"<h1 class = 'cityindex'"+" " + " "+"hidden>" + cityindex[e]  +"</h1>" + "</div>";
		var $creatindex = "<a"+" "+" style = 'display:none;'>"+cityindex[e]+"</a>";
		$('.citybox').append($cityindex)
		$(".indexBar").append($creatindex);
		for(var i = 0;i<LAreaData.length;i++){
			
			if(LAreaData[i].en_name.substring(0, 1)==cityindex[e]){
				var $creatcity = "<p class = 'cityper'"+ "name = '" +LAreaData[i].en_name.toLowerCase()+"'" +" "+"text='"+ LAreaData[i].cityname+"'"+">" + LAreaData[i].cityname + "</p>";
				$(".cityindex").eq(e).show();
				$(".indexBar a").eq(e).show();
				$(".cityindex").eq(e).after($creatcity);
			}
		}
	}
	$(".touchcity").show();
//	$(function(){
		//选择城市
		$(".cityper").click(function(){
			console.log($(this).attr("name"));
			$("#cityname").text($(this).text());
			$(".touchcity").hide()
		})
		//导航触摸滑动
		$(".indexBar").on("touchmove", function (e) {
            e.preventDefault();
            var touch = e.originalEvent.touches[0];
            var pos = {"x": touch.pageX, "y": touch.pageY};
            var x = pos.x, y = pos.y;
            $(this).addClass("active");
            $(this).find("a").each(function (i, item) {
                var offset = $(item).offset();
                var width = $(this).width();
                var height = $(this).height();
                var left = offset.left, top = offset.top;
                if (x > left && x < (left + width) && y > top && y < (top + height)) {
                	var letter = $(item).text();
                    $(".locate").show()
                    $(".locate").html(letter)
                    $(".citybox>div").hide();
                    $(".citybox>div[num="+letter+"]").show()
                }
            });
        });
        //触摸结束
        $(".indexBar").on("touchend",function(){
        	$(this).removeClass("active");
        	$(".locate").hide();
        })
        //直接点击
		$(".indexBar a").click(function(){
			$(".citybox>div").hide();
            $(".citybox>div[num="+$(this).text()+"]").show()
		})
		//城市搜索
		$("#cityipt").keyup(function(){
			var myvalue = $(this).val();
			if(myvalue!==""){
				$(".cityindex").hide();
				$(".cityper").hide();
				$(".cityper[name*="+myvalue+"]").show();
				$(".cityper[text*="+myvalue+"]").show()
			}else{
				$(".cityindex").show();
				$(".cityper").show();
			}
		})
		
		
		
}