
var oSlideShow = function()
{

  var slideShow = this;
  slideShow.width = 375;
  slideShow.currentSlide = 1;

  var slidesInSlideShow = document.getElementsByClassName("img"); 
  slideShow.numberOfSlides = slidesInSlideShow.length; 

  slideShow.slideHandle = document.getElementById("slideHandle");
  slideShow.slideHandle.style.width = (slideShow.numberOfSlides*slideShow.width)+"px"; 
  slideShow.nextBtn = document.getElementById("next");
  slideShow.prevBtn = document.getElementById("prev");

  var arrDots = document.getElementsByClassName("dot");


  for(var i=0; i<arrDots.length; i++)
  {
      var currentDot = i+1;

      var dot = document.getElementById("dot"+currentDot);
      
      
      dot.addEventListener("click", function(){
        slideShow.gotoSlideNum(this.getAttribute("data-num"));
      });
  }

  slideShow.gotoSlideNum = function(whichSlideNumber)
  {
    slideShow.stopInterval();
    slideShow.currentSlide=whichSlideNumber-1;
    slideShow.nextSlide();
    slideShow.startInterval();
  }

  slideShow.nextBtn.addEventListener("click", function(){
    slideShow.stopInterval();
    slideShow.nextSlide();
    slideShow.startInterval();
  });

  slideShow.prevBtn.addEventListener("click", function(){
    slideShow.stopInterval();
    slideShow.prevSlide();
    slideShow.startInterval();
  });


  slideHandle.addEventListener("mouseover", function(){
    slideShow.stopInterval();
  });

  slideHandle.addEventListener("mouseout", function(){
    slideShow.startInterval();
  });

  slideShow.init = function()
  {
    slideShow.startInterval();
  }

  slideShow.startInterval = function()
  {
    slideShow.slideInterval = setInterval(slideShow.nextSlide, 3000);
  }

  slideShow.stopInterval = function()
  {
    clearInterval(slideShow.slideInterval);
  }


  slideShow.nextSlide = function()
  {

    if (slideShow.currentSlide == slideShow.numberOfSlides)
    {
      slideShow.currentSlide = 0; 
    }

   
    


    slideShow.slideHandle.style.left = -1*(slideShow.currentSlide*slideShow.width)+"px"; 

    slideShow.currentSlide++;
  }

  slideShow.prevSlide = function()
  {

    console.log("here");

    if (slideShow.currentSlide==1)
    {
      slideShow.currentSlide = slideShow.numberOfSlides+1;
    }
    slideShow.slideHandle.style.left = (-1*(slideShow.width*(slideShow.currentSlide-1)-slideShow.width))+"px";
    console.log(slideShow.slideHandle.style.left);
    slideShow.currentSlide = slideShow.currentSlide-1;

  }

  return slideShow;ˀ

}

var slideShow = new oSlideShow();
slideShow.init();
