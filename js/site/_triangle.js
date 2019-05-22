var triangles = document.getElementsByClassName('part-triangle');
var screenWidth = document.documentElement.clientWidth;
var topTriangles = document.getElementsByClassName('top-triangle');

console.log(triangles.length);

for (var i = 0; i < triangles.length; i++) {
	topTriangles[i].style.borderWidth = "200px 0px 0px " + screenWidth + "px";
	triangles[i].style.borderWidth = "0px " + screenWidth + "px 200px 0px";
}