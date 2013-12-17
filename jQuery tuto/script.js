/*$(document).ready(function(){
    $('#menu').accordion();
});
*/
$(document).ready(function(){
					//页面载入时
					$('.tabBody:not(:first)').hide();//隐藏除了第一个主内容外的所有内容
					$('.tabs li:first').addClass('active');//给第一个tabs标题项加上'active'类
					//给列tabs的列表项绑定click事件
					$('.tabs li').click(function(){
						//当前项加上‘active’类，同时有'active'的相邻项移除'active'类
						$(this).addClass('active').siblings('li.active').removeClass('active');
						//隐藏所有主内容
						$('.tabBody').hide();
						//查找tabs标题中a元素的href属性值，以确定激活tabs对应的内容
						var activeTab = $(this).find('a').attr('href');
						//显示当前项的主内容
						$(activeTab).fadeIn('slow');
						return false;
					});
$(".colonne").multiselect({	
   selectedText: " colonne1 (#/#)"
});
$(".colonne").multiselect({	
   noneSelectedText: " 12312321"
});
$('.ui-multiselect').width(190);
				});