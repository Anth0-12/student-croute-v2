document.body.onload=function(){
    nbr = 6;
    position = 0;
    container=document.getElementById("container");
    container2=document.getElementById("container2");
    
    gauche=document.getElementById("gauche");
    droit=document.getElementById("droit");
  
    container.style.width=(400*nbr)+"px";
    container2.style.width=(400*nbr)+"px";
  
    for(i=1; i<=nbr; i++){
      div=document.createElement("div");
      div.className="photo_carousel";
      div.style.backgroundImage="url('assets/img/sandwich" +i+ ".jpg')";
      container.appendChild(div);
    }
  
    for(i=1; i<=nbr; i++){
      var div=document.createElement("div");
      div.className="photo_carousel";
      div.style.backgroundImage="url('assets/img/sandwich" +i+ ".jpg')";
      container2.appendChild(div);
    }
}

  gauche.onclick=function(){
    if (position > -nbr+1)
      position--;
      container.style.transform="translate(" +-1200+ "px)";
      container.style.transition="all 1s ease";
  
      container2.style.transform="translate(" +-1200+ "px)";
      container2.style.transition="all 1s ease";
  }
  
  droit.onclick=function(){
    if (position < 0)
      position++;
      container.style.transform="translate(" +position*0+ "px)";
      container.style.transition="all 1s ease";
  
      container2.style.transform="translate(" +position*0+ "px)";
      container2.style.transition="all 1s ease";
  }