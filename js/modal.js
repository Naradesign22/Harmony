var modal = document.getElementById("modalContainer");
    
  var closeModal = document.getElementById("closeModal");
  var arrShowModalLink = document.getElementsByClassName("openModal");

  for(var i=0;i<arrShowModalLink.length;i++)
  {

    var currentLink = arrShowModalLink[i];
    currentLink.addEventListener("click", function(){
      
      modal.style.display = "flex";
    
      var modalImage = document.getElementById("modalImage");
      modalImage.src = this.getAttribute("path");
      
      return false;
      
    });

  }