
    var Image1 = new Image();
    var Image2 = new Image();
    Image2.src = "assets/img/pup_img.png";
    Image1.src = "assets/img/dp_img.jpg";

    var k = 0;

    function flip() {
       var j = document.getElementById("dpimg");
       k += 180;
       j.style.transform = "rotatey(" + k + "deg)";
       j.style.transitionDuration = "1s"
    }
    function SwapOut() {
        flip();
        document.dpimg.src = Image1.src;
        return true;
    }

    function SwapBack() {
        flip();    
        document.dpimg.src = Image2.src;
        return true;
    }
