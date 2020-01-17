//grab the 3 SVG dots by their id tags
let listener1=document.getElementById("I-1");
let listener2=document.getElementById("I-2");
let listener3=document.getElementById("I-3");

//add event listeners to each of the grabbed SVG dots, that triggers a function on mouseover
//function hides all but the relevant HTML slide which gets set to display, by default all are hidden from DOM in CSS sheet
//this way one pops at most in the same shared location
listener1.addEventListener("mouseover", event => {
    //alert("test");
   
    let wellElement1=document.getElementsByClassName('well-1');
    wellElement1[0].style.display="inline";
    // wellElement1[0].style.border="10px solid";

    let wellElement2=document.getElementsByClassName('well-2');
    wellElement2[0].style.display="none";

    let wellElement3=document.getElementsByClassName('well-3');
    wellElement3[0].style.display="none";

    document.getElementsByClassName("instructions")[0].style.display="none";

    //console.log(wellElement1[0]);
    
    // let aaa=document.getElementById("tester");
    // console.log(aaa);
    // aaa.style.color="blue";
    // aaa.innerHTML="aaa";
    // document.getElementsByClassName('well-1').style.display="visible";
    // document.getElementsByClassName('header').style.color="red";
}
);

listener2.addEventListener("mouseover", event => {
    //alert("test");
   
    let wellElement1=document.getElementsByClassName('well-1');
    wellElement1[0].style.display="none";

    let wellElement2=document.getElementsByClassName('well-2');
    wellElement2[0].style.display="inline";

    let wellElement3=document.getElementsByClassName('well-3');
    wellElement3[0].style.display="none";

    document.getElementsByClassName("instructions")[0].style.display="none";

    
    // let aaa=document.getElementById("tester");
    // console.log(aaa);
    // aaa.style.color="blue";
    // aaa.innerHTML="aaa";
    // document.getElementsByClassName('well-1').style.display="visible";
    // document.getElementsByClassName('header').style.color="red";
}
);

listener3.addEventListener("mouseover", event => {
    //alert("test");
   
    let wellElement1=document.getElementsByClassName('well-1');
    wellElement1[0].style.display="none";

    let wellElement2=document.getElementsByClassName('well-2');
    wellElement2[0].style.display="none";

    let wellElement3=document.getElementsByClassName('well-3');
    wellElement3[0].style.display="inline";

    document.getElementsByClassName("instructions")[0].style.display="none";

    
    // let aaa=document.getElementById("tester");
    // console.log(aaa);
    // aaa.style.color="blue";
    // aaa.innerHTML="aaa";
    // document.getElementsByClassName('well-1').style.display="visible";
    // document.getElementsByClassName('header').style.color="red";
}
);

//repeated 3 times, one for each SVG ID,  residual trial and error code left in as rough work
