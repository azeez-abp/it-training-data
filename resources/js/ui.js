'use strict';
try {
   let hv =  document.querySelectorAll("[hover-click-drop-next]")
   let  evList = ['mouseover','click','mouseout']
   evList.forEach((ev,k) => {


    hv.forEach(el=>{
        //////////////////////////////////////////////////
        el.addEventListener(ev,(type)=>{
            hv.forEach(tohide=>{
              
                tohide.children[1].classList.add('hidden')
                tohide.children[1].classList.remove('hover-transit')
            })

            if(k===0){
              el.children[1].classList.remove('hidden')
             el.children[1].classList.add('hover-transit')
            }

            if(k===1){
                 el.children[1].classList.remove('hidden')
                el.children[1].classList.add('hover-transit')
               }


        
        })
    })
  });


} catch (error) {
    console.log(error)

}