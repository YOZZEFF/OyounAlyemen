const body = document.querySelector('body')

// start  sidebar icon
const icon = document.querySelector('#icon')
const iconbars = icon.querySelectorAll('span')
const sidebar = document.querySelector('.sidebar')
const closing = document.querySelector('#closing')

icon.addEventListener('click',function(){
    sidebar.style.right='0px';
})

closing.addEventListener('click',function(){
    sidebar.style.right='-300px';
})
// end sidebar icon 

// start navbar  validation
const sectionOne  = document.querySelector('.section_one')

const linksdiv = document.querySelector('.links')
const links= linksdiv.querySelectorAll('a')
const nav = document.querySelector('nav')
const lang = document.querySelector('.lang')
const btnLang = lang.querySelectorAll('button')





window.addEventListener('scroll',function(){
    if(window.scrollY>20){

        nav.classList.remove('navdefault')
        nav.classList.add('navscroll')
          // links
        for(var i=0;i<links.length;i++){
        links[i].classList.remove('defaultcolor')
        links[i].classList.add('scrollcolor')
        }
        //   icon
        for(var i=0;i<iconbars.length;i++){
            iconbars[i].style.backgroundColor='white';
            }    
            // buttons 
        for(var i=0 ; i<btnLang.length;i++){
            btnLang[i].classList.remove('defaultcolor')
            btnLang[i].classList.add('scrollcolor')
        }


    }else {
       
        nav.classList.remove('navscroll')
        nav.classList.add('navdefault')
             // links
        for(var i=0;i<links.length;i++){
            links[i].classList.remove('scrollcolor')
            links[i].classList.add('defaultcolor')
            }
            // icon
            for(var i=0;i<iconbars.length;i++){
            iconbars[i].style.backgroundColor='black';
            }   


        // buttons
        for(var i=0 ; i<btnLang.length;i++){
            btnLang[i].classList.remove('scrollcolor')
            btnLang[i].classList.add('defaultcolor')
        }
        
    }
})
// end  navbar  validation

// start  displaying section one  images with words 
const divOne =` <div class="child three">
<img src="../images/containers.webp" alt="container">
<div class="words_section_one">
<h1 class="widthtitle3">Logistics services</h1>
<p class="widthpara3">Create an atmosphere of competition by providing better logistical services</p>
</div>
</div>`

const divTwo = ` <div class="child two">
<img src="../images/flight.webp" alt="flight">
<div class="words_section_one">
<h1>Discover</h1>
<p class="widthpara2">Sea and air freight services</p>
</div>
</div>`

const divThree = `  <div class="child one" id="divone">
<img src="../images/ship.webp" alt="ship">
<div class="words_section_one">
<h1 class="noc">Oyoun Al-Yemen</h1>
<p>For international express shipping</p>
</div>
</div>`


const sectionOneDiv = [divOne,divTwo,divThree]
let x=0;
setInterval(function(){
sectionOne.innerHTML = sectionOneDiv[x]

    x++;
    if(x>2){
        x=0;
    }


},3000)
// end displaying section one
// start section three 


const observer =  new IntersectionObserver((entries)=>{
    entries.forEach(entry => {
        if(entry.isIntersecting){
            entry.target.classList.add('showboxes')
            body.style.overflowX='hidden'
        }else{
            entry.target.classList.remove('showboxes')
            body.style.overflowX='hidden'


        }
        
    });

});
const boxesdiv = document.querySelector('.section_three')

const boxes = boxesdiv.querySelectorAll('.box')
boxes.forEach((box)=>observer.observe(box));

// end section three


