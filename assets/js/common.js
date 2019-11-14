
$(function () {

/*==============================================
parallax
===============================================*/
    
if (window.matchMedia('(min-width:769px)').matches) {
    
var scene = document.getElementById('scene');
var parallax = new Parallax(scene);
var layer = document.getElementById('scene');
var parallax = new Parallax(layer, {
    scalarX: 3, //レイヤーの横移動の幅
    scalarY: 4, //レイヤーの縦移動の幅
    frictionX: 0.005, //移動の速度 0～1
    frictionY: 0.005, //移動の速度 0～1
    originX: 0, //マウス入力の横軸初期値,デフォルト0.5
    originY: 0 //マウス入力の縦軸初期値,デフォルト0.5
});
    
}

}); /*function*/
