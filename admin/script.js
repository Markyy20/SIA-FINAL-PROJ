/*=============== SHOW SIDEBAR ===============*/
const showSidebar = (toggleId, sidebarId, mainId) =>{
  const toggle = document.getElementById(toggleId),
  sidebar = document.getElementById(sidebarId),
  main = document.getElementById(mainId)

  if(toggle && sidebar && main){
      toggle.addEventListener('click', ()=>{
            
          sidebar.classList.toggle('show-sidebar')
          
          main.classList.toggle('main-pd')
      })
  }
}
showSidebar('header-toggle','sidebar', 'main')

/*=============== form Modals ===============*/

document.querySelector("#show-login").addEventListener("click",function(){
  document.querySelector(".popup").classList.add("active");
});
document.querySelector(".popup .close-btn").addEventListener("click",function(){
  document.querySelector(".popup").classList.remove("active");
});


 
 function edit(id) {
        window.location.href = "edit.php?ID=" + id;
      }
 function view(id) {
        window.location.href = "view.php?ID=" + id;
      }




 
      