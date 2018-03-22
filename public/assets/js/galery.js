

/*SHOW SLIDER*/


document.getElementsByClassName('block_img')[0].onclick = function(event){
	
	document.getElementsByClassName('qwerty')[0].style.display = 'block';
	document.getElementById('show').style.display = 'block';
	document.getElementsByClassName('showImagesImg')[0].src = event.target.src;
	
}












var collectionImg = document.getElementsByClassName('imgGaleryPopUp');

var i;

for(i = 0; i < collectionImg.length; i++) {
	function actionImg(i){
		//console.log( collectionImg[i].src );
		return collectionImg[i].onclick = function(){
			//alert(collectionImg[i].src);
			document.getElementsByClassName('showImagesImg')[0].src = collectionImg[i].src;
		}
	}
	actionImg(i);
}





/*close galery*/
document.getElementById('show').onclick = function(event){
	
	//alert(event.target.id);
	
	console.log(event.target);
	
	if(event.target.className !== 'showImagesImg' && event.target.className !== 'imgGaleryPopUp') {
		//alert();
		document.getElementById('show').style.display = 'none';
		document.getElementsByClassName('qwerty')[0].style.display = 'none';
	}
	
}

