//定义函数获取非行间样式，obj为获取对象，attr为非行间样式
function getStyle(obj,attr){
		if(obj.currentStyle)
		{
			//IE浏览器
			return obj.currentStyle[attr]
		}
		else
		{
			//非IE浏览器
			return getComputedStyle(obj,false)[attr]
		}
}