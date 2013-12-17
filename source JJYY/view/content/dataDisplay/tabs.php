<!--  tabs est mis dans "display.php", donc ce fichier on n'utilise plus !-->

<style type="text/css">
.tabs {
	margin: 0;
	padding: 0;
	float: left;
	list-style: none;
	height: 32px;/*设置tabs的高度*/
	/*根据上图所示，设置列表ul的左边框和右边框*/
	border-bottom: 1px solid #999;
	border-left: 1px solid #999;
	width: 100%;
}
.tabs li {
	float: left;
	margin: 0;
	padding: 0;
	height: 31px;/*=列表项高度设置为比ul高度少1px，=*/
	line-height: 31px;/*=设置相同的line-height让元素居中=*/
	/*=根据上图显示，设置li的边框，并且左边框不设置=*/
	border: 1px solid #999;
	border-left: none;
	margin-bottom: -1px;/*=将列表项下拉1px=*/
	overflow: hidden;
	position: relative;
	background: #e0e0e0;
}
.tabs a {
	text-decoration: none;
	color: #000;
	display: block;
	font-size: 1.2em;
	padding: 0 10px;
	border: 1px solid #fff;
	outline: none;
}
.tabs a:hover {
	background: #ccc;
}
.tabs li.active,
.tabs li.active a:hover {
	background: #fff;
	/*=设置当前tabs项的底部边框，颜色对面和主内容背景色一致=*/
	border-bottom: 1px solid #fff;
}
/*==tabs主内容样式设置==*/
.tabContent {
	border: 1px solid #999;
	border-top: none;
	overflow: hidden;
	clear: both;
	float: left;
	width: 100%;
	background: #fff;
}
.tabBody {
	padding: 20px;
	font-size: 1.2em;
}
}
</style>




<ul class="tabs">
	<li><a href="#tableDisplay">Table</a></li>
	<li><a href="#graphDisplay">Graph</a></li>
	<li><a href="#updateDisplay">Update</a></li>
</ul>
