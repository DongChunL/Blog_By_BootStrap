function setImg(w,h){
	var imgList = document.getElementsByName("pic");
	for(var i=0 ; i<imgList.length ; i++)
	if(imgList[i].width>w||imgList[i].height>h){
		imgList[i].width = w;
		imgList[i].height = h;
	}
}
setImg(225,323);