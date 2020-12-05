{
  let crse=document.querySelector("#course").value;

  setInterval(function(){
    let course=document.querySelector("#course").value;
    if(crse!=course){
      crse=course;
      let arr=document.getElementsByClassName("hide");
      for(let i=0;i<arr.length;i+=1){
        arr[i].style.display="none";
      }
    }
    if(crse=="btech"||crse=="mtech"){
      document.getElementById(course).style.display="block";
    }
  }, 1000);

  let sem= document.getElementById("sem");

  sem.addEventListener("keydown",function(e){
    let sem_val=e.key;
    let error_count=0;
    let error_sem=document.getElementById("error_sem");
    error_sem.style.display="none";
    error_sem.style.color="red";
    if(crse=="btech"){
      if(sem_val>8&&sem_val<1){
        error_count=1;
        error_sem.style.display="inline";
        error_sem.innerHTML="**Invalid Selection";
      }
    }
    else if(crse=="mba"||crse=="mca"||crse=="mtech"){
      if(sem_val>4&&sem_val<1){
        error_count=1;
        error_sem.style.display="inline";
        error_sem.innerHTML="**Invalid Selection";
      }
    }
    else{
      if(sem_val>6&&sem_val<1){
        error_count=1;
        error_sem.style.display="inline";
        error_sem.innerHTML="**Invalid Selection";
      }
    }
    if(!error_count){
      let div=document.getElementById("prev-sem");
      let result="";
      for(let i=1;i<sem_val;i++){
        result+='<label for="sem'+i+'"> '+i+' Sem SGPA</label>'+
        '<input type="number" required id="sem'+i+'" name="sem'+i+'" size=5><br>';
      }
      div.innerHTML=result;
    }
  });

  function show_scholarship(){
    document.getElementById("show").style.display="block";
  }

  function validation(){
    let tn_val= document.getElementById("tenth").value;
    let tw_val= document.getElementById("twelth").value;
    let tn= document.getElementById('10th');
    let tw= document.getElementById('12th');
    let check=0;
    tn.style.color="red";
    tw.style.color="red";
    if(tn_val<0 ||tn_val>100 || isNaN(tn_val)){
      tn.innerHTML ="**Invalid Entry";
      check=1;
      return false;
    }
    if(tw_val<0 ||tw_val>100 || isNaN(tw_val)){
      tw.innerHTML ="**Invalid Entry";
      check =1;
      return false
    }
    if(check!=1){
      for(let i=1;i<sem.value;i++){
        let flag='sem'+i;
        if(document.getElementById(flag).value < 7){
          document.getElementById('valid').value="0";
        }
      }
      return true;
    }
  }
}
