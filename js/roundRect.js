window.onload = function () {
    //roundedRectangle(x, y, width, height, upper_left_corner, upper_right_corner, lower_right_corner, lower_left_corner)
    Raphael.fn.roundedRectangle = function (x, y, w, h, r1, r2, r3, r4){
        var array = [];
        array = array.concat(["M",x,r1+y, "Q",x,y, x+r1,y]); //A
        array = array.concat(["L",x+w,y, "Q",x+w,y, x+w,y]); //B
        array = array.concat(["L",x+w,y+h-r3, "Q",x+w,y+h, x+w-r3,y+h]); //C
        array = array.concat(["L",x,y+h, "Q",x,y+h, x,y+h, "Z"]); //D

        return this.path(array);
    };

    var paper = Raphael("canvas", 100, 90);


    paper.roundedRectangle(19, 30, 30, 30, 30, 5, 5, 5).attr({fill: "#99cc66", 'stroke-width': 0});
    paper.roundedRectangle(50, 60, 30, 30, 5, 5, 30, 5).attr({fill: "#99cc66", 'stroke-width': 0});
    
    paper.roundedRectangle(50, 34, 25, 25, 5, 30, 5, 5).attr({fill: "#33cc99", 'stroke-width': 0});
    paper.roundedRectangle(24, 61, 25, 25, 5, 5, 5, 30).attr({fill: "#33cc99", 'stroke-width': 0});
};