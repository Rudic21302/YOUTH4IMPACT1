var button1=document.getElementById("button1");

var button3=document.getElementById("button3");

var bio1=document.getElementById("team-member-1");

var bio3=document.getElementById("team-member-3");


button1.onclick= function(){
  if(bio1.classList.contains("active"))
  {
    bio1.classList.remove("active");
    button1.classList.remove("active");
  }
  else
  {
    bio1.classList.add("active");
    button1.classList.add("active");
  }
};


button3.onclick= function(){
  if(bio3.classList.contains("active"))
  {
    bio3.classList.remove("active");
    button3.classList.remove("active");
  }
  else
  {
    bio3.classList.add("active");
    button3.classList.add("active");
  }
};




