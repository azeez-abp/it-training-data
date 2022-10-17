'use strict';
try {

    function headr_menu_drop_down(){

    
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
    }
   headr_menu_drop_down()
   
   function sidebar_menu_drop_down(){
      document.querySelectorAll(".list-parent").forEach( (list,k)=>{
        list.addEventListener('click',function(ev){
            ev.preventDefault()
            ev.stopPropagation()
           
            if( (ev.currentTarget.tagName==='LI' || ev.currentTarget.className.includes('list-parent') ) ) {
                 console.log(this, list,k)
                this.children[1].classList.toggle('active')
                this.children[0].querySelector(".chev").classList.toggle(['rotate-90'])
                this.children[0].querySelector(".chev").classList.toggle(['transition-all'])
                         return false
                }
        },false)
      })
   }
   sidebar_menu_drop_down()



function turn_sidebar_zero(){
 document.getElementById("toggle_btn").addEventListener("click",function(){
    document.getElementById("sidebar").classList.toggle("side-bar-zero")
 })
}   
turn_sidebar_zero()
} catch (error) {
    console.log(error)

}