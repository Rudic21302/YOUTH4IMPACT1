//open-text show div
//get all items
var openTextBtns=document.querySelectorAll('.open-text-btn');
var opentextBtnsArray =  Array.prototype.slice.call(openTextBtns);

opentextBtnsArray.forEach(function(openBtn){
  openBtn.addEventListener('click', function(elm){
    var currentButton=elm.target;
    var openTextId=currentButton.dataset.openTextButton;
    var openTextContainer=document.getElementById(openTextId);
    if(currentButton.classList.contains("active"))
    {
      openTextContainer.classList.remove("active");
      currentButton.classList.remove("active");
    }
    else{
      openTextContainer.classList.add("active");
      currentButton.classList.add("active");
    }
   
  });
});

//BENEFIT show div
//Get all items with .benefit-btn
var benefitList= document.querySelectorAll('.benefit-btn');
var benefitListArray =  Array.prototype.slice.call(benefitList);

benefitListArray.forEach(function(benefitBtn){
  benefitBtn.addEventListener('click', function(e){
    var currentButton=e.target;
    //remove .active from all items with .benefit-btn
    var allButtons=document.querySelectorAll('.benefit-btn');
    var allButtonsArray=Array.prototype.slice.call(allButtons);
    allButtonsArray.forEach(function(btn){
      btn.classList.remove("active");
    });
    //remove .active from all divs with .benefit
    var allBenefitContent=document.querySelectorAll('.benefit');//get Node list
    var allBenefitContentArray=Array.prototype.slice.call(allBenefitContent);//convert nodelist to array
    allBenefitContentArray.forEach(function(benefit){
      benefit.classList.remove("active");
    });
    //add .active to the pressed button
    currentButton.classList.add("active");
    //find div with Id that matches data-benefit and add .active to it
    var benefitId=currentButton.dataset.benefitId;
    var benefitContainer=document.getElementById(benefitId);
    benefitContainer.classList.add("active");
  });
});


